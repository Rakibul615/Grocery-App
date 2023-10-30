<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    private $order,$orders, $paymentInfo,$shippingInfo;
    public function index()
    {
        $this->customerInfo = Customer::getCustomerInfo();
        return view('customer.dashboard' , ['loginCustomer' => $this->customerInfo]);
    }
    public function summary()
    {
        return view('customer.summary');
    }
    public function profile()
    {
        $this->customerInfo = Customer::getCustomerInfo();
        return view('customer.profile', ['singleCustomer' => $this->customerInfo]);
    }
    public function order()
    {
        $this->orders = Order:: getOrderInfo();
        return view('customer.order', ['orders' => $this->orders]);
    }
    public function paymentHistory()
    {
        $this->paymentInfo = Order:: getOrderInfo();
        return view('customer.payment-history', ['paymentInfo' => $this->paymentInfo]);
    }
    public function shippingAddress()
    {
        $this->shippingInfo = Order:: getShippingInfo();
        $this->customerInfo = Customer::getCustomerInfo();
        return view('customer.shipping-address', ['shippingInfo' => $this->shippingInfo, 'singleCustomer' => $this->customerInfo  ]);
    }
    public function orderDetail($id)
    {
        $this->order = Order::find($id);
        $this->customerOrderDetails = OrderDetail::getOrderDetail($id);

        return view('customer.order-detail', ['order' => $this->order, 'orderDetails' => $this->customerOrderDetails ]);
    }
    public function passwordReset()
    {
        $this->customerInfo = Customer::getCustomerInfo();
        return view('customer.password-reset', ['loginCustomer' => $this->customerInfo]);
    }
}
