<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user() //naming convention: this function name usually the same as the foreign table inside
    {
        return $this->belongTo(User::class); //translating the relations between different tables
        //having this relation allows a Profile to always be able to fetch a User
    }
}
