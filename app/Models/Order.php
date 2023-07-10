<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['guest_info', 'status'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function getTotalCost()
    {
        $totalCost = 0;

        foreach ($this->items as $item) {
            $totalCost += $item->product->price;
        }

        return $totalCost;
    }

}

