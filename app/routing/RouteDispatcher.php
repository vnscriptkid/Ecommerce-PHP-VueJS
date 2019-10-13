<?php

namespace App\Routing;

class RouteDispatcher {
  private $match;
  private $controller;
  private $method;

  public function __construct($match) {
    $this->match = $match;
    if ($this->match) {
      list($controller, $method) = explode('@', $this->match['target']);
      if (is_callable(array($controller, $method))) {
        call_user_func_array(
          array($controller, $method),
          $this->match['params']
        );
      } else {
        echo "The class {$controller} does not contain method {$method}";
      }
    } else {
      header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found', true, 404);
      view("errors/404");
    }
  }
}