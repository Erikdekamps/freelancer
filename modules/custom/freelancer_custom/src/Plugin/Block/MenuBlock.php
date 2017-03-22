<?php
/**
 * @file
 * The menu block file.
 */

namespace Drupal\freelancer_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MenuBlock' block.
 *
 * @Block(
 *  id = "menu_block",
 *  admin_label = @Translation("Menu block"),
 * )
 */
class MenuBlock extends BlockBase {

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
      '#theme' => 'freelancer_custom_menu_block'
    );
  }

}
