<?php
/**
 * @file
 * The intro block file.
 */

namespace Drupal\freelancer_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'PortfolioBlock' block.
 *
 * @Block(
 *  id = "portfolio_block",
 *  admin_label = @Translation("Portfolio block"),
 * )
 */
class PortfolioBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // Get the path to the theme.
    $theme_path = drupal_get_path('theme', 'freelancer');

    // Initialize the variables.
    $variables = array(
      'title' => 'Portfolio',
      'portfolio_items' => array(
        array(
          'alt' => 'Cabin',
          'image' => file_create_url($theme_path . '/assets/img/portfolio/cabin.png'),
          'modal' => '#portfolioModal1',
          'icon' => 'fa fa-search-plus fa-3x'
        ),
        array(
          'alt' => 'Cake',
          'image' => file_create_url($theme_path . '/assets/img/portfolio/cake.png'),
          'modal' => '#portfolioModal2',
          'icon' => 'fa fa-search-plus fa-3x'
        ),
        array(
          'alt' => 'Circus',
          'image' => file_create_url($theme_path . '/assets/img/portfolio/circus.png'),
          'modal' => '#portfolioModal3',
          'icon' => 'fa fa-search-plus fa-3x'
        ),
        array(
          'alt' => 'Game',
          'image' => file_create_url($theme_path . '/assets/img/portfolio/game.png'),
          'modal' => '#portfolioModal4',
          'icon' => 'fa fa-search-plus fa-3x'
        ),
        array(
          'alt' => 'Safe',
          'image' => file_create_url($theme_path . '/assets/img/portfolio/safe.png'),
          'modal' => '#portfolioModal5',
          'icon' => 'fa fa-search-plus fa-3x'
        ),
        array(
          'alt' => 'Submarine',
          'image' => file_create_url($theme_path . '/assets/img/portfolio/submarine.png'),
          'modal' => '#portfolioModal6',
          'icon' => 'fa fa-search-plus fa-3x'
        ),
      ),
    );

    // Return the build.
    return array(
      '#variables' => $variables,
      '#theme' => 'freelancer_custom_portfolio_block'
    );
  }

}
