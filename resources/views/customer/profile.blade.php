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
                    <div class="list-group">
                        <a href="{{route('customer.dashboard')}} " class="list-group-item mb-3" aria-current="true">Dashboard</a>
                        <a href="{{route('customer.profile')}} " class="list-group-item  mb-3">My Profile</a>
                        <a href="{{route('customer.order')}} " class="list-group-item mb-3">My Order</a>
                        <a href=" {{route('customer.payment-history')}}" class="list-group-item mb-3">Payment History</a>
                        <a href="{{route('customer.shipping-address')}} " class="list-group-item mb-3">Shipping Address</a>
                        <a href="{{route('customer.password-reset')}} " class="list-group-item mb-3">Password Reset</a>
                        <a href="{{route('customer.logout')}} " class="list-group-item mb-3">Logout</a>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class=" card card-body" >
                        <h5 class="card-title mb-3">My Profile</h5>

                            <div class="profile-area box--shadow">
                                <div class="profile-header mb-50">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-2">
                                            <div class="profile-img">
                                                <img src="{{asset('/')}}website/assets/images/bg/profile-img.jpg" alt>
                                                <div class="img-upload-icon">
                                                    <i class="las la-camera"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="profile-btn-group">
                                                <a href="#" class="eg-btn primary--btn profile-btn me-3">Upload</a>
                                                <a href="#" class="eg-btn white-btn-primary profile-btn box--shadow">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-body">
                                    <div class="form-wrap p-0">
                                        <form>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-inner">
                                                        <label>Full Name *</label>
                                                        <input type="text" name="full_name" value="{{$singleCustomer->name}}" placeholder="Your name">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-inner">
                                                        <label>Email *</label>
                                                        <input type="email" name="email" value="{{$singleCustomer->email}}" placeholder="Your email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-inner">
                                                        <label>Contact Number *</label>
                                                        <input type="text"  value="{{$singleCustomer->mobile}}"name="mobile">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="eg-btn primary--btn submit-btn">Save Change</button>
                                                </div>
                                             </div>
                                        </form>
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


