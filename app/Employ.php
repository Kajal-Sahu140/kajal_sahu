<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    protected $table = 'employe';
    protected $filleable = ['name','email','pwd'];
}
