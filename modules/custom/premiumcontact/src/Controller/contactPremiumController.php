<?php

namespace Drupal\premiumcontact\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\premiumcontact\Entity\contactPremiumInterface;

/**
 * Class contactPremiumController.
 *
 *  Returns responses for Contact premium routes.
 */
class contactPremiumController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a Contact premium  revision.
   *
   * @param int $contact_premium_revision
   *   The Contact premium  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($contact_premium_revision) {
    $contact_premium = $this->entityManager()->getStorage('contact_premium')->loadRevision($contact_premium_revision);
    $view_builder = $this->entityManager()->getViewBuilder('contact_premium');

    return $view_builder->view($contact_premium);
  }

  /**
   * Page title callback for a Contact premium  revision.
   *
   * @param int $contact_premium_revision
   *   The Contact premium  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($contact_premium_revision) {
    $contact_premium = $this->entityManager()->getStorage('contact_premium')->loadRevision($contact_premium_revision);
    return $this->t('Revision of %title from %date', ['%title' => $contact_premium->label(), '%date' => format_date($contact_premium->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a Contact premium .
   *
   * @param \Drupal\premiumcontact\Entity\contactPremiumInterface $contact_premium
   *   A Contact premium  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(contactPremiumInterface $contact_premium) {
    $account = $this->currentUser();
    $langcode = $contact_premium->language()->getId();
    $langname = $contact_premium->language()->getName();
    $languages = $contact_premium->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $contact_premium_storage = $this->entityManager()->getStorage('contact_premium');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $contact_premium->label()]) : $this->t('Revisions for %title', ['%title' => $contact_premium->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all contact premium revisions") || $account->hasPermission('administer contact premium entities')));
    $delete_permission = (($account->hasPermission("delete all contact premium revisions") || $account->hasPermission('administer contact premium entities')));

    $rows = [];

    $vids = $contact_premium_storage->revisionIds($contact_premium);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\premiumcontact\contactPremiumInterface $revision */
      $revision = $contact_premium_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $contact_premium->getRevisionId()) {
          $link = $this->l($date, new Url('entity.contact_premium.revision', ['contact_premium' => $contact_premium->id(), 'contact_premium_revision' => $vid]));
        }
        else {
          $link = $contact_premium->link($date);
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => \Drupal::service('renderer')->renderPlain($username),
              'message' => ['#markup' => $revision->getRevisionLogMessage(), '#allowed_tags' => Xss::getHtmlTagList()],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.contact_premium.translation_revert', ['contact_premium' => $contact_premium->id(), 'contact_premium_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.contact_premium.revision_revert', ['contact_premium' => $contact_premium->id(), 'contact_premium_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.contact_premium.revision_delete', ['contact_premium' => $contact_premium->id(), 'contact_premium_revision' => $vid]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['contact_premium_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
