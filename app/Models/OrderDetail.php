<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Livewire\get;

class OrderDetail extends Model
{
    use HasFactory;

    private static $orderDetails;
    public static function getOrderDetail($id)
    {
        self::$orderDetails = OrderDetail::where('order_id', $id)->get();
        return self::$orderDetails;
    }
    public static function deleteOrderDetail($id)
    {
        self::$orderDetails = OrderDetail::where('order_id', $id)->get();
        if(self::$orderDetails)
        {
            foreach (self::$orderDetails as $orderDetail)
            {
                $orderDetail->delete();
            }
        }


    }
}
