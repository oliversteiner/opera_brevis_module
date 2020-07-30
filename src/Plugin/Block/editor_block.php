<?php

namespace Drupal\opera_brevis_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\NodeInterface;


/**
 * Provides a 'editor_block' block.
 *
 * @Block(
 *  id = "editor",
 *  admin_label = @Translation("Editor Block"),
 *   category = @Translation("Opera Brevis"),
 *   context_definitions = {
 *     "node" = @ContextDefinition("entity:node", label = @Translation("Node"))
 *   }
 * )
 */
class editor_block extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build = [];

    if ($this->getContextValue('node')) {

      $node = $this->getContextValue('node');

      if ($node instanceof NodeInterface) {
        $node_id = $node->id();
        $build['#markup'] = '<a href="/node/' . $node_id . '/edit" role="button" class="brevis-button-edit"><i class="fal fa-edit"></i>Bearbeiten</a>';
      }
    }
    else {
      $build['#markup'] = '';
    }

    return $build;
  }



}
