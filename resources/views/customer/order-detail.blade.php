@extends('website.master')

@section('body')

    <section class="inner-banner pt-190  pb-190">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                    <h2 class="inner-banner-title text-white">My Account</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="my-account pt-100 pb-100">


        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="list-group profile-link">
                        <a href="{{route('customer.dashboard')}} " class="list-group-item  mb-3" aria-current="true">Dashboard</a>
                        <a href="{{route('customer.profile')}} " class="list-group-item mb-3">My Profile</a>
                        <a href="{{route('customer.order')}} " class="list-group-item mb-3">My Order</a>
                        <a href=" {{route('customer.payment-history')}}" class="list-group-item mb-3">Payment History</a>
                        <a href="{{route('customer.shipping-address')}} " class="list-group-item mb-3">Shipping Address</a>
                        <a href="{{route('customer.password-reset')}} " class="list-group-item mb-3">Password Reset</a>
                        <a href="{{route('customer.logout')}} " class="list-group-item mb-3">Logout</a>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="card card-body" >
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Property Name</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Order ID</td>
                                <td>{{$order->id}}</td>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <td>{{$order->customer->name}}</td>
                            </tr>
                            <tr>
                                <td>Order Date</td>
                                <td>{{$order->order_date}}</td>
                            </tr>
                            <tr>
                                <td>Tax Total</td>
                                <td>{{$order->tax_total}}</td>
                            </tr>
                            <tr>
                                <td>Shipping Cost</td>
                                <td>{{$order->shipping_total}}</td>
                            </tr>
                            <tr>
                                <td>Payment Method</td>
                                <td>{{$order->payment_method}}</td>
                            </tr>
                            <tr>
                                <td>Transaction Id</td>
                                <td>{{$order->transaction_id}}</td>
                            </tr>
                            <tr>
                                <td>Order Total</td>
                                <td>{{$order->order_total}}</td>
                            </tr>
                            <tr>
                                <td>Order Status</td>
                                <td>{{$order->order_status}}</td>
                            </tr>
                            <tr>
                                <td>Payment Status</td>
                                <td>{{$order->payment_status}}</td>
                            </tr>
                            <tr>
                                <td>Delivery Status</td>
                                <td>{{$order->delivery_status}}</td>
                            </tr>
                            <tr>
                                <td>Delivery Address</td>
                                <td>{{$order->delivery_address}}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="card mt-5">
                        <div class="card-header">
                            <h4 class="card-title">Order Product Information</h4>
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
                                @foreach($orderDetails as $orderDetail)
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

            </div>
            <!-- end row -->

            </div>
        </div>
    </section>


@endsection


