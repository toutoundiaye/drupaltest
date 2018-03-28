<?php

namespace Drupal\premium\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;


/**
 * Provides a 'Cache' Block.
 *
 * @Block(
 *   id = "premium_cache",
 *   admin_label = @Translation("Gestion des caches en locale"),
 *   category = @Translation("Cache"),
 * )
 */
class CustomBlock extends BlockBase implements BlockPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function build() {

        $config = \Drupal::config('premium.settings');

        if (!empty($config->get('premium_cache.message'))) {
            $message = $config->get('premium_cache.message');
        }
        else {
           $message = $this->t('Comment gerer le cache en locale');
        }

        if (!empty($config->get('premium_cache.image'))) {
           $image = $config->get('premium_cache.image');
        }
        else {
            $image = $this->t('Aucune image...');
            //$file = File::load($config->get('premium_cache.image')[0]);
           // $uri = $file->getFileUri();
           // $urlImage = Url::fromUri($uri); 
        }
    

       // $file = File::load($image[0]);
      // $file = File::load($config->get('premium_cache.image')[0]);
        return array(
            'message' => [
                '#theme' => 'custom',
                '#markup' => $this->t('@message', array(
                    '@message' => $message,
                )),
            ],
            // 'image' => [
            //     '#theme' => 'image',
            //     '#uri' => $file->getFileUri(),
            // ],
            'cache' => [
                '#cache' => [
                    'tags' => ['customBlock'],
                    'max-age' => 0]
            ]
         );    
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        $form = parent::blockForm($form, $form_state);

        $config = $this->getConfiguration();

        $form['premium_cache_block_message'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Message'),
            '#default_value' => isset($config['premium_cache_block_message']) ?
                $config['premium_cache_block_message'] : '',
        ];

        $form['premium_cache_block_image'] = [
            '#type' => 'managed_file',
            '#default_value' => isset($config['premium_cache_block_image']) ?
                $config['premium_cache_block_image'] : '',
        ];

        return $form;
    }
    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {
        parent::blockSubmit($form, $form_state);
        $values = $form_state->getValues();
        $this->configuration['premium_cache_block_message'] = $values['premium_cache_block_message'];
        $this->configuration['premium_cache_block_image'] = $values['premium_cache_block_image'];
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        $default_config = \Drupal::config('premium.settings');
        return [
            'premium_cache_block_message' => $default_config->get('premium_cache.message'),
            'premium_cache_block_image' => $default_config->get('premium_cache.image'),
        ];
    }
}