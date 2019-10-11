<?php
  // The root path
  define('BASE_PATH', realpath(__DIR__.'/../../'));

  // Make all 3-party libs available
  require_once __DIR__.'/../../vendor/autoload.php';

  // load env vars from .env
  $dotenv = Dotenv\Dotenv::create(BASE_PATH);
  $dotenv->load();