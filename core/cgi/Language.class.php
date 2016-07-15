<?php

namespace helionogueir\changedirective\cgi;

use Exception;
use helionogueir\typeBoxing\type\String;
use helionogueir\typeBoxing\type\Boolean;

/**
 * Configuration of language:
 * - Load language pettern in application
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Language {

  /**
   * Block construct the class, because this class is static
   * @return false
   */
  public function __construct() {
    return false;
  }

  /**
   * Make language:
   * - Mount language configuration
   * 
   * @param helionogueir\typeBoxing\type\String $locale Code of locale
   * @param helionogueir\typeBoxing\type\String $collate Code of collate
   * @return helionogueir\typeBoxing\type\Boolean Return if language was implemented
   */
  public static final function set(String $locale, String $collate = null) {
    $auth = false;
    try {
      if (!$locale->isEmpty()) {
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
