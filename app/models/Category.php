<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model { // match table name 'categories'
  use SoftDeletes; // update deleted_at when deleting, preserve deleted ones in db

  public $timestamps = true; // created_at, updated_at -> auto generated
  protected $fillable = ['name', 'slug'];
  protected $dates = ['deleted_at'];
}