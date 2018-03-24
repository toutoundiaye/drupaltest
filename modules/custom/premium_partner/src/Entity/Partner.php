<?php

namespace Drupal\premium_partner\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
* Defines the Partnerentity.
*
* @ConfigEntityType(
*   id = "premium_partner_entity",
*   label = @Translation("Partner"),
*   config_prefix = "partner",
*   entity_keys = {
*     "id" = "name",
*     "label" = "label",
*   }
* )
*/
class Partner extends ConfigEntityBase
{
    /**
    * The Partner label.
    *
    * @var string
    */
    public $label;

    /**
    * The Partner machine readable name.
    *
    * @var string
    */
    public $id;

    /**
     * The Partner url.
     *
     * @var string
     */
    public $url;

}