<?php
  // start session
  if (!isset($_SESSION)) session_start();

  // load env vars
  require_once __DIR__.'/../app/config/_env.php';

  // init db
  new App\Classes\Database();

  // handle routes
  require_once __DIR__.'/../app/routing/routes.php';

  // handle controllers
  new App\Routing\RouteDispatcher($match);