<?php

namespace helionogueir\changedirective\cgi;

use Exception;

/**
 * Configuration of timezone:
 * - Load timezone pettern in application
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Timezone {

  /**
   * Make timezone:
   * - Mount timezone configuration
   * 
   * @param string $timezone Code of timezone
   * @return bool Return if language was implemented
   */
  public function set(string $timezone) {
    $auth = false;
    try {
      if (!empty($timezone)) {
        date_default_timezone_set($timezone);
        $auth = true;
      }
    } catch (Exception $ex) {
      throw $ex;
    }
    return $auth;
  }

}
