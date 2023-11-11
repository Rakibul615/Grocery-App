@extends('website.master')


<section class="inner-banner pt-190  pb-190">
    <div class="container-fluid">
        <div class="row">
            <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                <h2 class="inner-banner-title text-white">Product</h2>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<div class="product-section pt-100">
    <div class="container">
        <div class="row">
            <div class="sorting-area d-flex justify-content-between align-items-center mb-60">
                <p class="sorting-text">Showing 1-12 item</p>
                <div class="select-box d-flex justify-content-center align-items-center">
                    <select class="mb-0 select-primary1">
                        <option>Filter</option>
                        <option>Filter</option>
                        <option>Filter</option>
                        <option>Filter</option>
                    </select>
                    <select class="ms-3 mb-0 select-white">
                        <option>Popularity</option>
                        <option>Popularity</option>
                        <option>Popularity</option>
                        <option>Popularity</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($products as $product)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="eg-product-carde-alpha">
                    <ul class="product-card-lavels">
                        <li class="discount-percentage">-25% off</li>
                    </ul>
                    <div class="eg-porduct-thumb">
                        <a href="{{route('product-detail', ['id' => $product->id])}}">
                            <img src="{{asset($product->image)}}" alt>
                        </a>
                        <div class="thumb-action">
                            <a href="#"><i class="bi bi-heart"></i></a>
                        </div>
                    </div>
                    <div class="eg-porduct-body">
                        <h5 class="eg-product-title"><a href="{{route('product-detail', ['id' => $product->id])}}">{{$product->name}}</a></h5>
                        <div class="eg-product-card-price">
                            <del><span class="price-discounted-amount"><bdi>Tk. {{$product->regular_price}} <span class="price-meater">/kg</span></bdi></span></del>
                            <ins><span class="price-amount"><bdi>Tk. {{$product->selling_price}}</bdi><span class="price-meater">/kg</span></span></ins>
                        </div>
                        <div class="product-card-bottom">
                            <ul class="product-rating">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                            <div class="product-add-btn">
                                <a href="{{route('cart.add', ['id' => $product->id])}}">Add to cart <i class="bi bi-plus-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <div class="row pt-100">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1"><i class="las la-arrow-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link active" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="las la-arrow-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="feature-area feature-style-one  mb-100 pt-76">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-sm-6">
                <div class="feature-card-alpha">
                    <div class="feature-icon">
                        <img src="assets/images/icons/feature-i1.svg" alt>
                    </div>
                    <div class="feature-content">
                        <h5>Fast Free Shipping</h5>
                        <p>Around the world</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-card-alpha">
                    <div class="feature-icon">
                        <img src="assets/images/icons/feature-i2.svg" alt>
                    </div>
                    <div class="feature-content">
                        <h5>24/7 Supports</h5>
                        <p>Contact us 24 hours</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-card-alpha">
                    <div class="feature-icon">
                        <img src="assets/images/icons/feature-i3.svg" alt>
                    </div>
                    <div class="feature-content">
                        <h5>100% Money Back</h5>
                        <p>Guarantee of money retun</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-card-alpha">
                    <div class="feature-icon">
                        <img src="assets/images/icons/feature-i4.svg" alt>
                    </div>
                    <div class="feature-content">
                        <h5>100% Secure Payment</h5>
                        <p>Your payment are safe with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


