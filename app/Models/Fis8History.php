<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8History extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public const UPDATED_AT = null;
}
