<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $fillable = [
        'Username',
        'First_Name',
        'Last_Name',
        'Reg_Number',
        'email',
        'email_verified_at',
        'password',
        'is_first_login',
    ];
}
