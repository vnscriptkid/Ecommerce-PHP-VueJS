<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Classes\Session;

class DashboardController extends BaseController {
  public function show() {
    Session::add('admin', 'thanh');

    $adminName;
    Session::remove('admin');

    if (Session::has('admin')) {
      $adminName = Session::get('admin');
    } else {
      $adminName = 'Not Found';
    }

    view('admin/dashboard', [ 'adminName' => $adminName ]);
  }
}