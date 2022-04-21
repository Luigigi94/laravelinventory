<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
        'long_description',
        'price_at_sell',

    ];

    protected $hidden = [
        'assignmentId',
        'price_on_buy',
    ];
}
