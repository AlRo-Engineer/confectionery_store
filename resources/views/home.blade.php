@extends('layouts.base-layout')

@section('content')

    <!-- Hero Banner -->
    <section id="home-hero" class="site-page-banner">
        <div class="banner-background">
            <img src="{{Vite::asset('resources/images/home-hero-main.png')}}" alt="home banner">
        </div>
        <div class="wrap-grad"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 text-white">
                    <h1>Indulge in the World of Confectionery Perfection</h1>
                    <p>Welcome to our delightful candy store, where every sweet dream becomes reality. Crafted with
                        love, our masterful confectionery creations promise an experience of unparalleled pleasure. From
                        classic cakes to inventive sweets, every morsel is a testament to our unwavering commitment to
                        quality, taste, and artisanal flair. Embark on a journey of sugar-coated bliss, as we bring to
                        you the best of tradition, innovation, and the magic of flavors. Dive in and relish the goodness
                        of our mouth-watering treats.<br>
                        <span><strong>After all, life is a little sweeter here.</strong></span>
                    </p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section><!-- Hero Banner END -->
    <!-- Our Services -->
    <section id="our-products" class="services-main pd-80">
        <div class="container">
            <div class="row">
                <div class="services-title text-center">
                    <h1>OUR <span class="text-primary underlined">PRODUCTS</span></h1>
                    <p>Dive into our wide variety of sweets and experience the joy of indulging in our handcrafted
                        confections. Because at our bakery, every day is a celebration of sweetness.</p>
                </div>
            </div>
            <div class="services-tab mt-5">
                <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-spray-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-spray" type="button" role="tab" aria-controls="pills-spray"
                                aria-selected="true">Cakes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blown-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-blown"
                                type="button" role="tab" aria-controls="pills-blown" aria-selected="false">
                            Pastries
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-attic-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-attic"
                                type="button" role="tab" aria-controls="pills-attic" aria-selected="false">
                            Candy bar
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-crawlspace-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-crawlspace" type="button" role="tab"
                                aria-controls="pills-crawlspace"
                                aria-selected="false">Candy Set
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <!-- Spray Foam -->
                    <div class="tab-pane fade show active" id="pills-spray" role="tabpanel"
                         aria-labelledby="pills-spray-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <picture>
                                    <img src="{{Vite::asset('resources/images/our-products-cakes.png')}}"
                                         alt="SPRAY FOAM iNSULATiON" width="412" height="427">
                                </picture>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-content-wrap">
                                    <h3 class="h3">Cakes</h3>
                                    <div class="text-content-wrap">
                                        <p>Whether you're celebrating a birthday, an anniversary, or simply a Tuesday,
                                            our cakes are the perfect sweet note to any occasion. Crafted with the
                                            finest ingredients and decorated with artistic flair, our cakes are as
                                            delicious as they are beautiful. From classic flavors like rich chocolate
                                            and velvety vanilla to exotic combinations, there's a cake to satisfy every
                                            sweet tooth.
                                        </p>
                                        <a href="{{ url('/cakes') }}">
                                            <button class="btn-nav product-check-btn" type="button">
                                                View Collection
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Spray Foam END -->
                    <!-- Blown-In -->
                    <div class="tab-pane fade" id="pills-blown" role="tabpanel" aria-labelledby="pills-blown-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <picture>
                                    <img src="{{Vite::asset('resources/images/our-products-pastries.png')}}"
                                         alt="Services Insulation" width="412" height="427">
                                </picture>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-content-wrap">
                                    <h3 class="h3">Pastries</h3>
                                    <div class="text-content-wrap">
                                        <p>Our pastries are a sweet tribute to the art of baking. From flaky croissants
                                            to decadent eclairs, each pastry is baked to perfection, delivering an
                                            irresistible blend of texture and flavor. Enjoy them as a delightful
                                            breakfast, a midday snack, or a dessert – they're a sweet treat at any time
                                            of day.
                                        </p>
                                        <a href="{{ url('/pastries') }}">
                                            <button class="btn-nav product-check-btn" type="button">
                                                View Collection
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Blown-In END -->
                    <!-- Residential Attic -->
                    <div class="tab-pane fade" id="pills-attic" role="tabpanel" aria-labelledby="pills-attic-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <picture>
                                    <img src="{{Vite::asset('resources/images/our-products-candy-bar.png')}}"
                                         alt="Residential Attic Retrofit" width="412" height="427">
                                </picture>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-content-wrap">
                                    <h3 class="h3">Candy Bars</h3>
                                    <div class="text-content-wrap">
                                        <p>Indulge in our selection of handcrafted candy bars, where classic and
                                            creative flavors collide. Each bite is a delightful surprise, with layers of
                                            luscious fillings wrapped in decadent chocolate. Whether you crave for the
                                            comforting taste of caramel and nougat or the exciting blend of unique
                                            flavors, our candy bars promise to delight.
                                        </p>
                                        <a href="{{ url('/candy-bars') }}">
                                            <button class="btn-nav product-check-btn" type="button">
                                                View Collection
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Residential Attic END -->
                    <!-- Residential Crawlspace -->
                    <div class="tab-pane fade" id="pills-crawlspace" role="tabpanel"
                         aria-labelledby="pills-crawlspace-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <picture>
                                    <img src="{{Vite::asset('resources/images/our-products-candy-set.png')}}"
                                         alt="Residential Crawlspace Retrofit" width="412" height="427">
                                </picture>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-content-wrap">
                                    <h3 class="h3">Candy Sets</h3>
                                    <div class="text-content-wrap">
                                        <p>Our candy sets are the ultimate indulgence for any sweet lover. Each set is a
                                            carefully curated collection of our finest candies, offering an assortment
                                            of flavors and textures. Whether you're looking for a thoughtful gift or a
                                            way to sample our wide range of candies, our candy sets are the perfect
                                            choice.
                                        </p>
                                        <a href="{{ url('/candy-sets') }}">
                                            <button class="btn-nav product-check-btn" type="button">
                                                View Collection
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Residential Crawlspace END -->
                </div>
            </div>

        </div>
    </section><!-- Our Services END -->

    <!-- Our Process -->
    <section id="our-process" class="process-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>OUR <span class="text-primary underlined text-uppercase">Process</span></h1>
                    <div class="yell-sep mt-3 mb-5"></div>
                    In every step, from conceptualization to delivery, we uphold the highest standards of quality and
                    care. That’s our process, and that’s our promise to you - delivering sweetness, one confection at a
                    time.
                </div>
            </div>
            <div class="process-tab mt-5">
                <div class="d-flex align-items-start d-lg-block d-md-block d-none">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-1"
                                type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">
                            1 - Crafting the Perfect Recipe
                        </button>
                        <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2"
                                type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">
                            2 - Sourcing the Finest Ingredients
                            Audit
                        </button>
                        <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3"
                                type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">
                            3 - Artful Preparation
                            Review
                        </button>
                        <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4"
                                type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">
                            4 - Baking to Perfection
                        </button>
                        <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5"
                                type="button" role="tab" aria-controls="v-pills-5" aria-selected="false">
                            5 - Packaging and Delivery
                        </button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Design -->
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                             aria-labelledby="v-pills-1-tab">
                            <div class="step-content-wrap">
                                <div class="step-content p-relative">
                                    <div class="step-text-wrap p-relative z2">
                                        <p class="step-text">STEP 1</p>
                                        <h3 class="mb-3 h2">Crafting the Perfect Recipe</h3>
                                        Our journey begins in the heart of our culinary lab, where our pastry chefs are
                                        hard at work crafting recipes that balance tradition with innovative flavors.
                                        This is where the magic begins, as we blend ingredients and ideas to create a
                                        unique gustatory experience.
                                    </div>
                                </div>
                                <div class="step-image mt-4">
                                    <picture>
                                        <img src="{{Vite::asset('resources/images/our-process-1.png')}}"
                                             alt="HOMEOWNER ASSESSMENT">
                                    </picture>
                                </div>
                            </div>
                        </div><!-- Design END -->
                        <!-- Computer -->
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <div class="step-content-wrap">
                                <div class="step-content p-relative">
                                    <div class="step-text-wrap p-relative z2">
                                        <p class="step-text">STEP 2</p>
                                        <h3 class="mb-3 h2">Sourcing the Finest Ingredients</h3>
                                        From the purest vanilla to the finest chocolate, we go the extra mile to source
                                        the best ingredients from around the globe. Our commitment to quality means that
                                        we choose only the freshest, most delicious components for our confections.
                                    </div>
                                </div>
                                <div class="step-image mt-4">
                                    <picture>
                                        <img src="{{Vite::asset('resources/images/our-process-2.png')}}"
                                             alt="HOME ENERGY AUDIT">
                                    </picture>
                                </div>
                            </div>
                        </div><!-- Computer END -->
                        <!-- Written -->
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                            <div class="step-content-wrap">
                                <div class="step-content p-relative">
                                    <div class="step-text-wrap p-relative z2">
                                        <p class="step-text">STEP 3</p>
                                        <h3 class="mb-3 h2">Artful Preparation</h3>
                                        With a recipe in mind and the best ingredients at hand, our skilled artisans
                                        then set to work, crafting each pastry and sweet with meticulous attention to
                                        detail. It’s an art that requires passion, precision, and a love for the craft.
                                    </div>
                                </div>
                                <div class="step-image mt-4">
                                    <picture>
                                        <img
                                            src="{{Vite::asset('resources/images/our-process-3.png')}}"
                                            alt="ASSESSMENT REVIEW">
                                    </picture>
                                </div>
                            </div>
                        </div><!-- Written END -->
                        <!-- Contract -->
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                            <div class="step-content-wrap">
                                <div class="step-content p-relative">
                                    <div class="step-text-wrap p-relative z2">
                                        <p class="step-text">STEP 4</p>
                                        <h3 class="mb-3 h2">Baking to Perfection</h3>
                                        Each of our confections is baked to perfection in our state-of-the-art ovens,
                                        where time and temperature blend in a delicate dance to create pastries that are
                                        as pleasing to the eye as they are to the palate.
                                    </div>
                                </div>
                                <div class="step-image mt-4">
                                    <picture>
                                        <img src="{{Vite::asset('resources/images/our-process-4.png')}}"
                                             alt="PROPOSAL">
                                    </picture>
                                </div>
                            </div>
                        </div><!-- Contract END -->
                        <!-- Installation -->
                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                            <div class="step-content-wrap">
                                <div class="step-content p-relative">
                                    <div class="step-text-wrap p-relative z2">
                                        <p class="step-text">STEP 5</p>
                                        <h3 class="mb-3 h2">Packaging and Delivery</h3>
                                        Once cooled, our treats are carefully packaged to preserve their freshness and
                                        taste. Whether you're purchasing in-store or ordering online, we take every step
                                        to ensure that our sweets reach you in perfect condition, ready for you to savor
                                        and enjoy."
                                    </div>
                                </div>
                                <div class="step-image mt-4">
                                    <picture>
                                        <img src="{{Vite::asset('resources/images/our-process-5.png')}}"
                                             alt="SCHEDULE INSTALL">
                                    </picture>
                                </div>
                            </div>
                        </div><!-- Installation END -->
                    </div>
                </div>
            </div>
            <div class="process-accordion mt-5 d-none d-md-none d-sm-block">
                <div class="accordion" id="accordionProcess">
                    <div class="card">
                        <div class="card-header" id="headingOne-mobile">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#stepOne" aria-expanded="true" aria-controls="stepOne">
                                    <span class="step-num-acc">1 - </span>Crafting the Perfect Recipe
                                </button>
                            </h2>
                        </div>
                        <div id="stepOne" class="collapse show" aria-labelledby="headingOne-mobile"
                             data-bs-parent="#accordionProcess">
                            <div class="card-body">
                                <div class="step-content-wrap">
                                    <div class="step-content p-relative">
                                        <div class="step-text-wrap p-relative z2">
                                            <p class="step-text">STEP 1</p>
                                            <h3 class="mb-3">Crafting the Perfect Recipe</h3>
                                            Our journey begins in the heart of our culinary lab, where our pastry chefs
                                            are hard at work crafting recipes that balance tradition with innovative
                                            flavors. This is where the magic begins, as we blend ingredients and ideas
                                            to create a unique gustatory experience
                                        </div>
                                    </div>
                                    <div class="step-image mt-4">
                                        <picture>
                                            <img
                                                src="{{Vite::asset('resources/images/our-process-1.png')}}"
                                                alt="Homeowner Assessment">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo-mobile">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#stepTwo" aria-expanded="false" aria-controls="stepTwo">
                                    <span class="step-num-acc">2 - </span>Sourcing the Finest Ingredients
                                </button>
                            </h2>
                        </div>
                        <div id="stepTwo" class="collapse" aria-labelledby="headingTwo-mobile"
                             data-bs-parent="#accordionProcess">
                            <div class="card-body">
                                <div class="step-content-wrap">
                                    <div class="step-content p-relative">
                                        <div class="step-text-wrap p-relative z2">
                                            <p class="step-text">STEP 2</p>
                                            <h3 class="mb-3"> Sourcing the Finest Ingredients </h3>
                                            From the purest vanilla to the finest chocolate, we go the extra mile to
                                            source the best ingredients from around the globe. Our commitment to quality
                                            means that we choose only the freshest, most delicious components for our
                                            confections.
                                        </div>
                                    </div>
                                    <div class="step-image mt-4">
                                        <picture>
                                            <img
                                                src="{{Vite::asset('resources/images/our-process-2.png')}}"
                                                alt="Home Energy Audit">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree-mobile">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#stepThree" aria-expanded="false" aria-controls="stepThree">
                                    <span class="step-num-acc">3 - </span> Artful Preparation
                                </button>
                            </h2>
                        </div>
                        <div id="stepThree" class="collapse" aria-labelledby="headingThree-mobile"
                             data-bs-parent="#accordionProcess">
                            <div class="card-body">
                                <div class="step-content-wrap">
                                    <div class="step-content p-relative">
                                        <div class="step-text-wrap p-relative z2">
                                            <p class="step-text">STEP 3</p>
                                            <h3 class="mb-3">Artful Preparation</h3>
                                            With a recipe in mind and the best ingredients at hand, our skilled artisans
                                            then set to work, crafting each pastry and sweet with meticulous attention
                                            to detail. It’s an art that requires passion, precision, and a love for the
                                            craft.
                                        </div>
                                    </div>
                                    <div class="step-image mt-4">
                                        <picture>
                                            <img
                                                src="{{Vite::asset('resources/images/our-process-3.png')}}"
                                                alt="Assessment Review">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour-mobile">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#stepFour" aria-expanded="false" aria-controls="stepFour">
                                    <span class="step-num-acc">4 - </span>Baking to Perfection
                                </button>
                            </h2>
                        </div>
                        <div id="stepFour" class="collapse" aria-labelledby="headingFour-mobile"
                             data-bs-parent="#accordionProcess">
                            <div class="card-body">
                                <div class="step-content-wrap">
                                    <div class="step-content p-relative">
                                        <div class="step-text-wrap p-relative z2">
                                            <p class="step-text">STEP 4</p>
                                            <h3 class="mb-3"> Baking to Perfection </h3>
                                            Each of our confections is baked to perfection in our state-of-the-art
                                            ovens, where time and temperature blend in a delicate dance to create
                                            pastries that are as pleasing to the eye as they are to the palate.
                                        </div>
                                    </div>
                                    <div class="step-image mt-4">
                                        <picture>
                                            <img
                                                src="{{Vite::asset('resources/images/our-process-4.png')}}"
                                                alt="Proposal">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive-mobile">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#stepFive" aria-expanded="false" aria-controls="stepFive">
                                    <span class="step-num-acc">5 - </span>Packaging and Delivery
                                </button>
                            </h2>
                        </div>
                        <div id="stepFive" class="collapse" aria-labelledby="headingFive-mobile"
                             data-bs-parent="#accordionProcess">
                            <div class="card-body">
                                <div class="step-content-wrap">
                                    <div class="step-content p-relative">
                                        <div class="step-text-wrap p-relative z2">
                                            <p class="step-text">STEP 5</p>
                                            <h3 class="mb-3"> Packaging and Delivery </h3>
                                            Once cooled, our treats are carefully packaged to preserve their freshness
                                            and taste. Whether you're purchasing in-store or ordering online, we take
                                            every step to ensure that our sweets reach you in perfect condition, ready
                                            for you to savor and enjoy."
                                        </div>
                                    </div>
                                    <div class="step-image mt-4">
                                        <picture>
                                            <img
                                                src="{{Vite::asset('resources/images/our-process-5.png')}}"
                                                alt="Schedule Install">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Process END -->

    <section id="testimonials">
        <div class="container">
            <div class="row  d-flex flex-row align-items-center">
                <div class="col-md-6 text-white">
                    <h2 class="h2 lh1 mb-5 text-center">Sweet Words<br><span
                            class="underlined white">from Our Valued Customers</span>
                    </h2>
                    <p><em>Taste the Love in Every Review</em></p>
                </div>
                <div class="col-md-6">
                    <div class="slider text-center text-white">
                        <div class="slider-testimonial-item">
                            <div class="testimonial-cont">
                                <div class="testimonial-img">

                                </div>
                                <div class="testimonial-body">
                                    <p class="testimonial-content"> Choosing to indulge in their pastries is one of the
                                        best decisions I've ever made. The cakes are divine, the cookies are
                                        irresistible, and the chocolates are out of this world! The love and passion
                                        they put into their sweets is evident in every bite. </p>
                                    <p class="font-family-bold mb-0 h3 font-gillsans">John D.</p>
                                </div>
                            </div>
                        </div>

                        <div class="slider-testimonial-item">
                            <div class="testimonial-cont">
                                <div class="testimonial-img">
                                </div>
                                <div class="testimonial-body">
                                    <p class="testimonial-content">I've been a regular customer for over a year now, and
                                        I am continually impressed by their quality and creativity. From classic
                                        confections to innovative sweets, their treats never fail to brighten my
                                        day.</p>
                                    <p class="font-family-bold mb-0 h3 font-gillsans">Maria S.</p>
                                </div>
                            </div>
                        </div>

                        <div class="slider-testimonial-item">
                            <div class="testimonial-cont">
                                <div class="testimonial-img">
                                </div>
                                <div class="testimonial-body">
                                    <p class="testimonial-content">I ordered a custom cake for my daughter's birthday,
                                        and it was not only stunning but also incredibly delicious! They managed to turn
                                        my vision into a beautiful and tasty reality. Outstanding service!</p>
                                    <p class="font-family-bold mb-0 h3 font-gillsans">Sarah P.</p>
                                </div>
                            </div>
                        </div>

                        <div class="slider-testimonial-item">
                            <div class="testimonial-cont">
                                <div class="testimonial-img">
                                </div>
                                <div class="testimonial-body">
                                    <p class="testimonial-content">Every time I visit their store or order online, I am
                                        guaranteed a top-quality sweet experience. Their pastries are mouth-watering,
                                        and their service is always friendly and efficient. Highly recommended!</p>
                                    <p class="font-family-bold mb-0 h3 font-gillsans">Alex G.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-bree">
        <div class="container">
            <div class="row pt-0 pb-4">
                <div class="col-md-12 text-center">
                    <h2 class="h2 font-gillsans lh1 text-dark">
                        WHY<span class="text-primary underlined">Choose Us?</span>
                    </h2>
                </div>
            </div>
            <div class="row d-flex flex-row align-items-center">
                <div class="col-md-6">
                    <picture>
                        <img src="{{Vite::asset('resources/images/why-us-1.png')}}"
                             alt="CUTTiNG-EDGE ENERGY & PERFORMANCE SOLUTiONS Image"/>
                    </picture>
                </div>
                <div class="col-md-6 col-text">
                    <h2 class="h2 font-gillsans lh1 text-dark"><span>Uncompromising Quality</span></h2>
                    <p>We adhere to the highest standards in everything we do. From sourcing the finest ingredients to
                        meticulous preparation, our commitment to quality is unwavering. Each of our sweet treats is a
                        testament to our dedication to excellence, ensuring that you receive only the best.</p>
                </div>
            </div>
            <div class="row d-flex flex-row-reverse align-items-center">
                <div class="col-md-6">
                    <picture>
                        <img src="{{Vite::asset('resources/images/why-us-2.png')}}"
                             alt="iNNOVATiVE HOME HEALTH & COMFORT ASSESSMENT Image"/>
                    </picture>
                </div>
                <div class="col-md-6 col-text">
                    <h2 class="h2 font-gillsans lh1 text-dark"><span
                            class="pink-text underlined">Innovation and Tradition</span></h2>
                    <p>At our bakery, we marry the love for traditional confectionery with a penchant for innovation.
                        Our menu is a blend of timeless classics and contemporary treats, giving you a taste of the
                        familiar and the excitement of the new. Our inventive approach ensures a delightful surprise in
                        every bite.</p>
                </div>
            </div>
            <div class="row d-flex flex-row align-items-center">
                <div class="col-md-6">
                    <picture>
                        <img src="{{Vite::asset('resources/images/why-us-3.png')}}"
                             alt="WHITE GLOVE SERVICE & iNSTALLATiON Image"/>
                    </picture>
                </div>
                <div class="col-md-6 col-text">
                    <h2 class="h2 font-gillsans lh1 text-dark">Customer-Centric Service</h2>
                    <p>We believe in going above and beyond to serve our customers. Our team is always ready to assist
                        with personalized advice, special requests, or queries about our products. Whether you're buying
                        from our store or ordering online, we strive to provide a seamless, enjoyable experience, making
                        your sweet journey with us truly memorable.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq">
        <div class="container">
            <div class="row">
                <div class="cold-md-12">
                    <h2 class="lh1 mb-5 text-center h2">
                        Frequently Asked Questions</h2>
                    <!-- accordion start -->
                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-md-center" role="tab"
                                 id="heading-1">
                                <h3 class="mb-0 h5">
                                    What are your opening hours?
                                </h3>
                                <a data-bs-toggle="collapse"
                                   href="#collapse-1"
                                   aria-expanded="true"
                                   aria-controls="collapse-1"
                                   aria-label="Read more - Read less button">
                                    <i class="fas fa-caret-down colour-pink"></i>
                                </a>
                            </div>
                            <div id="collapse-1"
                                 class="collapse show"
                                 role="tabpanel"
                                 aria-labelledby="heading-1">
                                <div class="card-body">
                                    Our store is open from 9:00 AM to 9:00 PM, Monday to Sunday. For our online store,
                                    we're open 24/7! You can order your favorite treats anytime, anywhere.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-md-center" role="tab"
                                 id="heading-3">
                                <h3 class="mb-0 h5">
                                    How can I track my online order?
                                </h3>
                                <a data-bs-toggle="collapse"
                                   href="#collapse-3"
                                   aria-expanded="false"
                                   aria-controls="heading-3"
                                   aria-label="Read more - Read less button">
                                    <i class="fas fa-caret-down colour-pink"></i>
                                </a>
                            </div>
                            <div id="collapse-3"
                                 class="collapse"
                                 role="tabpanel"
                                 aria-labelledby="heading-3">
                                <div class="card-body">
                                    Once your order is placed, you'll receive a confirmation email with an information.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-md-center" role="tab"
                                 id="heading-5">
                                <h3 class="mb-0 h5">
                                    What are your delivery options?
                                </h3>
                                <a data-bs-toggle="collapse"
                                   href="#collapse-5"
                                   aria-expanded="false"
                                   aria-controls="heading-5"
                                   aria-label="Read more - Read less button">
                                    <i class="fas fa-caret-down colour-pink"></i>
                                </a>
                            </div>
                            <div id="collapse-5"
                                 class="collapse"
                                 role="tabpanel"
                                 aria-labelledby="heading-5">
                                <div class="card-body">
                                    We offer both store pickup and home delivery. During the checkout process, you can
                                    choose the option that best suits your needs.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-md-center" role="tab"
                                 id="heading-6">
                                <h3 class="mb-0 h5">
                                    I'm interested in working with you. How can I apply?
                                </h3>
                                <a data-bs-toggle="collapse"
                                   href="#collapse-6"
                                   aria-expanded="false"
                                   aria-controls="heading-6"
                                   aria-label="Read more - Read less button">
                                    <i class="fas fa-caret-down colour-pink"></i>
                                </a>
                            </div>
                            <div id="collapse-6"
                                 class="collapse"
                                 role="tabpanel"
                                 aria-labelledby="heading-6">
                                <div class="card-body">
                                    We're thrilled to hear that you're interested in joining our team. You can visit our
                                    <a href="/careers"><strong>Careers page</strong></a> to see the current job openings and apply. We're
                                    always looking for passionate individuals who love sweets as much as we do!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
