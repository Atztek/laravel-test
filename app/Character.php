<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
   protected $fillable = ['name', 'age', 'height', 'weight'];
}
