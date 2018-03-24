<?php

namespace Drupal\premium_partner;

use Drupal\Core\Entity\ContentEntityStorageInterface;
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
interface FolderStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Folder revision IDs for a specific Folder.
   *
   * @param \Drupal\premium_partner\Entity\FolderInterface $entity
   *   The Folder entity.
   *
   * @return int[]
   *   Folder revision IDs (in ascending order).
   */
  public function revisionIds(FolderInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Folder author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Folder revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\premium_partner\Entity\FolderInterface $entity
   *   The Folder entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(FolderInterface $entity);

  /**
   * Unsets the language for all Folder with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
