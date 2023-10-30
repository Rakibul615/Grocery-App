<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    private $orders,$orderDetail;
    public function index()
    {
        $this->orders = Order::orderBy('id', 'desc')->get();
        return view('admin.order.index', ['orders' => $this->orders ]);
    }
    public function detail($id)
    {
        $this->orderDetail = Order::getOrderDetails($id);
        return view('admin.order.detail', ['orderDetail' =>  $this->orderDetail]);
    }
    public function edit($id)
    {
        $this->order = Order::find($id);
        return view('admin.order.edit',  ['order' =>  $this->order]);
    }
    public function update(Request $request, $id)
    {

        Order::updateOrderInfo($request, $id);
        return redirect('/admin/all-order')->with('message', 'Order Info Update Successfully');
    }
    public function invoice($id)
    {
        $this->order = Order::find($id);
        return view('admin.order.invoice',  ['order' =>  $this->order]);
    }
    public function downloadInvoice($id)
    {
        $this->order = Order::find($id);
        $pdf = PDF::loadView('admin.order.download',  ['order' =>  $this->order]);
        return $pdf->stream('invoice.pdf');
    }
    public function delete($id)
    {
        $this->order = Order::find($id);
        if(!$this->order)
        {
            return redirect('/admin/all-order');
        }
        $this->order->delete();
        return redirect()->route('admin.all-order')->with('message', 'Order delete successfully');

    }
}
