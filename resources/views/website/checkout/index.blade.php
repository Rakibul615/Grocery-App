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
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="checkout-section pt-100 pb-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="form-wrap box--shadow mb-30">
                        <h4 class="title-25 mb-20">Billing Details</h4>


                        <form action="{{route('new-order')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-inner">
                                        <label>Full Name</label>
                                       @if(isset($customer->name))
                                            <input type="text" name="name" value="{{$customer->name}}" placeholder="Your full name">
                                        @else
                                            <input type="text" name="name" value=" " placeholder="Your full name">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-inner">
                                        <label>Email Address</label>
                                        @if(isset($customer->email))
                                            <input type="email" name="email" value="{{$customer->email}}" placeholder="Email Address">
                                        @else
                                            <input type="email" name="email" value=" " placeholder="Email Address">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-inner">
                                        <label>Phone Number</label>
                                        @if(isset($customer->mobile))
                                            <input type="number" name="mobile" value="{{$customer->mobile}}" placeholder="Phone Number">
                                        @else
                                            <input type="number" name="mobile" value=" " placeholder="Phone Number">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-inner">
                                        <label>Delivery Address</label>
                                        <textarea  type="text" name="delivery_address" placeholder="Delivery Address" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                                <div class="payment-methods mb-50">
                                    <label for="">Select Payment Method</label>
                                    <div class="form-check payment-check">

                                        <input class="form-check-input me-3" type="radio" name="payment_type" value="online" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Online
                                        </label>
                                    </div>
                                    <div class="form-check payment-check">
                                        <input class="form-check-input me-3" type="radio" name="payment_type" value="cash" id="flexRadioDefault2" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Cash on delivery
                                        </label>

                                    </div>
                                </div>

                            <div class="place-order-btn">
                                    <button type="submit" class="primary--btn lg--btn">Place Order</button>
                                </div>
                        </form>


                    </div>
                </div>
                <aside class="col-lg-5">
                    <div class="added-product-summary mb-30">
                        <h5 class="title-25 checkout-title">
                            Order Summary
                        </h5>
                        <ul class="added-products">
                            @foreach(Cart::content() as $cartItem)
                                <li class="single-product d-flex justify-content-start">
                                    <div class="product-img">
                                        <img src="{{ asset($cartItem->options->image) }}" alt>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-title"><a href="{{ route('product-detail', ['id' => $cartItem->id]) }}">{{ $cartItem->name }}</a></h5>
                                        <div class="product-total d-flex align-items-center">
                                            <div class="quantity">
                                                <form action="{{ route('cart.update', ['rowId' => $cartItem->rowId]) }}" method="POST">
                                                    @csrf
                                                    <input type="number" min="1" max="90" name="qty" value="{{ $cartItem->qty }}">
                                                    <button type="submit" id="customButton">
                                                        <i class="bi bi-check-lg" ></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <strong>
                                                <i class="bi bi-x-lg px-2"></i>
                                                <span class="product-price">TK. {{ $cartItem->qty*$cartItem->price }}</span>
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="delete-btn">
                                        <a href="{{ route('cart.remove', ['rowId' => $cartItem->rowId]) }}"><i class="las la-times"></i></a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="summery-card cost-summery mb-30">
                        <table class="table cost-summery-table">
                            <thead>
                            <tr>
                                <th>Subtotal</th>
                                <th>Tk. {{$subTotal = round(Cart::subtotal()) }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tax">Tax (15%)</td>
                                <td>Tk {{$tax = round($subTotal*0.15)}}</td>
                            </tr>
                            <tr>
                                <td class="tax">Shipping Cost </td>
                                <td>Tk {{$shipping = 100}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="summery-card total-cost mb-30">
                        <table class="table cost-summery-table total-cost">
                            <thead>
                            <tr>
                                <th>Total</th>
                                <th>Tk. {{$totalPayable = round($subTotal + $tax + $shipping)}}</th>
                            </tr>
                            @php
                                Session::put('order_total', round($totalPayable));
                                Session::put('tax_total', round($tax));
                                Session::put('shipping_total', $shipping);
                            @endphp
                            </thead>
                        </table>
                    </div>

                </aside>
            </div>
        </div>
    </section>


@endsection
