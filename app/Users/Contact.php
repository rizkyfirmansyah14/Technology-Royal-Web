<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
        protected $fillable = ['name', 'email', 'message'];
        protected $table = "contacs";
}
