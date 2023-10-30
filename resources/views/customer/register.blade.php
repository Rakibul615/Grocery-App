@extends('website.master')

@section('body')

    <section class="inner-banner pt-190  pb-190">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                    <h2 class="inner-banner-title text-white">Register</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="login-section pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="form-wrap box--shadow">
                                <h3 class="title-30 text-center mb-35">Register Your Account</h3>

                                <form action="{{route('customer.register')}}" class="login-form" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-inner">
                                                <label>Full Name*</label>
                                                <input type="text" name="name" placeholder="Your first name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-inner">
                                                <label>Email Address *</label>
                                                <input type="email" name="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-inner hidden-icon">
                                                <label>Mobile Number *</label>
                                                <input type="tel" name="mobile" placeholder="123-456-7890">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-inner hidden-icon">
                                                <label>Password *</label>
                                                <input type="password" name="password" placeholder="abcdef*****">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-inner">
                                                <label class="container-checkbox">I agree to the Terms & Policy
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-inner">
                                                <button type="submit"  class="primary--btn login-btn">CREATE AN ACCOUNT</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-choice-area">
                                                <p class="text-uppercase">or Sign up WITH</p>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <div class="eg-btn social-btn bg-light-blue">
                                                            <i class="lab la-google-plus"></i>Signup whit google
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="eg-btn social-btn bg-facebook">
                                                            <i class="lab la-facebook-f"></i>Sign up whit facebook
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
