<?php

namespace helionogueir\changedirective\cgi;

use Exception;

/**
 * - Define timezone of application
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Timezone {

  /**
   * - Set timezone locale
   * @param string $timezone Codename of timezone locale
   * @return bool Return true case timezone set, or false case fail
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
