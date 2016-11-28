<?php

namespace helionogueir\changedirective\cgi;

use Exception;

/**
 * Configuration of language:
 * - Load language pettern in application
 *
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Language {

  /**
   * Make language:
   * - Mount language configuration
   * 
   * @param string $locale Code of locale
   * @param string $collate Code of collate
   * @return bool Return if language was implemented
   */
  public function set(string $locale, string $collate = null) {
    $auth = false;
    try {
      if (!empty($locale)) {
        $_locale = "{$locale}";
        if (!empty($collate)) {
          $_locale .= ".{$collate}";
        }
        setlocale(LC_ALL, $_locale);
        $auth = true;
      }
    } catch (Exception $ex) {
      throw $ex;
    }
    return $auth;
  }

}
