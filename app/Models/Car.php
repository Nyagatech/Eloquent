<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'year',
        'model',
        'make',
        'mileage',
        'founded'
    ];

}
