<?php

namespace helionogueir\changedirective\cgi;

use Exception;
use helionogueir\languagepack\Lang;
use helionogueir\changedirective\autoload\LanguagePack;

/**
 * Configuration of session:
 * - Load language pettern in application;
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Session {

  private $isStart = false;

  public function setMaxLifetime(int $second): Session {
    if (!$this->isStart) {
      if ($second) {
        ini_set("session.gc_maxlifetime", $second);
      } else {
        Lang::addRoot(LanguagePack::PACKAGE, LanguagePack::PATH);
        throw new Exception(Lang::get("changedirective:maxlifetime:none", "helionogueir/changedirective"));
      }
    }
    return $this;
  }

  public function setPath(string $pathname): Session {
    if (!$this->isStart) {
      if (is_dir($pathname)) {
        ini_set("session.save_path", $pathname);
      } else {
        Lang::addRoot(LanguagePack::PACKAGE, LanguagePack::PATH);
        throw new Exception(Lang::get("changedirective:path:notexists", "helionogueir/changedirective", Array("pathname" => $pathname)));
      }
    }
    return $this;
  }

  public function start(string $sessionSavePath = null) {
    $auth = true;
    try {
      if (!isset($_SESSION)) {
        session_start();
        $this->isStart = true;
      }
    } catch (Exception $ex) {
      $auth = false;
    }
    return $auth;
  }

}
