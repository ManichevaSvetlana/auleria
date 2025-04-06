<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product',
        'name',
        'birth_date',
        'birth_time',
        'birth_place',
        'contact_method',
        'contact_info',
    ];
}
