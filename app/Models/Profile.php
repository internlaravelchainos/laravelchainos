<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'nickname',
        'username_login',
        'email',
        'description',
        'avatar',
        'address',
        'phone',
    ];
}
