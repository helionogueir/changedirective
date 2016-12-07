<?php

use PHPUnit\Framework\TestCase;
use helionogueir\changedirective\cgi\Session;

class SessionTest extends TestCase {

  public function testSetMaxLifetime() {
    $this->assertInstanceOf('helionogueir\changedirective\cgi\Session', (new Session())->setMaxLifetime(3600));
    $this->assertEquals(ini_get("session.gc_maxlifetime"), 3600);
  }

  public function testSetPath() {
    $this->assertInstanceOf('helionogueir\changedirective\cgi\Session', (new Session())->setPath(sys_get_temp_dir()));
    $this->assertEquals(ini_get("session.save_path"), sys_get_temp_dir());
  }

  public function testStart() {
    $this->assertTrue((new Session())
            ->setPath(sys_get_temp_dir())
            ->setMaxLifetime(3600)
            ->start());
    $key = "changedirective:" . time();
    $_SESSION[$key] = __CLASS__;
    $this->assertEquals($_SESSION[$key] ?? null, __CLASS__);
  }

}
