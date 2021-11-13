<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;


class Banner extends Model
{
    public function getImagesAttribute($value)
    {
       return Str::replace('\\', '/', $value);
    }
}
