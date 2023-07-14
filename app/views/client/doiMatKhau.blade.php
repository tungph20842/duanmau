@include('layouts.client.header')
@include('layouts.client.thongBao')
<body>
<div class="axil-signin-area">

    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-xl-4 col-sm-6">
                <a href="index.html" class="site-logo"><img src="assets/images/logo/logo.png" alt="logo"></a>
            </div>
            <div class="col-md-2 d-lg-block d-none">
                <a href="forgot-password.html" class="back-btn"><i class="far fa-angle-left"></i></a>
            </div>
            <div class="col-xl-6 col-lg-4 col-sm-6">
                <div class="singin-header-btn">
                    <p>Already a member? <a href="sign-in.html" class="sign-in-btn">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--10">
                <h2 class="title">We Offer the Best Products</h2>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title mb--35">Reset Password</h3>
                    <form class="singin-form">
                        <div class="form-group">
                            <label>New password</label>
                            <input type="password" class="form-control" name="password1" value="123456789">
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="password2" value="123456789">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="axil-btn btn-bg-primary submit-btn">Resrt Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.client.footer_link')