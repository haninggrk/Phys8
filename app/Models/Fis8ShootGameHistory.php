<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8ShootGameHistory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public const UPDATED_AT = null;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
