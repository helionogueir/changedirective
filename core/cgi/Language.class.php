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
class Language {

  public function __construct() {
    return false;
  }

  /**
   * Make language:
   * - Mount language configuration;
   * 
   * @return bool Return if language was implemented
   */
  public static final function make(String $locale, String $collate = null) {
    $auth = false;
    try {
      if (!$timezone->isEmpty()) {
        $_locale = "{$locale}";
        if (!$collate->isEmpty()) {
          $_locale .= ".{$collate}";
        }
        setlocale(LC_ALL, $_locale);
        $auth = true;
      }
    } catch (Exception $ex) {
      throw $ex;
    }
    return new Boolean($auth);
  }

}
