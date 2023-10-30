@extends('website.master')
@section('body')

    <section class="inner-banner pt-190  pb-190">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                    <h2 class="inner-banner-title text-white">Checkout</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Complete Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="checkout-section pt-100 pb-100">
        <div class="container">
            <div class="row g-4">
                <div class="col">
                    <div class="card card-body">
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

