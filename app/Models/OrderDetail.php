<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Livewire\get;

class OrderDetail extends Model
{
    use HasFactory;

    private static $orderDetail;
    public static function getOrderDetail($id)
    {
        self::$orderDetail = OrderDetail::where('order_id', $id)->get();
        return self::$orderDetail;
    }
}
