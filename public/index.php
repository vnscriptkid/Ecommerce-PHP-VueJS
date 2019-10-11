<?php
  require_once __DIR__.'/../bootstrap/init.php';

  $app_name = getenv('APP_NAME');
  $app_env = getenv('APP_ENV');
  echo $app_name.'<br/>';
  echo $app_env;