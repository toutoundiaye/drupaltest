<?php

namespace Drupal\premium_partner\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Folder entities.
 *
 * @ingroup premium_partner
 */
interface FolderInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Folder name.
   *
   * @return string
   *   Name of the Folder.
   */
  public function getName();

  /**
   * Sets the Folder name.
   *
   * @param string $name
   *   The Folder name.
   *
   * @return \Drupal\premium_partner\Entity\FolderInterface
   *   The called Folder entity.
   */
  public function setName($name);

  /**
   * Gets the Folder creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Folder.
   */
  public function getCreatedTime();

  /**
   * Sets the Folder creation timestamp.
   *
   * @param int $timestamp
   *   The Folder creation timestamp.
   *
   * @return \Drupal\premium_partner\Entity\FolderInterface
   *   The called Folder entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Folder published status indicator.
   *
   * Unpublished Folder are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Folder is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Folder.
   *
   * @param bool $published
   *   TRUE to set this Folder to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\premium_partner\Entity\FolderInterface
   *   The called Folder entity.
   */
  public function setPublished($published);

  /**
   * Gets the Folder revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Folder revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\premium_partner\Entity\FolderInterface
   *   The called Folder entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Folder revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Folder revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\premium_partner\Entity\FolderInterface
   *   The called Folder entity.
   */
  public function setRevisionUserId($uid);

}
