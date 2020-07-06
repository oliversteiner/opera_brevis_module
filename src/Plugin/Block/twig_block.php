<?php

namespace Drupal\opera_brevis_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'twig_block' block.
 *
 * @Block(
 *  id = "twig",
 *  admin_label = @Translation("Twig Block"),
*   category = @Translation("Opera Brevis"),
 * )
 */
class twig_block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'twig';
    $build['#attached']['library'][] =
      'opera_brevis_module/opera_brevis_module.twig'
    ;
    return $build;
  }

}
