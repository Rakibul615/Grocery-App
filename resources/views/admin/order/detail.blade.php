@extends('layouts.app')

@section('body')

@section('page-title')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Order Module</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order</a></li>
                        <li class="breadcrumb-item active">Order Information</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">order Detail Information</h2>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body">

                <table id=" " class="table table-bordered dt-responsive  nowrap w-100">
                    <tr>
                        <th>Order ID</th>
                        <td>{{$orderDetail->id}}</td>
                    </tr>
                    <tr>
                        <th>Customer Name</th>
                        <td>{{$orderDetail->customer->name}}</td>
                    </tr>
                    <tr>
                        <th>Customer Email</th>
                        <td>{{$orderDetail->customer->email}}</td>
                    </tr>
                    <tr>
                        <th>Customer Mobile</th>
                        <td>{{$orderDetail->customer->mobile}}</td>
                    </tr>
                    <tr>
                        <th>Order Date</th>
                        <td>{{$orderDetail->order_date}}</td>
                    </tr>
                    <tr>
                        <th>Order Status</th>
                        <td>{{$orderDetail->order_status}}</td>
                    </tr>
                    <tr>
                        <th>Shipping Address</th>
                        <td>{{$orderDetail->delivery_address}}</td>
                    </tr>
                    <tr>
                        <th>Shipping Cost</th>
                        <td>Tk. {{$orderDetail->shipping_total}}</td>
                    </tr>
                    <tr>
                        <th>Tax Amount</th>
                        <td>Tk. {{$orderDetail->tax_total}}</td>
                    </tr>
                    <tr>
                        <th>Payment Method</th>
                        <td>{{$orderDetail->payment_method}}</td>
                    </tr>
                    <tr>
                        <th>Payment Status</th>
                        <td>{{$orderDetail->payment_status}}</td>
                    </tr>
                    <tr>
                        <th>Order Total</th>
                        <td>Tk. {{$orderDetail->order_total}}</td>
                    </tr>


                </table>


            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Order Product Information</h2>
                <p class="text-center text-success">{{Session('message')}}</p>

            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>

                    <tr>
                        <th>SL No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>


                    </tr>
                    </thead>

                    <tbody>
                    @foreach($orderDetail->orderDetail as $orderDetail)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$orderDetail->product_name}}</td>
                            <td>{{$orderDetail->product_price}}</td>
                            <td>{{$orderDetail->product_qty}}</td>
                            <td>{{$orderDetail->product_qty * $orderDetail->product_price}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>


    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection


