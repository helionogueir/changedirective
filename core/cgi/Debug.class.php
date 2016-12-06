<?php

namespace helionogueir\changedirective\cgi;

/**
 * - Define debug mode
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Debug {

  /**
   * - Define developer mode
   */
  const DEVELOPER = 'developer';

  /**
   * - Define homologation mode
   */
  const HOMOLOGATION = 'homologation';

  /**
   * - Define production mode
   */
  const PRODUCTION = 'production';

  /**
   * - Set debug mode
   * @param string $mode Mode name (Ex: Debug::DEVELOPER, Debug::HOMOLOGATION, Debug::PRODUCTION)
   * @return bool Return true case $mode exits, or return false and set debug PRODUCTION mode
   */
  public function set(string $mode): bool {
    $auth = false;
    file_exists($mode);
    switch ($mode) {
      case Debug::HOMOLOGATION:
      case Debug::DEVELOPER:
        ini_set('display_errors', true);
        error_reporting(E_ALL);
        $auth = true;
        break;
      case Debug::PRODUCTION:
        $auth = true;
      default:
        ini_set('display_errors', false);
        error_reporting(E_ERROR);
        $auth = $auth ?? false;
        break;
    }
    return $auth;
  }

}
