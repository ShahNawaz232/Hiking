<?php

use \Drupal\Core\Form\FormStateInterface;

function hiking_form_system_theme_settings_alter(&$form, FormStateInterface $form_state, $form_id = NULL) {

  $form['classes'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Classes'),
    '#collapsible' => TRUE,
    '#collapsed'   => FALSE,
  ];

  $form['classes']['region_class'] = [
    '#type'          => 'textfield',
    '#title'         => t('Class'),
    '#default_value' => theme_get_setting('region_class'),
    
  ];
}
