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
                        <a href="{{route('customer.dashboard')}} " class="list-group-item   mb-3" aria-current="true">Dashboard</a>
                        <a href="{{route('customer.profile')}} " class="list-group-item  mb-3">My Profile</a>
                        <a href="{{route('customer.order')}} " class="list-group-item mb-3">My Order</a>
                        <a href=" {{route('customer.payment-history')}}" class="list-group-item mb-3">Payment History</a>
                        <a href="{{route('customer.shipping-address')}} " class="list-group-item  mb-3">Shipping Address</a>
                        <a href="{{route('customer.password-reset')}} " class="list-group-item mb-3">Password Reset</a>
                        <a href="{{route('customer.logout')}} " class="list-group-item mb-3">Logout</a>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="card-body" >
                        <h5 class="card-title mb-3">Shipping Address</h5>
                        <div class="col-md-9">
                            <div class="eg-card billing-card position-relative">
                                <div class="edit-icon position-absolute top-0 end-0"><i class="lar la-edit"></i></div>
                                <ul class="card-list">
                                    <li><span>Full Name <small>:</small></span>{{$singleCustomer->name}}</li>
                                    <li><span>Email Address <small>:</small>&nbsp; {{$singleCustomer->email}}</span> </li>
                                    <li><span>Phone Number <small>: </small>&nbsp;{{$singleCustomer->mobile}}</span> </li>
                                    <li><span>Address <small>: </small></span>
                                        @if ($shippingInfo)
                                            {{ $shippingInfo->delivery_address }}.
                                        @else
                                        <!-- Handle the case when $shippingInfo is null -->
                                            No shipping information available.
                                        @endif
                                    </li>

                                    <li><span>Post code <small>:</small></span>1234 </li>
                                    <li><span>Country <small>:</small></span>Bangladesh </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                    </div>


                </div>
            </div>
        </div>
    </section>


@endsection


