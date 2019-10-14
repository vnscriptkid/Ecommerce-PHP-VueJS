<?php

namespace App\Classes;

class Redirect {


  /**
   * to another page
   *
   * @param $path to redirect
   *
   * @return void
   */
  public static function to($path) {
    header("location: $path");
  }

  /**
   * back to prev page
   *
   * @return void
   */
  public static function back() {
    $uri = $_SERVER['REQUEST_URI'];
    header("location: $uri");
  }
}