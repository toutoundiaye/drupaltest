<?php

namespace Drupal\premium_partner;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\premium_partner\Entity\FolderInterface;

/**
 * Defines the storage handler class for Folder entities.
 *
 * This extends the base storage class, adding required special handling for
 * Folder entities.
 *
 * @ingroup premium_partner
 */
class FolderStorage extends SqlContentEntityStorage implements FolderStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(FolderInterface $entity) {
    return $this->database->query(
      'SELECT vid FROM {folder_revision} WHERE id=:id ORDER BY vid',
      [':id' => $entity->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
      'SELECT vid FROM {folder_field_revision} WHERE uid = :uid ORDER BY vid',
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(FolderInterface $entity) {
    return $this->database->query('SELECT COUNT(*) FROM {folder_field_revision} WHERE id = :id AND default_langcode = 1', [':id' => $entity->id()])
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update('folder_revision')
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

}
