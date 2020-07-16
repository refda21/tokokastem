<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'stock',
        'size',
        'status',
        'category',
    ];
}
