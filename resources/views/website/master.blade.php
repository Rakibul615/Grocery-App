<!doctype html>
<html lang="en">


<head>
    <title>EG Shop - Grocery eCommerce HTML Template</title>
    <link rel="icon" href="{{asset('/')}}website/assets/images/fav.png" type="image/gif" sizes="20x20">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/all.css">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/boxicons.min.css">


    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/line-awesome.css">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick-theme.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick.css">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/nice-select.css">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/sass/style.css">

    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/xzoom.css" media="all">


    <style>
        /* Change the link color to orange on hover */
        .list-group a:hover {
            color: #ffffff;
            background-color: #F96822;
        }
    </style>
</head>
<body>

<div class="mobile-search">
    <div class="container">
        <div class="row">
            <div class="col-11">
                <label>What are you lookking for?</label>
                <input type="text" placeholder="Search Products, Category, Brand">
            </div>
            <div class="col-1 d-flex justify-content-end align-items-center">
                <div class="search-cross-btn">
                    <i class="las la-times"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-cart-sidebar">
    <div class="cart-top mb-50">
        <div class="cart-close-icon">
            <i class="las la-times"></i>
        </div>
        <ul class="cart-product-grid">
            @foreach(Cart::content() as $cartItem)
                <li class="single-cart-product d-flex justify-content-between align-items-center">
                    <div class="cart-product-info d-flex justify-content-start align-items-center">
                        <div class="product-img">
                            <img src="{{ asset($cartItem->options->image) }}" alt class="img-fluid">
                        </div>
                        <div class="product-info">
                            <a href="{{ route('product-detail', ['id' => $cartItem->id]) }}">
                                <h5 class="product-title">{{ $cartItem->name }}</h5>
                            </a>
                            <ul class="product-review">
                                @for ($i = 0; $i < 5; $i++)
                                    <li><i class="bi bi-star-fill"></i></li>
                                @endfor
                            </ul>
                            <p class="product-price"><span>{{ $cartItem->qty }}</span>x <span class="p-price">${{ $cartItem->price }}</span></p>
                        </div>
                    </div>
                    <div class="cart-product-delete-btn">
                        <a href="{{ route('cart.remove', ['rowId' => $cartItem->rowId]) }}"><i class="las la-times"></i></a>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
    <div class="cart-bottom">
        <div class="cart-total d-flex justify-content-between">
            <label>Subtotal :</label>
            <span>Tk. {{Cart::subtotal() + Cart::tax()}}</span>
        </div>
        <div class="cart-btns mb-4">
            <a href="{{route('checkout')}}" class="lg--btn primary--btn w-100 text-center mb-4">CHECKOUT</a>
            <a href="{{route('cart.show')}}" class="primary--btn2 lg--btn w-100 text-center">VIEW CART</a>
        </div>

    </div>
</div>


<div class="category-sidebar ">
    <div class="category-sidebar-wrapper category-active">
        <div class="category-seidebar-top">
            <h4>All category</h4>
            <div class="category-close">
                <i class="las la-arrow-left"></i>
            </div>
        </div>
        <div class="accordion" id="categoryExample">
            @foreach($categories as $category)
            <div class="accordion-item">
                <h2 class="accordion-header" id="categoryHeading{{$category->id}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#category{{$category->id}}" aria-expanded="false" aria-controls="categoryOne">
                        <img src="{{asset($category->image)}}" alt>
                        {{$category->name}}
                    </button>
                </h2>
                <div id="category{{$category->id}}" class="accordion-collapse collapse" aria-labelledby="categoryHeading{{$category->id}}" data-bs-parent="#categoryExample">
                    <div class="accordion-body">
                        <ul class="sb-category-list">
                            @foreach($category->subCategories as $subCategory)
                            <li><a href="{{route('product-category', ['id' => $category->id])}}">{{ $subCategory->name }}</a> <span class="product-amount">(10)</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


<div class="mobile-sidebar d-flex justify-content-between flex-column">
    <div class="mobile-menu-close">
        <i class="las la-arrow-left"></i>
    </div>
    <ul class="m-0 p-0">
        <li class="moblie-item">
            <a href="#" class="drop-down moblie-link">Home&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
            <ul class="mob-submenu">
                <li><a href="index-2.html">Home 1</a></li>
                <li><a href="home2.html">Home 2</a></li>
            </ul>
        </li>
        <li class="moblie-item">
            <a href="#" class="drop-down moblie-link">Shop&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
            <ul class="mob-submenu">
                <li><a href="product-details.html">Product</a></li>
                <li><a href="product-details.html">Product Details</a></li>
                <li><a href="product-sidebar.html">Product Sidebar</a></li>
            </ul>
        </li>
        <li class="moblie-item">
            <a href="#" class="drop-down moblie-link">Pages&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
            <ul class="mob-submenu">
                <li><a href="about.html">about</a></li>
                <li><a href="cart.html">cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="account.html">my account</a></li>
                <li><a href="login.html">login Register</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="error.html">error</a></li>
            </ul>
        </li>
        <li class="moblie-item">
            <a href="#" class="drop-down moblie-link">Blog&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
            <ul class="mob-submenu">
                <li><a href="blog-grid.html">blog grid</a></li>
                <li><a href="blog-standard.html">blog standard</a></li>
                <li><a href="blog-details.html">blog details</a></li>
            </ul>
        </li>
        <li class="moblie-item">
            <a href="contact.html" class="moblie-link">contact</a>
        </li>
    </ul>
    <div class="mobile-contact-area">
        <h6>Get in touch</h6>
        <small>541 Melville Ave, Palo Alto, CA 94301</small>
        <small><a href="https://demo.egenslab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8bbb7b6b6bdbbacf6adab98bfb5b9b1b4f6bbb7b5">[email&#160;protected]</a></small>
        <ul class="mobile-social-icons d-flex justify-content-start align-items-center">
            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
            <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
            <li><a href="#"><i class="lab la-twitter"></i></a></li>
            <li><a href="#"><i class="lab la-instagram"></i></a></li>
        </ul>
    </div>
</div>

<div class="mobile-bottom-menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="d-flex justify-content-around">
                    <li><div class="search-btn"><i class="las la-search"></i></div>
                    </li>
                    <li><a href="#"><i class="las la-user"></i></a></li>
                    <li><div class="sidebar-btn"><i class="las la-bars"></i></div></li>
                    <li>
                        <div class="cart-btn position-relative">
                            <i class="las la-shopping-cart"></i>
                            <div class="cart-items-count">{{count(Cart::content())}}</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{--header section for home--}}
<header class="header-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-5 col-sm-2 col-8 d-flex align-items-center">
                <div class="mobile-menu-btn ellips-menu d-block d-lg-none">
                    <small class="fw-bold">Menu</small>
                </div>
                <nav class="main-nav d-none d-lg-block">
                    <ul class="d-flex align-items-center ">
                        <li class="menu-item"><a href="{{route('home')}}" class="menu-link">Home</a>

                        </li>
                        <li class="menu-item"><a href="{{route('product-shop')}}" class="menu-link">Shop</a>

                        </li>
                        <li class="menu-item"><a href="{{'blog'}}" class="menu-link">Pages</a>

                        </li>
                        <li class="menu-item"><a href="{{'blog'}}" class="menu-link">Blogs</a>

                        </li>
                        <li class="menu-item"><a href="{{route('contact')}}" class="menu-link">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-xxl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                <a href="{{route('home')}}" class="header-1-logo text-center">
                    <img src="{{asset('/')}}website/assets/images/icons/header-1-logo.svg" alt>
                </a>
            </div>
            <div class="col-xxl-5 col-xl-4 col-lg-3 col-md-5 col-sm-8 d-sm-block d-none">
                <div class="header-right-area d-flex justify-content-end align-items-center">
                    <div class="header-1-icons">
                        <ul class="d-flex">
                            <li><div class="search-btn"><i class="las la-search"></i></div>
                            </li>
{{--                            <li><a href="account.html"><i class="las la-user"></i></a></li>--}}
                            <nav class="main-nav d-none d-lg-block">
                                @if(Session::get('customer_id'))
                                    <li class="menu-item dropdown">
                                        <a href="javascript:void(0);" class="menu-link dropbtn">
                                            <i class="las la-user"></i>
                                            {{Session::get('customer_name')}}
                                        </a>
                                        <ul class="submenu-home1 dropdown-content show">
                                            <li><a href="{{route("customer.dashboard")}}">My Account</a></li>
                                            <li><a href="{{route("customer.logout")}}">Logout</a></li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="menu-item dropdown">
                                        <a href="javascript:void(0);" class="menu-link dropbtn">
                                            <i class="las la-user"></i>
                                        </a>
                                        <ul class="submenu-home1 dropdown-content show">
                                            <li><a href="{{route("customer.login")}}">Login</a></li>
                                            <li><a href="{{route("customer.register")}}">Register</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </nav>
                            <li><div class="sidebar-btn"><i class="las la-bars"></i></div></li>
                            <li>
                                <div class="cart-btn position-relative">
                                    <i class="las la-shopping-cart"></i>
                                    <div class="cart-items-count">{{count(Cart::content())}}</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header-1-contact d-flex align-items-center">
                        <div class="contact-num">
                            <span>Hot Line Number</span>
                            <p>+880 176 1111 456</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{--end of the header section for home--}}

@yield("body")

<footer class="footer-area footer-design-1">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                <div class="footer-wrap">
                    <div class="row justify-content-between gy-5">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="single-widget">
                                <div class="footer-title">
                                    <h3>About EG Shop</h3>
                                </div>
                                <div class="footerabout-content">
                                    <p>EG STORE - worldwide Grocery store since 2021. We sell over 2000+ Category
                                        products on our web-site.</p>
                                </div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <i class="las la-phone-volume"></i>
                                            <span><a href="tel:123456781233">+1234 5678 1233</a> <br> <a href="tel:123445651343">+1234 4565 1343</a></span>
                                        </li>
                                        <li>
                                            <i class="lar la-envelope"></i>
                                            <span><a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#bbd2d5ddd4fbdec3dad6cbd7de95d8d4d6"><span class="__cf_email__" data-cfemail="10797e767f507568717d607c753e737f7d">[email&#160;protected]</span></a> <br><a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#076e69616847627f666a776b622964686a"><span class="__cf_email__" data-cfemail="01727471716e7375416479606c716d642f626e6c">[email&#160;protected]</span></a></span>
                                        </li>
                                        <li>
                                            <i class="las la-map-marker"></i>
                                            <span>3102 Bartlett Avenue <br> Southfield, MI 48075</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="single-widget text-lg-center">
                                <div class="footer-logo">
                                    <a href="index-2.html"><img src="{{asset('/')}}website/assets/images/footer-logo.png" alt></a>
                                    <p>Register now to get update on promotion and coupons. Don’t worry! It’s not
                                        Spam</p>
                                </div>
                                <div class="form-design form-design-1">
                                    <form action="https://demo.egenslab.com/html/eg-shop-grocery/index.html">
                                        <input type="text" placeholder="Your Email">
                                        <button>Send</button>
                                    </form>
                                </div>
                                <div class="footer-social pt-50">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                            <div class="single-widget">
                                <div class="footer-title">
                                    <h3>Company</h3>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Our Support</a></li>
                                        <li><a href="#">Terms & Service</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Other Issues</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 copy-right-section align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-lg-start text-center">
                <div class="copy-right-area ">
                    <p class="copy-text">Copyright 2021 EG-Shop Grocery | Design By <a href="#">Egens Lab</a></p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="footer-card-support text-lg-end text-center">
                    <ul>
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/icons/paypal.svg" alt></a></li>
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/icons/payonert.svg" alt></a></li>
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/icons/visa.svg" alt></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>



<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('/')}}website/assets/js/slick.js"></script>

<script src="{{asset('/')}}website/assets/js/jquery.nice-select.js"></script>

<script src="{{asset('/')}}website/assets/js/odometer.min.js"></script>
<script src="{{asset('/')}}website/assets/js/viewport.jquery.js"></script>

<script src="{{asset('/')}}website/assets/js/jquery.magnific-popup.min.js"></script>

<script src="{{asset('/')}}website/assets/js/jquery-ui.js"></script>

<script src="{{asset('/')}}website/assets/js/main.js"></script>

<!-- xzoom plugin here -->
<script src="{{asset('/')}}website/assets/js/jquery.js"></script>
<script src="{{asset('/')}}website/assets/js/xzoom.min.js"></script>
<script src="{{asset('/')}}website/assets/js/setup.js"></script>
<script>
    /* calling script */
    $(".xzoom, .xzoom-gallery").xzoom({tint: '#333', Xoffset: 15});
</script>
</body>


</html>
