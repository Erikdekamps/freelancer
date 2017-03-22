<?php
/**
 * @file
 * The intro block file.
 */

namespace Drupal\freelancer_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FooterBlock' block.
 *
 * @Block(
 *  id = "footer_block",
 *  admin_label = @Translation("Footer block"),
 * )
 */
class FooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // Initialize the variables.
    $variables = array(
      'title' => 'John Doe',
    );

    // Return the build.
    return array(
      '#variables' => $variables,
      '#theme' => 'freelancer_custom_footer_block'
    );
  }

}
