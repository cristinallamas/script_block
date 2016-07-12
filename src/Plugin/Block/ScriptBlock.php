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

  	// Get info from admin form settings.
	$config = \Drupal::config('block_script.ScriptConfig');

    $enabled = $config->get('doubleclick_floodlight_enabled');
  	$region = $config->get('doubleclick_floodlight_region');
  	$account_id = $config->get('doubleclick_floodlight_account_id');
  	$type = $config->get('doubleclick_floodlight_type');
  	$cat = $config->get('doubleclick_floodlight_cat');
  	$show_standard = $config->get('doubleclick_floodlight_show_standard');
  	$show_unique = $config->get('doubleclick_floodlight_show_unique');

   return array(
      '#theme' => 'script_block',
      '#test_var' => $this->t('Test Value'),
      '#account_id' => $account_id,
      '#type' => $type,
      '#cat' => $cat,
      '#show_standard' => $show_standard,
      '#show_unique' => $show_unique,
      '#enabled' => $enabled,
   );


	}

}
