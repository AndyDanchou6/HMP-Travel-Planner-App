<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_name',
        'product_img',
        'price',
        'quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}