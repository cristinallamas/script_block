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
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // $build = [];

    // $build['script_block']['#markup'] = 'Implement ScriptBlock.';
    // // $build['script_block']['#markup'] = '\Drupal\block_script\Controller\ScriptBlockController::content()';
    // // $build['script_block']['#markup'] = $content;
    // // $build['script_block']['#markup'] = '<script></script>';
    // return $build;
//     $config = $this->getConfiguration();
 $config = \Drupal::config('block_script.settings');


	$output = array();
    //Add this two linew if you want to create a dynamic contents block
    $output['cache']['#disabled'] = TRUE;
    $output['cache']['max_age']['#value'] = 0;

    $html = "";
    $html .= 'This is a programmatically created block  :  ' . date("H:i:s") ;
    $output[] = [      '#markup' => $html,    ];
    return $output;



  }

}
