<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;

class Role extends Model
{
    use Notifiable;
    protected $fillable = [
        'id',
        'name',
        'status',
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $scsts = [
        'email_verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }



}
