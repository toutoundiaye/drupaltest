<?php

namespace Drupal\premiumcontact\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Contact premium entities.
 */
class contactPremiumViewsData extends EntityViewsData {

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
