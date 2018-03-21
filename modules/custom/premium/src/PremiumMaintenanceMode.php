<?php

namespace Drupal\premium;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Site\MaintenanceMode;
use Drupal\Core\State\StateInterface;

class PremiumMaintenanceMode extends MaintenanceMode
{
    /**
     * @var StateInterface $state
     */
    protected $state;

    /**
     * PremiumMainteanceMode constructor.
     * @param StateInterface $state
     */
    public function __construct(StateInterface $state)
    {
        parent::__construct($state);
    }

    public function exempt(AccountInterface $account)
    {
        if (2 == $account->id()){
            return TRUE;
        }else {
            return $account->hasPermission('access site in maintenance mode');
        }
    }
}