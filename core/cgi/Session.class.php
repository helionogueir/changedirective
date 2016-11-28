<?php

namespace helionogueir\changedirective\cgi;

use Exception;

/**
 * Configuration of session:
 * - Load language pettern in application;
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Session {

  /**
   * Make language:
   * - Mount language configuration;
   * 
   * @return bool Return if language was implemented
   */
  public function start() {
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
    return $auth;
  }

}
