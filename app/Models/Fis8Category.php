<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function levels()
    {
        return $this->hasMany(Fis8Level::class);
    }
}
