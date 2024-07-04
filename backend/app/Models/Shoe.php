<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    /**
    * @var array<int, float, boolean, string>
    */
    protected $fillable = [
        'name',
        'description',
        'price',
        'collection',
        'size',
        'color',
        'image',
        'state'
    ];
}
