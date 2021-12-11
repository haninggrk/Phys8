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
        return $this->belongsTo(Fis8Category::class, 'fis8_category_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(Fis8Question::class, 'fis8_level_id');
    }
}
