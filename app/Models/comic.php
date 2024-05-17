<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'series',
        'sale_date',
        'type',
        'artists',
        'writers',

    ];
}
