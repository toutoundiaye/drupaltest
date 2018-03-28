<?php

namespace Drupal\premium\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure form settings for this site.
 */
class CacheForm extends ConfigFormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'premium_cache_settings';
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
            '#default_value' => $config->get('premium_cache.message'),
        );

        $form['image'] = array(
            '#type' => 'managed_file',
            '#title' => 'Image',
            '#upload_location' => 'public://pictures/',
            '#multiple' => FALSE,
            '#upload_validators' => array(
                'file_validate_extensions' => array('png gif jpg jpeg'),
                'file_validate_size' => array(25600000),
//                'file_validate_image_resolution' => array('800x600', '400x300'),
        ));

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
            ->set('premium_cache.message', $values['message'])
            ->set('premium_cache.image', $values['image'])
            ->save();
        ksm($values['image']);
        return parent::submitForm($form, $form_state);
    }
  


    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        $default_config = \Drupal::config('premium.settings');
        return [
            'message' => $default_config->get('premium_cache.message'),
            'image' => $default_config->get('premium_cache.image'),
        ];
    }
}