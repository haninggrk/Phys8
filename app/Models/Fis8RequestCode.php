<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8RequestCode extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    const UPDATED_AT = null;
}