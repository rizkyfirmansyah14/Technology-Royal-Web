<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['image'];
    protected $table = "partners";
}
