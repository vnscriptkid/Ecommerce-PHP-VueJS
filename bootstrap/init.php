<?php
  // start session
  if (!isset($_SESSION)) session_start();

  // load env vars
  require_once __DIR__.'/../app/config/_env.php';