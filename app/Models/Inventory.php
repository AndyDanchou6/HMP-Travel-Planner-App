<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SelectedItems;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_name',
        'product_img',
        'information',
        'description',
        'price',
        'quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function selectingUsers()
    {
        return $this->belongsToMany(User::class, 'selected_items', 'item_id', 'user_id')
            ->withPivot('referenceNo')
            ->withTimestamps();
    }

    // public function selectedItems()
    // {
    //     return $this->hasMany(SelectedItems::class);
    // }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }


    // public function selectedItems()
    // {
    //     return $this->hasMany(SelectedItems::class);
    // }
}
