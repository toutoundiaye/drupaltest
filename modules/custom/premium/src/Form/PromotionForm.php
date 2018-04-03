<?php

namespace Drupal\premium\Form;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure form settings for this site.
 */
class PromotionForm extends ConfigFormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'premium_promotion_settings';
    }

    /**
     * {@inheritdoc}
     */
    protected function getEditableConfigNames()
    {
        return [
            'premium.settings',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form = parent::buildForm($form, $form_state);

        $config = $this->config('premium.settings');

        $form['message'] = array(
            '#type' => 'text_format',
            '#format' => !empty($config->get('message')['format']) ? 
                $config->get('message')['format'] : 'full_html',
            '#title' => $this->t('Message'),
            '#default_value' => $config->get('message')['value'],
        );

        $form['debut_promotion'] = array(
            '#type' => 'datetime',
            '#title' => 'Début de la promotion',
            '#default_value' => !empty($config->get('debut_promotion')) ? 
                DrupalDateTime::createFromTimestamp($config->get('debut_promotion')) 
                : NULL,
        );

        $form['fin_promotion'] = array(
            '#type' => 'datetime',
            '#title' => 'Fin de la promotion',
            '#default_value' => !empty($config->get('fin_promotion')) ? 
                DrupalDateTime::createFromTimestamp($config->get('fin_promotion')) 
                : NULL,
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $date_actuelle = time();
        if ($form_state->getValue('debut_promotion')->getTimestamp() < $date_actuelle) {
            $form_state->setErrorByName('debut_promotion', $this->t('The beginning of the
             promotion cannot be anterior to the present day.  
            Please enter a new date.'));
        }

        if ($form_state->getValue('debut_promotion')->getTimestamp() >
            $form_state->getValue('fin_promotion')->getTimestamp()) {
                $form_state->setErrorByName('fin_promotion', $this->t('The end of the
                promotion cannot be anterior to the beginning of the promotion.  
               Please enter a new date.'));
            }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Traitement des données soumises.
        
        // $values = $form_state->getValues();
        // $this->config('premium.settings')
        //     ->set('premium_promotion.message', $values['message'])
        //     ->set('premium_promotion.debut', $values['debut_promotion']->getTimestamp())
        //     ->set('premium_promotion.fin', $values['fin_promotion']->getTimestamp())
        //     ->save();  

        //Une manière plus élégante

        $values = $form_state->getValues();
        $config = $this->config('premium.settings');
        foreach ($values as $field_name => $value) {
            if ($field_name === 'debut_promotion' || $field_name === 'fin_promotion') {
                 // Pour les champs date et heure, il faut stocker le timestamp.
                 $config->set($field_name, $value->getTimestamp());
            } else {
                $config->set($field_name, $value);
            }           
        }
        // Save the configuration.
        $config->save();

        // Invalidate cache.
        Cache::invalidateTags(['PREMIUM-PROMOTION']);

        return parent::submitForm($form, $form_state);

    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        $default_config = \Drupal::config('premium.settings');
        return [
            'message' => $default_config->get('premium_promotion.message'),
            'debut' => $default_config->get('premium_promotion.debut'),
            'fin' => $default_config->get('premium_promotion.fin'),
        ];
    }
}