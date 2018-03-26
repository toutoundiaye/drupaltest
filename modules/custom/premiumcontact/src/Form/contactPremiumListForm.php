<?php

namespace Drupal\premiumcontact\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\premiumcontact\Entity\ContactPremium;

class contactPremiumListForm extends FormBase
{
    /**
     * @return string
     */
// Déclaration
    public function getFormId()
    {
        return 'contact_list_form';
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     * @return array
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $ids = \Drupal::entityQuery('contact_premium')
            ->execute();
        //ksm($ids);

        $contacts = ContactPremium::loadMultiple($ids);

        $form['contacts'] = array(
            '#type' => 'table',
            '#header' => array(
                $this->t('Name'),
                $this->t('Username'),
                $this->t('Email'),
                $this->t('Website'),

            ),
            '#title' => $this->t('Contacts')
        );

        /* @var $contact ContactPremium
         */
        foreach ($contacts as $id => $contact) {
            $form['contacts'][$id] = array(
                array('#markup' => $contact->getName()),
                array('#markup' => $contact->field_username->value),
                array('#markup' => $contact->field_email->value),
                array('#markup' => $contact->field_website->value),
            );
        }

        $form['number'] = array(
            '#type' => 'number',
            '#maxvalue' => 10,
            '#minvalue' => 1,
            '#title' => t('ID contact'),
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
     * @return void
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Traitement des données soumises.
        //valeur id du formulaire
        $id = $form_state->getValue('number');
        //client HTTP
        $client = \Drupal::httpClient();
        //concatenation de l'uri avec l'id du formulaire
        $uri = sprintf('https://jsonplaceholder.typicode.com/users/%d', $id);
        //ou bien
        //$uri ='https://jsonplaceholder.typicode.com/users/'. $id;

        //RÊQUETE get + Reponse
        $request = $client->get($uri);
        // $request = $client->request('GET', "https://jsonplaceholder.typicode.com/users/$id");
        $response = json_decode($request->getBody());

        //constructeur
        $contact = ContactPremium::create(
            [
                'name' =>  $response->name,
                'field_username' => $response->username,
                'field_email' => $response->email,
                'field_website' => $response->website
            ]

        );

        //enregistre l entité en base de données
        $contact->save();
    }
}