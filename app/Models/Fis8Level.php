<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Level extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function category()
    {
        return $this->belongsTo(Fis8Category::class);
    }
}
