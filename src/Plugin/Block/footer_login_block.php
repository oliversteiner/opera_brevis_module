<?php

namespace Drupal\opera_brevis_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'footer_login_block' block.
 *
 * @Block(
 *  id = "footer_login",
 *  admin_label = @Translation("Footer Login Block"),
 *   category = @Translation("Opera Brevis"),
 * )
 */
class footer_login_block extends BlockBase
{
  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $build = [];
    $build['#theme'] = 'footer_login';
    $build['#attached']['library'][] =
      'opera_brevis_module/opera_brevis_module.footer_login';
    return $build;
  }
}
