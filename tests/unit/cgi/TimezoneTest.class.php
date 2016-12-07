<?php

use PHPUnit\Framework\TestCase;
use helionogueir\changedirective\cgi\Timezone;

class TimezoneTest extends TestCase {

  public function testSet() {
    $this->assertTrue((new Timezone())->set("Europe/London"));
    $this->assertEquals(date_default_timezone_get(), "Europe/London");
  }

  public function testSetFail() {
    $this->assertFalse((new Timezone())->set(""));
  }

}
