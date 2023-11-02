@extends('website.master')

@section('body')



    <section class="inner-banner pt-190  pb-190">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                    <h2 class="inner-banner-title text-white">Product Details</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="prod-details pt-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="product-details-gallery">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="nav flex-sm-column flex-row nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @foreach ($product->otherImages->take(3) as $key => $otherImage)
                                        <button class="nav-link{{ $key === 0 ? ' active' : '' }} mb-30" id="v-pills-img{{ $key + 1 }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img{{ $key + 1 }}" type="button" role="tab" aria-controls="v-pills-img{{ $key + 1 }}" aria-selected="{{ $key === 0 ? 'true' : 'false' }}">
                                            <img class="xzoom-gallery" src="{{ asset($key === 0 ? $product->image : $otherImage->image) }}" alt xpreview="{{ asset($key === 0 ? $product->image : $otherImage->image) }}">
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <span class="product-gallery-badge">-10%</span>
                                    @foreach ($product->otherImages->take(3) as $key => $otherImage)
                                        <div class="tab-pane fade{{ $key === 0 ? ' show active' : '' }}" id="v-pills-img{{ $key + 1 }}" role="tabpanel" aria-labelledby="v-pills-img{{ $key + 1 }}-tab">
                                            <div class="gallery-big-image">
                                                <img class="xzoom" id="xzoom-default" src="{{ asset($key === 0 ? $product->image : $otherImage->image) }}" alt xoriginal="{{ asset($key === 0 ? $product->image : $otherImage->image) }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                        <div class="prod-details-content">
                            <ul class="product-review2 d-flex flex-row align-items-center mb-25">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><a href="#" class="review-no"></a>(32 Review)</li>
                            </ul>
                            <h3 class="eg-title1 mb-25">{{$product->name}}</h3>
                            <h4 class="price-title border--bottom2 mb-15">{{$product->selling_price}}</h4>
                            <p class="para2 mb-15">{{$product->short_description}}.</p>

                            <form action="{{route('cart.add', ['id' => $product->id])}}" method="POST">
                                @csrf
                            <div class="prod-quantity d-flex align-items-center justify-content-start mb-20">
                                <div class="quantity">
                                    <input type="number" min="1" max="90" value="1" name="qty">
                                    <div class="quantity-nav">
                                        <div class="quantity-button quantity-up">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <div class="quantity-button quantity-down">
                                            <i class="bi bi-dash"></i>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="eg-btn md--btn primary--btn">Add to cart</button>
                            </div>
                            </form>

                            <ul class="prod-info">
                                <li><span>Category:</span>{{$product->category->name}}</li>
                                <li><span>Product Brand:</span>{{$product->brand->name}}</li>
                                <li><span>MFG:</span>{{$product->updated_at}}</li>
                                <li><span>Life:</span>05 Days</li>

                            </ul>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>


    <section class="prod-description pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="eg-title1 eg-title2 mb-50">Product Details</h3>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active btn--lg mb-20" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Discription</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Our Review (2)</button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content" id="v-pills-tabContent2">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="description box--shadow">
                                        <p class="para-2 mb-2">{{$product->short_description}}</p>
                                        <p class="para-2">{!! $product->long_description !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <ul class="comment-area mb-50">
                                        <li class="mb-30">
                                            <div class="comment-box">
                                                <div class="comment-header d-flex justify-content-start align-items-center mb-30">
                                                    <div class="author-img">
                                                        <img src="{{asset('/')}}website/assets/images/blog/commnt1.jpg" alt>
                                                    </div>
                                                    <div class="header-meta">
                                                        <h5>Jenny Wilson<span class="commnt-date"> - 8th Jan 2021</span></h5>
                                                        <ul class="product-review">
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-body mb-30">
                                                    <p class="para">Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque. Vestibulum venenatis leo et dictum finibus. Nulla vulputate dolor sit amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird on it meditation austin.</p>
                                                </div>
                                                <div class="comment-footer">
                                                    <ul class="footer-icon-list d-flex justify-content-start align-items-center">
                                                        <li><a href="#"><i class="lar la-thumbs-up"></i></a></li>
                                                        <li><a href="#"><i class="lar la-heart"></i></a></li>
                                                        <li><a href="#" class="commnt-reply ms-2">Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-box">
                                                <div class="comment-header d-flex justify-content-start align-items-center mb-30">
                                                    <div class="author-img">
                                                        <img src="{{asset('/')}}website/assets/images/blog/commnt2.jpg" alt>
                                                    </div>
                                                    <div class="header-meta">
                                                        <h5>Sara Waston<span class="commnt-date">- 10th Jan 2021</span></h5>
                                                        <ul class="product-review">
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-body mb-30">
                                                    <p class="para">Aenean dolor massa, rhoncus ut tortor in, pretium tempus neque. Vestibulum venenatis leo et dictum finibus. Nulla vulputate dolor sit amet tristique dapibus.Gochujang ugh viral, butcher pabst put a bird on it meditation austin.</p>
                                                </div>
                                                <div class="comment-footer">
                                                    <ul class="footer-icon-list d-flex justify-content-start align-items-center">
                                                        <li><a href="#"><i class="lar la-thumbs-up"></i></a></li>
                                                        <li><a href="#"><i class="lar la-heart"></i></a></li>
                                                        <li><a href="#" class="commnt-reply ms-2">Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="comment-form-area">
                                        <div class="form-header mb-40">
                                            <h5>Leave A Comment</h5>
                                            <span>Your email address will not be published. Required fields are marked *</span>
                                        </div>
                                        <form>
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <div class="form-inner">
                                                        <label>Your Name </label>
                                                        <input type="text" placeholder="Your name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-inner">
                                                        <label>Email </label>
                                                        <input type="text" placeholder="Your email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <textarea rows="6" placeholder="Your message"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <div class="comment-rate-area">
                                                        <p>Your Rating</p>
                                                        <div class="rate">
                                                            <input type="radio" id="star5" name="rate" value="5" />
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" id="star4" name="rate" value="4" />
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" id="star3" name="rate" value="3" />
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" id="star2" name="rate" value="2" />
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input type="radio" id="star1" name="rate" value="1" />
                                                            <label for="star1" title="text">1 star</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="lg--btn primary--btn">Post Comment</a>
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


    <section class="related-product pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="eg-title1 eg-title2 mb-50">Related Product</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="eg-product-carde-alpha">
                        <ul class="product-card-lavels">
                            <li class="discount-percentage">-25% off</li>
                        </ul>
                        <div class="eg-porduct-thumb">
                            <a href="product-details.html">
                                <img src="{{asset('/')}}website/assets/images/products/pomegra.png" alt>
                            </a>
                            <div class="thumb-action">
                                <a href="#"><i class="bi bi-heart"></i></a>
                            </div>
                        </div>
                        <div class="eg-porduct-body">
                            <h5 class="eg-product-title"><a href="product-details.html">Fresh Organic Vegetable
                                    Package </a></h5>
                            <div class="eg-product-card-price">
                                <del><span class="price-discounted-amount"><bdi>$3.15 <span class="price-meater">/kg</span></bdi></span></del>
                                <ins><span class="price-amount"><bdi>$15</bdi><span class="price-meater">/kg</span></span></ins>
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="eg-product-carde-alpha">
                        <ul class="product-card-lavels">
                            <li class="discount-percentage">-25% off</li>
                        </ul>
                        <div class="eg-porduct-thumb">
                            <a href="product-details.html">
                                <img src="{{asset('/')}}website/assets/images/products/greenapp.png" alt>
                            </a>
                            <div class="thumb-action">
                                <a href="#"><i class="bi bi-heart"></i></a>
                            </div>
                        </div>
                        <div class="eg-porduct-body">
                            <h5 class="eg-product-title"><a href="product-details.html">Fresh Organic Vegetable
                                    Package </a></h5>
                            <div class="eg-product-card-price">
                                <del><span class="price-discounted-amount"><bdi>$3.15 <span class="price-meater">/kg</span></bdi></span></del>
                                <ins><span class="price-amount"><bdi>$23</bdi><span class="price-meater">/kg</span></span></ins>
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
                                    <a href="{{route('product-detail',  ['id' => $product->id])}}">Add to cart <i class="bi bi-plus-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
