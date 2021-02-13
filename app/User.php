<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'user_type',
        'mobileno',
        'country_code',
        'currency_code',
        'otp',
        'share_code',
        'profile_img',
        'dob',
        'token',
        'status',
        'account_holder_name',
        'account_number',
        'account_iban',
        'bank_name',
        'bank_address',
        'sort_code',
        'routing_number',
        'account_ifsc',
        'last_login',
        'is_agree',
        'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
