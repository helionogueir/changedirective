<?php

namespace helionogueir\changedirective\tests\unit\cgi;

use PHPUnit\Framework\TestCase;
use helionogueir\changedirective\cgi\Debug;

class DebugTest extends TestCase {

  public function testSet() {
    $this->assertTrue((new Debug())->set(Debug::DEVELOPER));
    $this->assertEquals(ini_get('display_errors'), true);
    $this->assertEquals(ini_get('error_reporting'), E_ALL);
    $this->assertTrue((new Debug())->set(Debug::HOMOLOGATION));
    $this->assertEquals(ini_get('display_errors'), true);
    $this->assertEquals(ini_get('error_reporting'), E_ALL);
    $this->assertTrue((new Debug())->set(Debug::PRODUCTION));
    $this->assertEquals(ini_get('display_errors'), false);
    $this->assertEquals(ini_get('error_reporting'), E_ERROR);
  }

  public function testSetFail() {
    $this->assertFalse((new Debug())->set("none"));
  }

}
