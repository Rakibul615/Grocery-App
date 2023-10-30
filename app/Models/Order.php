<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Order extends Model
{
    use HasFactory;
    private static $sessionUserId, $orders,$order;

    public static function getOrderInfo()
    {
        self::$sessionUserId = Session::get('customer_id');
        self::$orders = Order::where('customer_id', self::$sessionUserId )->get();
        return  self::$orders;

    }
    public static function getShippingInfo()
    {
        self::$sessionUserId = Session::get('customer_id');
        self::$orders = Order::where('customer_id', self::$sessionUserId )->first();
        return  self::$orders;

    }

    public static function getOrderDetails($id)
    {
        self::$orders = Order::where('id', $id )->first();
        return self::$orders ;

    }

    public static function updateOrderInfo($request, $id)
    {
        self::$order = Order::find($id);
        if(self::$order->order_status == 'pending')
        {
            self::$order->order_status = $request->order_status;
        }
        elseif(self::$order->order_status == 'cancel')
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_status = $request->order_status;
        }
        elseif(self::$order->order_status == 'processing')
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_status = $request->order_status;
            self::$order->delivery_address = $request->delivery_address;
            self::$order->courier_id = $request->courier_id;
        }
        elseif(self::$order->order_status == 'complete')
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_status = $request->order_status;
            self::$order->payment_amount = $request->order_total;
        }
         self::$order->save();
    }


    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
