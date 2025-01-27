<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";

    protected $fillable = [
        "name",
        "description",
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'categories_id');
    }
}
