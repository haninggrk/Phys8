<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'students';
    protected $guarded = [
        'id',
    ];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('id', 'like', $term)
            ->orWhere('name', 'like', $term)
            ->orWhere('username', 'like', $term)
            ->orWhere('school', 'like', $term)
            ->orWhere('email', 'like', $term)
            ->orWhere('city', 'like', $term)
            ->orWhereHas('myUser', function ($query) use ($term) {
                $query->where('is_login', 'like', $term)
                ->orWhere('is_active', 'like', $term)
                ->orWhere('is_admin', 'like', $term)
                ->orWhere('ticket', 'like', $term)
                ->orWhere('score', 'like', $term)
                ->orWhere('money', 'like', $term);
            });
        });
    }

    public function myUser()
    {
        return $this->hasOne(Fis8MyUser::class, 'student_id');
    }

    public function ticketTransactions()
    {
        return $this->hasMany(Fis8TicketTransaction::class, 'student_id');
    }

    public function logs()
    {
        return $this->hasMany(Fis8Log::class, 'student_id');
    }

    public function quizHistories()
    {
        return $this->hasMany(Fis8QuizHistory::class, 'student_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
