<?php

namespace Drupal\premium\Service;

/**
 * Class PromotionService
 * @package Drupal\premium\Service
 */
class PromotionService
{
    public function showPromotion() 
    {
        $config = \Drupal::config('premium.settings');

        $message = $config->get('premium_promotion.message');
        $debut_promotion = $config->get('premium_promotion.debut');
        $fin_promotion = $config->get('premium_promotion.fin');
        
        if ($message = NULL) {
            return array(
                'message' => '',
                'error' => TRUE,
            );
        }else {
            return array(
                'message' => array (
                    'text' => $message,
                    'debut_promotion' => $debut_promotion,
                    'fin_promotion' => $fin_promotion
                ),
                'error' => FALSE,
            );
        }
    }
}