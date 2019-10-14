<?php

namespace App\Classes;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database {
  public function __construct() {
    $capsule = new Capsule;

    $capsule->addConnection([
        'driver'    => \getenv('DB_DRIVER'),
        'host'      => \getenv('DB_HOST'),
        'database'  => \getenv('DB_NAME'),
        'username'  => \getenv('DB_USERNAME'),
        'password'  => \getenv('DB_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
  }
}