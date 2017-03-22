<?php
/**
 * @file
 * The intro block file.
 */

namespace Drupal\freelancer_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

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
  public function build() {

    // Get the path to the theme.
    $theme_path = drupal_get_path('theme', 'freelancer');

    // Initialize the variables.
    $variables = array(
      'image' => file_create_url($theme_path . '/assets/img/jack.jpg'),
      'title' => 'Jack Sparrow',
      'slogan' => 'Captain',
    );

    // Return the build.
    return array(
      '#variables' => $variables,
      '#theme' => 'freelancer_custom_intro_block'
    );
  }

}
