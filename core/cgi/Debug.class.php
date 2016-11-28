<?php

namespace helionogueir\changedirective\cgi;

/**
 * Configuration of debug:
 * - Load debug pettern in application;
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Debug {

  const DEVELOPER = 'developer';
  const HOMOLOGATION = 'homologation';
  const PRODUCTION = 'production';

  /**
   * Make debug:
   * - Mount debug configuration
   * 
   * @param string $mode Mode name
   * @return bool Return if debug was implemented
   */
  public function set(string $mode = null) {
    switch ($mode) {
      case Debug::HOMOLOGATION:
      case Debug::DEVELOPER:
        ini_set('display_errors', true);
        ini_set('display_startup_erros', true);
        error_reporting(E_ALL);
        $auth = true;
        break;
      case Debug::PRODUCTION:
      default:
        ini_set('display_errors', false);
        ini_set('display_startup_erros', false);
        error_reporting(E_ERROR);
        $auth = true;
        break;
    }
    return true;
  }

}
