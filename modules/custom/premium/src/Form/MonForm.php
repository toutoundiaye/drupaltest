<?php

namespace Drupal\premium\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MonForm extends FormBase
{
    /**
     * @return string
     */
// Déclaration
    public function getFormId()
    {
        return 'premium_form';
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     * @return array
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['name'] = array(
            '#type' => 'textfield',
            '#attributes' => array(
               'placeholder' => t('Indicate your name')),
            '#title' => t('Name'),
            '#required' => TRUE,
        );

        $form['phone_number'] = array(
            '#type' => 'tel',
            '#attributes' => array(
               'placeholder' => t('Indicate your phone number ')
            ),
            '#title' => t('Phone number'),
        );

        $form['email'] = array(
            '#type' => 'email',
            '#attributes' => array(
               'placeholder' => t('Indicate your email')
            ),
            '#title' => t('Email'),
            '#description' => t('An address for information'),
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
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        // Logique de validation.
        if (strlen($form_state->getValue('phone_number')) < 10) {
            $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. 
            Please enter a full phone number.'));
        }
//        if (preg_match("/^[a-zA-z]\d@[a-zA-z]\d\.[a-zA-z]{3}$/", $form_state->getValue('email'))){
//            $form_state->setErrorByName('email', $this->t('The email is incorrect please enter a email
//            like toto@yopmail.com'));
//        }
        if (!filter_var($form_state->getValue('email'), FILTER_VALIDATE_EMAIL)) {
            $form_state->setErrorByName('email', $this->t('The email is incorrect please enter a email 
            like toto@yopmail.com'));
        }
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Traitement des données soumises.

        //$form_state->setRedirectUrl($url);

        drupal_set_message($this->t('Hello @name, your phone number is @number, 
            and your email adress is @email',
                array(
                    '@number' => $form_state->getValue('phone_number'),
                    '@name' => $form_state->getValue('name'),
                    '@email' => $form_state->getValue('email'),
                )
            )
        );
    }
}