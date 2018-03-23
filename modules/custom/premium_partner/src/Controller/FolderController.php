<?php

namespace Drupal\premium_partner\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\premium_partner\Entity\FolderInterface;

/**
 * Class FolderController.
 *
 *  Returns responses for Folder routes.
 */
class FolderController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a Folder  revision.
   *
   * @param int $folder_revision
   *   The Folder  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($folder_revision) {
    $folder = $this->entityManager()->getStorage('folder')->loadRevision($folder_revision);
    $view_builder = $this->entityManager()->getViewBuilder('folder');

    return $view_builder->view($folder);
  }

  /**
   * Page title callback for a Folder  revision.
   *
   * @param int $folder_revision
   *   The Folder  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($folder_revision) {
    $folder = $this->entityManager()->getStorage('folder')->loadRevision($folder_revision);
    return $this->t('Revision of %title from %date', ['%title' => $folder->label(), '%date' => format_date($folder->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a Folder .
   *
   * @param \Drupal\premium_partner\Entity\FolderInterface $folder
   *   A Folder  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(FolderInterface $folder) {
    $account = $this->currentUser();
    $langcode = $folder->language()->getId();
    $langname = $folder->language()->getName();
    $languages = $folder->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $folder_storage = $this->entityManager()->getStorage('folder');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $folder->label()]) : $this->t('Revisions for %title', ['%title' => $folder->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all folder revisions") || $account->hasPermission('administer folder entities')));
    $delete_permission = (($account->hasPermission("delete all folder revisions") || $account->hasPermission('administer folder entities')));

    $rows = [];

    $vids = $folder_storage->revisionIds($folder);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\premium_partner\FolderInterface $revision */
      $revision = $folder_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $folder->getRevisionId()) {
          $link = $this->l($date, new Url('entity.folder.revision', ['folder' => $folder->id(), 'folder_revision' => $vid]));
        }
        else {
          $link = $folder->link($date);
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
              Url::fromRoute('entity.folder.translation_revert', ['folder' => $folder->id(), 'folder_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.folder.revision_revert', ['folder' => $folder->id(), 'folder_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.folder.revision_delete', ['folder' => $folder->id(), 'folder_revision' => $vid]),
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

    $build['folder_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
