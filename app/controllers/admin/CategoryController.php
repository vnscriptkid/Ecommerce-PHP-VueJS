<?php

namespace App\Controllers\Admin;

use App\Models\Category;

class CategoryController {
  public function show() {
    $categories = Category::all();
    view('admin/products/categories', compact('categories'));
  }

  public function create() {

  }
}