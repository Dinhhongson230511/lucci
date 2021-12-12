<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    protected $fillable = [
        'name', 'date', 'time', 'people', 'email', 'phone'
    ];
}
