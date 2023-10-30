<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Customer extends Model
{
    use HasFactory;
    private static $newCustomer,$customerInfo, $sessionCustomerId;

    public static function newCustomer($request)
    {
        self::$newCustomer = new Customer();
        self::$newCustomer->name = $request->name;
        self::$newCustomer->email = $request->email;
        self::$newCustomer->mobile = $request->mobile;
        self::$newCustomer->password = bcrypt($request->password);
        self::$newCustomer->save();
        return self::$newCustomer;
    }

    public static function getCustomerInfo()
    {
        self::$sessionCustomerId = Session::get('customer_id');
        self::$customerInfo =Customer::where('id',  self::$sessionCustomerId)->first();
        return self::$customerInfo ;
    }


}
