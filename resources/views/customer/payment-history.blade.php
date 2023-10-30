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
                        <a href="{{route('customer.profile')}} " class="list-group-item  mb-3">My Profile</a>
                        <a href="{{route('customer.order')}} " class="list-group-item mb-3">My Order</a>
                        <a href=" {{route('customer.payment-history')}}" class="list-group-item  mb-3">Payment History</a>
                        <a href="{{route('customer.shipping-address')}} " class="list-group-item mb-3">Shipping Address</a>
                        <a href="{{route('customer.password-reset')}} " class="list-group-item mb-3">Password Reset</a>
                        <a href="{{route('customer.logout')}} " class="list-group-item mb-3">Logout</a>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="card-body" >
                        <h5 class="card-title mb-3">Payment History</h5>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr class="table-warning">
                                <th>SL No</th>
                                <th>Tax Total</th>
                                <th>Shipping Cost</th>
                                <th>Transaction ID</th>
                                <th>Payment Amount</th>
                                <th>Currency</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($paymentInfo as $payment)
                                <tr class="table-light">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$payment->tax_total}}</td>
                                    <td>{{$payment->shipping_total}}</td>
                                    <td>{{$payment->transaction_id}}</td>
                                    <td>Tk. {{$payment->order_total}}</td>
                                    <td>{{$payment->currency}}</td>
                                    <td>{{$payment->payment_method}}</td>
                                    <td>{{$payment->payment_status}}</td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>


                </div>
            </div>
        </div>
    </section>


@endsection


