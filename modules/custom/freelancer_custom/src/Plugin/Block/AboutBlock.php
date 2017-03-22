<?php
/**
 * @file
 * The intro block file.
 */

namespace Drupal\freelancer_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'AboutBlock' block.
 *
 * @Block(
 *  id = "about_block",
 *  admin_label = @Translation("About block"),
 * )
 */
class AboutBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // Initialize the variables.
    $variables = array(
      'title' => 'About Piracy',
      'text_left' => 'Some text - Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.',
      'text_right' => 'Some more text - Whether you\'re a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!',
      'button_text' => 'Download me',
      'button_link' => '#',
      'button_icon' => 'fa fa-download',
    );

    // Return the build.
    return array(
      '#variables' => $variables,
      '#theme' => 'freelancer_custom_about_block'
    );
  }

}
