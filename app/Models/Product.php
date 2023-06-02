<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";

    protected $fillable = [
        "name",
        "price",
        "stock",
        "image",
        "description",
        "categories_id"
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }

    public function transaction()
    {
        return $this->hasMany(transaction::class, 'product_id');
    }
}
