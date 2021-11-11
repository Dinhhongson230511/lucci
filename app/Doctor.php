<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Doctor extends Model
{
    public function getImageAttribute($value)
    {
       return Str::replace('\\', '/', $value);
    }
}
