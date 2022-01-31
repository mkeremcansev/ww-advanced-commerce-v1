<?php

namespace App\Models;

use App\Notifications\AccountVerifyQueued;
use App\Notifications\ForgotPasswordQueued;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'password',
    ];
    public function getAllUserAttributePhones()
    {
        return $this->hasMany(UserAttribute::class, 'user_id', 'id')->whereType(1);
    }

    public function getAllUserAttributeAdresses()
    {
        return $this->hasMany(UserAttribute::class, 'user_id', 'id')->whereType(2);
    }

    public function getAllUserReviews()
    {
        return $this->hasMany(ProductReview::class, 'user_id', 'id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ForgotPasswordQueued($token));
    }
    public function sendEmailVerificationNotification()
    {
        $this->notify(new AccountVerifyQueued);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
