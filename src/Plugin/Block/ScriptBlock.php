<?php

namespace Drupal\block_script\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ScriptBlock' block.
 *
 * @Block(
 *  id = "script_block",
 *  admin_label = @Translation("Script block"),
 * )
 */
class ScriptBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['script_block']['#markup'] = 'Implement ScriptBlock.';

    return $build;
  }

}
