<?php

namespace App\Classes;

class Session {
  // create a session
  public static function add($name, $value) {
    if (!empty($name) && !empty($value)) {
      return $_SESSION[$name] = $value;
    }
    throw new Exception('Name and value are required');
  }

  // get data from session
  public static function get($name) {
    if (!empty($name)) {
      return $_SESSION[$name];
    }
    throw new Exception('Name is required');
  }

  // check if session has a specified key
  public static function has($name) {
    if (!empty($name)) {
      return isset($_SESSION[$name]) ? true : false;
    }
    throw new Exception('Name is required');
  }

  // remove session
  public static function remove($name) {
    if (self::has($name)) {
      unset($_SESSION[$name]);
    }
  }
}