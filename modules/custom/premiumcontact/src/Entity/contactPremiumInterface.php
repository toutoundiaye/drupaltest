<?php

namespace Drupal\premiumcontact\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Contact premium entities.
 *
 * @ingroup premiumcontact
 */
interface contactPremiumInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Contact premium name.
   *
   * @return string
   *   Name of the Contact premium.
   */
  public function getName();

  /**
   * Sets the Contact premium name.
   *
   * @param string $name
   *   The Contact premium name.
   *
   * @return \Drupal\premiumcontact\Entity\contactPremiumInterface
   *   The called Contact premium entity.
   */
  public function setName($name);

  /**
   * Gets the Contact premium creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Contact premium.
   */
  public function getCreatedTime();

  /**
   * Sets the Contact premium creation timestamp.
   *
   * @param int $timestamp
   *   The Contact premium creation timestamp.
   *
   * @return \Drupal\premiumcontact\Entity\contactPremiumInterface
   *   The called Contact premium entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Contact premium published status indicator.
   *
   * Unpublished Contact premium are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Contact premium is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Contact premium.
   *
   * @param bool $published
   *   TRUE to set this Contact premium to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\premiumcontact\Entity\contactPremiumInterface
   *   The called Contact premium entity.
   */
  public function setPublished($published);

  /**
   * Gets the Contact premium revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Contact premium revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\premiumcontact\Entity\contactPremiumInterface
   *   The called Contact premium entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Contact premium revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Contact premium revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\premiumcontact\Entity\contactPremiumInterface
   *   The called Contact premium entity.
   */
  public function setRevisionUserId($uid);

}
