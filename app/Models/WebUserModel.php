<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class WebUserModel extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'web_users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $guarded = ['id'];

    protected $hidden = ['password'];
}
