<?php

namespace helionogueir\changedirective\cgi;

use Exception;

/**
 * - Define locale default used in application
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Locale {

  /**
   * - Set locale and collate
   * @param string $locale Codename of locale
   * @param string $collate Codename of collate
   * @return bool Return true case locale set, or false case fail
   */
  public function set(string $locale, string $collate = null) {
    $auth = false;
    try {
      if (!empty($locale)) {
        $_locale = preg_replace("/^(\w{2})-(\w{2})$/", "$1_$2", $locale);
        locale_set_default($_locale);
        if (!empty($collate)) {
          $_locale .= "." . strtoupper($collate);
        }
        setlocale(LC_ALL, $_locale);
        $auth = true;
      }
    } catch (Exception $ex) {
      $auth = false;
      throw $ex;
    }
    return $auth;
  }

}
