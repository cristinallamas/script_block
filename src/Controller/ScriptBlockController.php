<?php

namespace Drupal\block_script\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ScriptBlockController.
 *
 * @package Drupal\block_script\Controller
 */
class ScriptBlockController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t("hello $name !!!"),
    ];
  }

/**
* implements \Drupal\block_script\Controller\ScriptBlockController::content() 
*/
  public function content() {
    return array(
      '#theme' => 'script_block',
      '#test_var' => $this->t('Test Value!!!!'),
    );
  }

}

