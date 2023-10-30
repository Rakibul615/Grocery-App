<!doctype html>
<html lang="en">


<head>
    <title>Login</title>
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
</head>
<body>

<section class="login-section pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade active show " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="form-wrap box--shadow">
                            <h3 class="title-30 text-center mb-35">Login Your Account</h3>

                            {{--                            login section start--}}

                            <form action="{{route('login')}}" class="login-form active" method="POST">
                                @csrf
                                <div class="row">
                                    <p class="text-success text-center">{{session('message')}}</p>
                                    <div class="col-12">
                                        <div class="form-inner">
                                            <label>Email *</label>
                                            <input type="email" name="email" placeholder="User Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-inner hidden-icon">
                                            <label>Password *</label>
                                            <input type="password" name="password" placeholder="abcdef*****">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-inner d-flex justify-content-between">
                                            <label class="container-checkbox">Remember Me
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <a href="#" class="forget-password">Forgotten password?</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-inner">
                                            <button type="submit"  class="primary--btn login-btn text-uppercase">login ACCOUNT</button>
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
</body>

</html>
