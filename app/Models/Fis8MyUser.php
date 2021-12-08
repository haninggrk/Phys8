<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis8MyUser extends Model
{
    use HasFactory;

    protected $table = 'fis8_myusers';

    public function Student()
    {
        return $this->belongsTo(User::class);
    }

}
