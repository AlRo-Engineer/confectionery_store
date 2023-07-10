@extends('layouts.base-layout')

@section('content')

    <!-- About Us Banner -->

    <section class="background-black offset-top-menu"></section>

    <section id="about-us-banner" class="about-us-banner background-blue">
        <div class="container">
            <div class="row">
                <div class="text-white text-center">
                    <p class="banner-text">Meet Bree Van De Kampf - The Artisan Behind Our Sweet Creations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Banner END -->

    <!-- About Us Content -->

    <section id="about" class="about-main fullwidth-row">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-12 owner-photo-container text-center">
                    <picture>
                        <img src="{{Vite::asset('resources/images/meet-the-owner.webp')}}"
                             alt="owner">
                    </picture>
                </div>

                <div class="col-md-7 col-12 owner-text-container">

                    <div class="services-title about-title uppercase">
                        <h3>"Mastering the Art of Confectionery, One Treat at a Time"</h3>
                    </div>
                    <div class="about-us-text">
                        <span class="header">Bree Van De Kampf is not just our owner - she's the heart and soul of our confectionery delight. A renowned pastry chef, Bree's passion for crafting exquisite treats began at a tender age. Growing up in a family that cherished culinary traditions, she discovered her love for the kitchen, particularly the enchanting world of sweets. She pursued her passion by training at some of the most esteemed culinary institutions around the globe.
<br>
Bree believes that a good pastry tells a story. It's a harmonious symphony of taste, texture, and aroma that transports you to a world of pure indulgence. With every dessert she crafts, Bree weaves a unique tale of sweetness - a narrative that cherishes tradition but isn't afraid to flirt with innovation.
<br>
Over the years, Bree has honed her craft to perfection, specializing in a vast array of tantalizing confections. From timeless classics to exciting new creations, each piece is a testament to her commitment to quality, authenticity, and creativity.
<br>
Bree's passion for excellence extends beyond the kitchen. She insists on using only the finest ingredients, carefully sourced for their quality and sustainability. It's her firm belief that the quality of ingredients is what truly makes a dessert outstanding.
<br>
When you taste our sweets, you're tasting Bree's journey. You're experiencing her dedication to her craft, her love for quality ingredients, and her passion for creating joy through confectionery. So come, join us on this sweet adventure, as we continue to bring you the best of the baking world, curated and crafted by Bree Van De Kampf</span>
                    </div>
                    <a href="tel:1833-9343626" class="btn-pink button">Call (833) Bree</a>
                </div>

            </div>
        </div>

    </section>

    <!-- About Us Content END -->

    <section id="quote" class="quote">
        <picture>
            <img src="{{Vite::asset('resources/images/quotation-marks-left.webp')}}" alt="comma"
                 class="comma left"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="text-container">
                    <p class="text-white fs-4 fw-bold">Always treat your employees exactly as you want them to treat
                        your best customers.</p>
                    <div class="small-separator text-center"></div>
                    <p class="text-right text-white fs-5 fw-bold sm-text">STEPHEN R. COVEY</p>
                </div>
            </div>
        </div>
        <picture>
            <img src="{{Vite::asset('resources/images/quotation-marks-right.webp')}}" alt="comma"
                 class="comma right"/>
        </picture>
    </section>

@stop
