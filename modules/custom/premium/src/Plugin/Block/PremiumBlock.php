<?php

namespace Drupal\premium\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;


/**
 * Provides a 'Premium' Block.
 *
 * @Block(
 *   id = "premium_status",
 *   admin_label = @Translation("Statut premium de l'utilisateur"),
 *   category = @Translation("Premium"),
 * )
 */
class PremiumBlock extends BlockBase implements BlockPluginInterface
{
    /**
     * {@inheritdoc}
     */
   public function build() {
       $message = 'Vous ne pouvez pas voir les contenus premium';
       //$user = \Drupal\user\Entity\User::load($uid);
       //$userName = $user->getUsername();
       if (\Drupal::currentUser()->hasPermission('access premium content')) {
           $message = 'Vous pouvez voir les contenus premium';
       }

       $config = $this->getConfiguration();

       if (!empty($config['premium_block_name'])) {
           $name = $config['premium_block_name'];
       }
       else {
           $name = $this->t('my dear');
       }
       return array(
           '#markup' => $this->t('<p>'.'Bienvenue @name!'.'</p>'.'<p>'.'@message' .'</p>' , array(
           //'#markup' => $this->t('Bienvenue @name! @message', array(
               '@name' => $name,
               '@message' => $message,
           )),
           '#prefix' => '<h3>',
           '#suffix' => '</h3>',
       );
   }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        $form = parent::blockForm($form, $form_state);

        $config = $this->getConfiguration();

        $form['premium_block_name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Who'),
            '#description' => $this->t('Say welcome to who?'),
            '#default_value' => isset($config['premium_block_name']) ? $config['premium_block_name'] : '',
        ];

        return $form;
    }
    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {
        parent::blockSubmit($form, $form_state);
        $values = $form_state->getValues();
        $this->configuration['premium_block_name'] = $values['premium_block_name'];
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        $default_config = \Drupal::config('premium.settings');
        return [
            'premium_block_name' => $default_config->get('premium.name'),
        ];
    }
}
