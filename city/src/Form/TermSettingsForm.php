<?php
/**
 * @file
 * Contains \Drupal\city\Form\TermSettingsForm.
 */

namespace Drupal\city\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ContentEntityExampleSettingsForm.
 *
 * @package Drupal\city\Form
 *
 * @ingroup city
 */
class TermSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'city_term_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['city_term_settings']['#markup'] = 'Settings form for city Term. Manage field settings here.';
    return $form;
  }

}
