<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = "profile";

    protected $fillable = [
        "username",
        "gender",
        "users_id",
        "profil_picture",
        "date_of_birth",
        "date_of_birth",
    ];

    //relasi table dengan user
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
