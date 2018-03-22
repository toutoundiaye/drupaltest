<?php

namespace Drupal\premium\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\premium\Event\PremiumMessageEvent;

class MessageForm extends FormBase
{
    /**
     * @return string
     */
    // Déclaration
    public function getFormId()
    {
        return 'message_form';
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     * @return array
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['message'] = array(
            '#type' => 'textarea',
            '#attributes' => array(
                'placeholder' => t('Write your message')),
            '#title' => t('Message'),
            '#required' => TRUE,
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => t('Submit'),
        );

        return $form;
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Traitement des données soumises.

        $dispatcher = \Drupal::service('event_dispatcher');
        $dispatcher->dispatch(PremiumMessageEvent::PREMIUM_MESSAGE_SUBMIT,
            new PremiumMessageEvent($message = $form_state->getValue('message')));
    }
}