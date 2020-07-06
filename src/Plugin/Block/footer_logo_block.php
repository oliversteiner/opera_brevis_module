<?php

namespace Drupal\opera_brevis_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'footer_logo_block' block.
 *
 * @Block(
 *  id = "footer_logo",
 *  admin_label = @Translation("Footer Logo Block"),
 *   category = @Translation("Opera Brevis"),
 * )
 */
class footer_logo_block extends BlockBase
{
  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $build = [];
    $build['#theme'] = 'footer_logo';
    $build['#attached']['library'][] =
      'opera_brevis_module/opera_brevis_module.footer_logo';
    return $build;
  }
}
