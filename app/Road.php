<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    protected $fillable = [
        'name', 'speed','activity','lane',
        'first_latitude','first_longitude',
        'second_latitude','second_longitude'
    ];
}
