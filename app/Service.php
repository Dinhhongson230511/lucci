<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    public function getImageAttribute($value)
    {
       return Str::replace('\\', '/', $value);
    }
}
