<?php

namespace Drupal\premiumcontact;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\premiumcontact\Entity\contactPremiumInterface;

/**
 * Defines the storage handler class for Contact premium entities.
 *
 * This extends the base storage class, adding required special handling for
 * Contact premium entities.
 *
 * @ingroup premiumcontact
 */
class contactPremiumStorage extends SqlContentEntityStorage implements contactPremiumStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(contactPremiumInterface $entity) {
    return $this->database->query(
      'SELECT vid FROM {contact_premium_revision} WHERE id=:id ORDER BY vid',
      [':id' => $entity->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
      'SELECT vid FROM {contact_premium_field_revision} WHERE uid = :uid ORDER BY vid',
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(contactPremiumInterface $entity) {
    return $this->database->query('SELECT COUNT(*) FROM {contact_premium_field_revision} WHERE id = :id AND default_langcode = 1', [':id' => $entity->id()])
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update('contact_premium_revision')
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

}
