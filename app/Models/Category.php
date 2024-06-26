<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_img',
        'category_name',
        'description',
    ];

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}
