<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8Code extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function students()
    {
        return $this->belongsToMany(User::class, 'fis8_request_codes', 'fis8_code_id', 'student_id')
        ->withPivot(['id', 'created_at']);
    }
}
