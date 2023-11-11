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
                        <a href=" {{route('customer.payment-history')}}" class="list-group-item mb-3">Payment History</a>
                        <a href="{{route('customer.shipping-address')}} " class="list-group-item  mb-3">Shipping Address</a>
                        <a href="{{route('customer.password-reset')}} " class="list-group-item  mb-3">Password Reset</a>
                        <a href="{{route('customer.logout')}} " class="list-group-item mb-3">Logout</a>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="card-body" >
                        <h4 class="card-title text-center mb-3">Password Reset</h4>

                        <div class="col-md-6 mx-auto">
                            <div class="form-wrap box--shadow">
                                <!-- Add your password reset form here -->
                                <form action="{{route('customer.password-update', ['id' => $loginCustomer->id])}}" method="POST">
                                    @csrf
                                    <div class="form-inner">
                                        <label>Email Address</label>
                                        <input type="text" name="email" value="{{$loginCustomer->email}}" placeholder="Your Email Address or Mobile Number">
                                    </div>
                                    <div class="form-inner">
                                        <label>New Password</label>
                                        <input type="password" name="password" placeholder="New Password">
                                    </div>
                                    <!-- Add a dropdown or radio buttons for the user to choose email or mobile -->
                                    <button type="submit" class="primary--btn login-btn text-uppercase">Reset Password</button>
                                </form>

                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </section>


@endsection



