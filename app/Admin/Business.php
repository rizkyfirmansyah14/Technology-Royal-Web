<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['image' ,'title',];
    protected $table = "businesses";
}
