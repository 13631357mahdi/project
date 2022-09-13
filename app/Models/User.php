<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as  Authenticatable;

class User  extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        'name','email','phone','password' , 'rememberToken'
    ];
    protected $attributes = [
        'status' => 1,
        'role' => 2
    ];
}