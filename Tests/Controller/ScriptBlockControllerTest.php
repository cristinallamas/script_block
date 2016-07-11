<?php

namespace Drupal\block_script\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the block_script module.
 */
class ScriptBlockControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "block_script ScriptBlockController's controller functionality",
      'description' => 'Test Unit for module block_script and controller ScriptBlockController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests block_script functionality.
   */
  public function testScriptBlockController() {
    // Check that the basic functions of module block_script.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
