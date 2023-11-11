<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Session;

class Customer extends Model
{
    use HasFactory;
    private static $newCustomer, $customerInfo, $sessionCustomerId, $customer, $singleCustomer, $image, $imageUrl, $directory, $imageName;

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

    public static function passwordUpdate($request , $id)
    {
        try {
            self::$customer = Customer::find($id);
        }
        catch (Exception $e) {
            // If the customer is not found, set the customer object to null.
            self::$customer = null;
        }
        if (self::$customer !== null) {
            self::$customer->email = $request->email;
            self::$customer->password = Hash::make($request->password);
            self::$customer->update();
        }
        return self::$customer;

    }

    public static function profileUpdate($request , $id)
    {
        self::$singleCustomer = Customer::find($id);

        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'profile/profile-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;

        self::$singleCustomer->name     = $request->full_name;
        self::$singleCustomer->email    = $request->email;

        self::$singleCustomer->mobile   = $request->mobile;
        if (file_exists(self::$singleCustomer->image))
        {
            unlink(self::$imageUrl);
        }
        self::$singleCustomer->image  = self::$imageUrl;
        self::$singleCustomer->save();
        return self::$singleCustomer;





    }


}
