<?php

/**
 * @file
 * Contains contact_premium.page.inc.
 *
 * Page callback for Contact premium entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Contact premium templates.
 *
 * Default template: contact_premium.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_contact_premium(array &$variables) {
  // Fetch contactPremium Entity Object.
  $contact_premium = $variables['elements']['#contact_premium'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
