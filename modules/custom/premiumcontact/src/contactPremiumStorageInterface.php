<?php

namespace Drupal\premiumcontact;

use Drupal\Core\Entity\ContentEntityStorageInterface;
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
interface contactPremiumStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Contact premium revision IDs for a specific Contact premium.
   *
   * @param \Drupal\premiumcontact\Entity\contactPremiumInterface $entity
   *   The Contact premium entity.
   *
   * @return int[]
   *   Contact premium revision IDs (in ascending order).
   */
  public function revisionIds(contactPremiumInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Contact premium author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Contact premium revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\premiumcontact\Entity\contactPremiumInterface $entity
   *   The Contact premium entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(contactPremiumInterface $entity);

  /**
   * Unsets the language for all Contact premium with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
