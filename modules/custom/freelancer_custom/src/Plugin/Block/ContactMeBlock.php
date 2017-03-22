<?php
/**
 * @file
 * The intro block file.
 */

namespace Drupal\freelancer_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ContactMeBlock' block.
 *
 * @Block(
 *  id = "contact_me_block",
 *  admin_label = @Translation("Contact me block"),
 * )
 */
class ContactMeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // Initialize the variables.
    $variables = array(
      'title' => 'Contact Captain Jack Sparrow',
    );

    // Return the build.
    return array(
      '#variables' => $variables,
      '#theme' => 'freelancer_custom_contact_me_block'
    );
  }

}
