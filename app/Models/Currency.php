<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $incrementign = false;
    protected $fillable = [
        'id', 'name', 'price',
        'active', 'sort',
    ];
}
