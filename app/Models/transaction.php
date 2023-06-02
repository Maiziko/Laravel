<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table = "transaction";

    protected $fillable = [
        "transaction_code",
        "user_name",
        "email_user",
        "users_id",
        "product_id",
        "bank",
        "quantity",
        "total",
        "status",
    ];
}
