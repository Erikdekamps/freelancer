<?php
/**
 * @file
 * The intro block file.
 */

namespace Drupal\freelancer_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'IntroBlock' block.
 *
 * @Block(
 *  id = "intro_block",
 *  admin_label = @Translation("Intro block"),
 * )
 */
class IntroBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {

    $form = parent::blockForm($form, $form_state);

    // Retrieve existing configuration for this block.
    $config = $this->getConfiguration();

    // Load the file default scheme once.
    $default_scheme = file_default_scheme();

    // The block title.
    $form['intro_block_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Intro block title'),
      '#description' => $this->t('Please enter the block title.'),
      '#default_value' => isset($config['intro_block_title'])? $config['intro_block_title'] : '',
      '#maxlength' => 255,
      '#size' => 64,
    ];

    // The block image.
    $form['intro_block_image'] = [
      '#type' => 'managed_file',
      '#title' => $this->t('Block image'),
      '#description' => $this->t('Please upload the block image.'),
      '#upload_location' => $default_scheme . '://intro/images/',
      '#default_value' => isset($config['intro_block_image'])? $config['intro_block_image'] : '',
    ];

    // The block slogan.
    $form['intro_block_slogan'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Intro block slogan'),
      '#description' => $this->t('Please enter the block slogan.'),
      '#default_value' => isset($config['intro_block_slogan'])? $config['intro_block_slogan'] : '',
      '#maxlength' => 255,
      '#size' => 64,
    ];

    // Return the form.
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {

    // Save our custom settings when the form is submitted.
    $this->setConfigurationValue('intro_block_title', $form_state->getValue('intro_block_title'));
    $this->setConfigurationValue('intro_block_image', $form_state->getValue('intro_block_image'));
    $this->setConfigurationValue('intro_block_slogan', $form_state->getValue('intro_block_slogan'));

    // Make file permanent.
    freelancer_custom_make_file_permanent($this->configuration['intro_block_image'][0]);

    // Submit form.
    parent::blockSubmit($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    // Get the configuration.
    $config = $this->getConfiguration();

    // Initialize the variables.
    $variables = array();

    // Get the title.
    if (!empty($config['intro_block_title'])) {
      $variables['title'] = $config['intro_block_title'];
    }

    // Get the slogan.
    if (!empty($config['intro_block_slogan'])) {
      $variables['slogan'] = $config['intro_block_slogan'];
    }

    // Check for a background image.
    if (!empty($config['intro_block_image'])) {

      // Get the background image.
      $image = $config['intro_block_image'];

      // Set the alternative text.
      $alt = 'Intro image';

      $style = '';

      // Create the tour image html.
      $block_image = freelancer_custom_generate_image_style($image[0], $style, ['img-responsive'], FALSE, $alt);

      // Store the image as variable
      $variables['image'] = render($block_image);
    }

    // Return the build.
    return array(
      '#variables' => $variables,
      '#theme' => 'freelancer_custom_intro_block'
    );
  }

}
