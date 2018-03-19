<?php

/**
 * @file
 * Theme settings in this file.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function drupalup_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id = NULL) {
  if (isset($form_id)) {
    return;
  }

  $form['dog_name'] = [
    '#type' => 'textfield',
    '#title' => t('Doggie name'),
    '#default_value' => theme_get_setting('dog_name'),
    '#description' => t('Our cute doggie name here'),
  ];
}
