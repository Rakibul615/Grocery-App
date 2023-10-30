@extends('website.master')

@section('body')


    <div class="main-cart-sidebar">
        <div class="cart-top mb-50">
            <div class="cart-close-icon">
                <i class="las la-times"></i>
            </div>
            <ul class="cart-product-grid">
                <li class="single-cart-product d-flex justify-content-between align-items-center">
                    <div class="cart-product-info d-flex justify-content-start align-items-center">
                        <div class="product-img">
                            <img src="{{asset('/')}}website/assets/images/products/guava3.png" alt class="img-fluid">
                        </div>
                        <div class="product-info">
                            <a href="product-details.html">
                                <h5 class="product-title">Guava</h5>
                            </a>
                            <ul class="product-review">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                            <p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
                            </p>
                        </div>
                    </div>
                    <div class="cart-product-delete-btn">
                        <a href="javascript:void(0)"><i class="las la-times"></i></a>
                    </div>
                </li>
                <li class="single-cart-product d-flex justify-content-between align-items-center">
                    <div class="cart-product-info d-flex justify-content-start align-items-center">
                        <div class="product-img">
                            <img src="{{asset('/')}}website/assets/images/products/product-sm3.png" alt class="img-fluid">
                        </div>
                        <div class="product-info">
                            <a href="product-details.html">
                                <h5 class="product-title">Nut</h5>
                            </a>
                            <ul class="product-review">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                            <p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
                            </p>
                        </div>
                    </div>
                    <div class="cart-product-delete-btn">
                        <a href="javascript:void(0)"><i class="las la-times"></i></a>
                    </div>
                </li>
                <li class="single-cart-product d-flex justify-content-between align-items-center">
                    <div class="cart-product-info d-flex justify-content-start align-items-center">
                        <div class="product-img">
                            <img src="{{asset('/')}}website/assets/images/products/product-sm16.png" alt class="img-fluid">
                        </div>
                        <div class="product-info">
                            <a href="product-details.html">
                                <h5 class="product-title">Strwberry</h5>
                            </a>
                            <ul class="product-review">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                            <p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
                            </p>
                        </div>
                    </div>
                    <div class="cart-product-delete-btn">
                        <a href="javascript:void(0)"><i class="las la-times"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cart-bottom">
            <div class="cart-total d-flex justify-content-between">
                <label>Subtotal :</label>
                <span>$64.08</span>
            </div>
            <div class="cart-btns mb-4">
                <a href="checkout.html" class="lg--btn primary--btn w-100 text-center mb-4">CHECKOUT</a>
                <a href="cart.html" class="primary--btn2 lg--btn w-100 text-center">VIEW CART</a>
            </div>
            <p class="cart-shipping-text"><strong>SHIPPING:</strong> Continue shopping up to $64.08 and receive free
                shipping. stay with EG </p>
        </div>
    </div>



    <section class="inner-banner pt-190  pb-190">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                    <h2 class="inner-banner-title text-white">Cart</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="cart-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <p class="text-center text-success">{{session('message')}}</p>
                <div class="col-12">
                    <div class="table-wrapper">
                        <table class="eg-table table cart-table">
                            <thead>
                            <tr>

                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Discount Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sum = 0)

                            @foreach($products as $cartItem)
                            <tr>

                                <td data-label="Image">
                                    <img src="{{asset($cartItem->options->image)}}" alt="">
                                </td>
                                <td data-label="Product Name">{{$cartItem->name}}</td>
                                <td data-label="Price">TK. {{$cartItem->price}}</td>
                                <td data-label="Quantity">
                                    <div class="quantity">
                                        <form action="{{ route('cart.update', ['rowId' => $cartItem->rowId]) }}" method="POST">
                                            @csrf
                                            <input type="number" min="1" max="90" name="qty" value="{{ $cartItem->qty }}">
                                            <button id="customButton" type="submit"><i class="bi bi-check-lg"></i></button>
                                        </form>

                                    </div>
                                </td>
                                <td data-label="Total">TK. {{$cartItem->subtotal}}</td>

                                <td data-label="Delete">
                                    <div class="delete-icon">
                                        <a onclick="return confirm('Are you sure to delete this?')" href="{{route('cart.remove', ['rowId' => $cartItem->rowId])}}"> <i class="las la-times"></i></a>
                                    </div>
                                </td>
                            </tr>

                                @php($sum = $sum + ($cartItem->subtotal))
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="coupon-area">
                        <div class="cart-coupon-input">
                            <h5 class="coupon-title">Coupon Code</h5>
                            <form class="coupon-input d-flex align-items-center">
                                <input type="text" placeholder="Coupon Code">
                                <button type="submit">Apply Code</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table total-table">
                        <thead>
                        <tr>
                            <th>Cart Totals</th>
                            <th></th>
                            <th>TK. {{$sum}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Shipping </td>
                            <td>
                                <ul class="cost-list text-start">
                                    <li>Shipping Cost</li>
                                    <li>Tax (15%) </li>

                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="single-cost text-center">
                                    <li>Tk. {{$shipping = 100}}</li>
                                    <li>TK. {{$tax = round($sum*0.15)}}<li>

                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td></td>
                            <td>TK. {{$sum+ $tax + $shipping}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="cart-btn-group">
                        <a href="{{route('checkout')}}" class="eg-btn primary--btn proceed-btn">Proceed to Checkout</a>
                        <a href="{{route('home')}}" class="eg-btn shopping-btn">Continue to shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('/')}}website/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('/')}}website/assets/js/slick.js"></script>

    <script src="{{asset('/')}}website/assets/js/jquery.nice-select.js"></script>

    <script src="{{asset('/')}}website/assets/js/odometer.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/viewport.jquery.js"></script>

    <script src="{{asset('/')}}website/assets/js/jquery.magnific-popup.min.js"></script>

    <script src="{{asset('/')}}website/assets/js/jquery-ui.js"></script>

    <script src="{{asset('/')}}website/assets/js/main.js"></script>
    </body>


    </html>

@endsection
