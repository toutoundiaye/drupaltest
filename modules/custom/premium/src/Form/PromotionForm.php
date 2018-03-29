<?php

namespace Drupal\premium\Form;

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
            '#type' => 'textarea',
            '#attributes' => array(
                'placeholder' => t('Write your message')),
            '#title' => $this->t('Message'),
            '#default_value' => $config->get('premium_promotion.message'),
        );

        $form['debut_promotion'] = array(
            '#type' => 'datetime',
            '#title' => 'Début de la promotion',
        );

        $form['fin_promotion'] = array(
            '#type' => 'datetime',
            '#title' => 'Fin de la promotion',
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Traitement des données soumises.
        $values = $form_state->getValues();
        $this->config('premium.settings')
            ->set('premium_promotion.message', $values['message'])
            ->set('premium_promotion.debut', $values['debut_promotion'])
            ->set('premium_promotion.fin', $values['fin_promotion'])
            ->save();
    
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