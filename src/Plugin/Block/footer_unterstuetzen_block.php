<?php

namespace Drupal\opera_brevis_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'footer_unterstuetzen_block' block.
 *
 * @Block(
 *  id = "footer_unterstuetzen",
 *  admin_label = @Translation("Footer Unterstützen Block"),
 *   category = @Translation("Opera Brevis"),
 * )
 */
class footer_unterstuetzen_block extends BlockBase
{
  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $build = [];
    $build['#theme'] = 'footer_unterstuetzen';
    $build['#attached']['library'][] =
      'opera_brevis_module/opera_brevis_module.footer_unterstuetzen';
    return $build;
  }
}
