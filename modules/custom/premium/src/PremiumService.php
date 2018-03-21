<?php

namespace Drupal\premium;

/**
 * Class PremiumService
 * @package Drupal\premium
 */
class PremiumService
{
    public function isUserPremium($uid = 0)
    {
        //recupere l'utilisateur via son uid
      $user = \Drupal\user\Entity\User::load($uid);

      if (!empty($user)) {
          return $user->hasPermission('access premium content');
      }else {
          return false;
      }
    }
}
