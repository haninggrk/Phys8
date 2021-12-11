<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Log extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

     public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
