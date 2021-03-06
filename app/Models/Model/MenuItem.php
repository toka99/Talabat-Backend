<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model\MenuCategory;
use App\Models\Model\Restaurant;
use App\Models\Model\CartItem;
use App\Models\User;



class MenuItem extends Model
{
    use HasFactory;

    public function menucategory()
    {
        return $this->belongsTo(MenuCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function cartitems()
    {
        return $this->hasMany(CartItem::class);
    }



    protected $fillable = [
        
        'vendor_id',
        'menucategory_id',
        'restaurant_id',
        'name',
        'description',
        'logo',
        'price',
        'created_at',
    ];
}
