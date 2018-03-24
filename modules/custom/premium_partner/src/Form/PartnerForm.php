<?php

namespace Drupal\premium_partner\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\premium_partner\Entity\Partner;

class PartnerForm extends FormBase
{
    /**
     * @return string
     */
// Déclaration
    public function getFormId()
    {
        return 'partner_form';
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     * @return array
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $ids = \Drupal::entityQuery('premium_partner_entity')
            ->execute();
        ksm($ids);

//        $partners = Partner::loadMultiple($ids);
//
//        $form['partners'] = array(
//            '#type' => 'table',
//            '#header' => array(
//                $this-> t('ID'),
//                $this-> t('Label'),
//                $this-> t('Url'),
//            ),
//            '#title' => $this-> t('Partners')
//        );

        /* @var $parter Partner
         */
//        foreach ($partners as $id => $partner) {
//            $form['partners'][$id] = array(
//               array('#markup' => $partner->id()),
//               array('#markup' => $partner->label),
//               array('#markup' => $partner->url),
//            );
//        }

        $form['id'] = array(
            '#type' => 'textfield',
            '#attributes' => array(
                'placeholder' => t('Indicate your ID')),
            '#title' => t('ID'),
            '#required' => TRUE,
        );

        $form['label'] = array(
            '#type' => 'textfield',
            '#maxlength' => '255',
            '#description' => $this->t('A unique label for patner.'),
            '#attributes' => array(
                'placeholder' => t('Indicate your label ')
            ),
            '#title' => t('Label'),
        );

        $form['url'] = array(
            '#type' => 'textfield',
            '#attributes' => array(
                'placeholder' => t('Indicate your url')
            ),
            '#title' => t('Url'),
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
        //creer une nouvelle entité config
        $partner = new Partner(
            [
                'label' => $form_state->getValue('label'),
                'id' => $form_state->getValue('id'),
                'url' => $form_state->getValue('url')
            ],
            'premium_partner_entity'
        );
        $partner->save();

    }

}