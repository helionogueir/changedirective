<?php

use PHPUnit\Framework\TestCase;
use helionogueir\changedirective\cgi\Locale;

class LocaleTest extends TestCase {

  public function testSet() {
    $this->assertTrue((new Locale())->set("en-US", "utf-8"));
    $this->assertEquals(locale_get_default(), "en_US");
    $this->assertEquals(setlocale(LC_CTYPE, 0), "en_US.UTF-8");
  }

  public function testSetFail() {
    $this->assertFalse((new Locale())->set("", ""));
  }

}
