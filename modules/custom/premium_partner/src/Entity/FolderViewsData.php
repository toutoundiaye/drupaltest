<?php

namespace Drupal\premium_partner\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Folder entities.
 */
class FolderViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
