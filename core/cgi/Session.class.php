<?php

namespace helionogueir\changedirective\cgi;

use Exception;
use helionogueir\languagepack\Lang;
use helionogueir\changedirective\autoload\Environment;

/**
 * - Define session behavior
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Session {

  private $isStart = false;

  /**
   * - Set session max lifetime
   * @param int $second Time in seconds of lifetime of session (Ex: 3600 = 1 hour)
   * @return bool Return true case time set, or false case fail
   */
  public function setMaxLifetime(int $second): Session {
    if (!$this->isStart) {
      if ($second) {
        ini_set("session.gc_maxlifetime", $second);
      } else {
        Lang::addRoot(Environment::PACKAGE, Environment::PATH);
        throw new Exception(Lang::get("changedirective:maxlifetime:none", "helionogueir/changedirective"));
      }
    }
    return $this;
  }

  /**
   * - Set session save path
   * @param string $pathname Pathname of directory of storage session files (Ex: /tmp)
   * @return bool Return true case Pathname set, or false case fail
   */
  public function setPath(string $pathname): Session {
    if (!$this->isStart) {
      if (is_dir($pathname)) {
        ini_set("session.save_path", $pathname);
      } else {
        Lang::addRoot(Environment::PACKAGE, Environment::PATH);
        throw new Exception(Lang::get("changedirective:path:notexists", "helionogueir/changedirective", Array("pathname" => $pathname)));
      }
    }
    return $this;
  }

  /**
   * - Session start
   * @return bool Return true case sesion start set, or false case fail
   */
  public function start(): bool {
    try {
      if (!isset($_SESSION)) {
        session_start();
        $this->isStart = true;
      }
    } catch (Exception $ex) {
      $this->isStart = false;
      throw $ex;
    }
    return $this->isStart;
  }

}
