<?php

namespace helionogueir\changedirective\cgi;

use Exception;
use helionogueir\typeBoxing\type\Boolean;

/**
 * Configuration of language:
 * - Load language pettern in application;
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Session {

  public function __construct() {
    return false;
  }

  /**
   * Make language:
   * - Mount language configuration;
   * 
   * @return bool Return if language was implemented
   */
  public static final function make() {
    $auth = false;
    try {
      if (!isset($_SESSION)) {
        session_start();
      }
      $auth = true;
    } catch (Exception $ex) {
      $auth = false;
      throw $ex;
    }
    return new Boolean($auth);
  }

}
