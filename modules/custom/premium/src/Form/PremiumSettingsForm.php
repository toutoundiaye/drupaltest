<?php

namespace Drupal\premium\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
* Configure form settings for this site.
*/
class PremiumSettingsForm extends ConfigFormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'premium_admin_settings';
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
            '#default_value' => $config->get('message'),
        );

       return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        // Logique de validation.
        //$form_state->setErrorByName('form_field', 'message');
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
       // Traitement des données soumises.
       $values = $form_state->getValues();
       $this->config('premium.settings')
        ->set('message', $values['message'])
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
            'message' => $default_config->get('premium.message'),
        ];
    }
}