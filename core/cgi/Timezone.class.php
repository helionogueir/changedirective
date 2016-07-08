<?php

namespace helionogueir\changedirective\cgi;

use Exception;
use helionogueir\typeBoxing\type\String;
use helionogueir\typeBoxing\type\Boolean;

/**
 * Configuration of timezone:
 * - Load timezone pettern in application;
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Timezone {

  public function __construct() {
    return false;
  }

  /**
   * Make timezone:
   * - Mount timezone configuration;
   * 
   * @return bool Return if language was implemented
   */
  public static final function make(String $timezone) {
    $auth = false;
    try {
      if (!$timezone->isEmpty()) {
        date_default_timezone_set($timezone);
        $auth = true;
      }
    } catch (Exception $ex) {
      throw $ex;
    }
    return new Boolean($auth);
  }

}
