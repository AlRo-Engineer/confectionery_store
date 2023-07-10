<?php $formUniqueID = fn() => bin2hex(random_bytes(10))?>

<div class="before-header-mobile fullwidth-row">
    <div class="container-fluid">
        <div class="cta-header-mobile hide-desktop">
            <a href="tel:1833-000000" class="tel-num">(833) 93-Call Bree</a>
        </div>
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand logo-header" href="{{url('/')}}"><img
                        src="{{Vite::asset('resources/images/logo.png')}}" alt="Logo"/></a>
                <a class="navbar-brand logo-mobile hide-desktop" href="{{url('/')}}"><img
                        src="{{Vite::asset('resources/images/logo.png')}}" alt="Logo"/></a>
                <div class="my-2 my-lg-0 cta-header-locator tab-show">

                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="{{url('/')}}#our-products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about-us')}}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#testimonials">TESTIMONIALS</a>
                        </li>

                    </ul>
                    <div class="my-2 my-lg-0 cta-header">
                        <span class="call-us">Call Us Now!</span>
                        <a href="tel:1833-000000" class="btn-nav tel-num">(833) 93-Call Bree</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div><!-- Site Header END -->

