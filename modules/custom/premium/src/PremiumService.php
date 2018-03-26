<?php

namespace Drupal\premium;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Class PremiumService
 * @package Drupal\premium
 */
class PremiumService
{
    /**
     * @var EntityTypeManagerInterface
     */
    private $manager;

    public function __construct(EntityTypeManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function isUserPremium($uid = 0)
    {
        //recupere l'utilisateur via son uid
      //$user = \Drupal\user\Entity\User::load($uid);
      $user = $this->manager->getStorage('user')->load($uid);
      if (!empty($user)) {
          return $user->hasPermission('access premium content');
      }else {
          return false;
      }
    }
}
