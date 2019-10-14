<?php

namespace App\Classes;

class CsrfToken {
  public static function getOrCreate() {
    if (!Session::has('csrfToken')) {
      $csrfToken = \base64_encode(\openssl_random_pseudo_bytes(32));
      Session::add('csrfToken', $csrfToken);
    }
    return Session::get('csrfToken');
  }

  public static function verify($tokenToCheck) {
    if (Session::has('csrfToken') && Session::get('csrfToken') == $tokenToCheck) {
      return true;
    }
    return false;
  }
}