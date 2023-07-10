@extends('layouts.base-layout')
<?php
$formUniqueID = bin2hex(random_bytes(10));
?>
@section('content')

    <section id="careers-hero" class="site-page-banner d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-7 text-white">
                    <h1 class="text-uppercase">Careers</h1>
                    <p><strong>Looking for a new exciting life change?</strong></p>
                    <div class="yell-sep mt-4 mb-4"></div>
                    <p>We are looking for people who fit our company values and ethics.
                        Feel free to send us your information</p>
                </div>
                <div class="col-md-5 text-center">
                    <form
                        action="{{url('/')}}"
                        method="POST"
                        class="careers-form"
                        id="{{$formUniqueID}}"
                        name="{{$formUniqueID}}"
                    >
                        @csrf

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="h2">Join Our Talent Community!</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name"></label>
                                <input required name="fname" type="text" id="name" class="form-control"
                                       placeholder="Name"/>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email"></label>
                                <input required name="email" type="email" id="email" class="form-control"
                                       placeholder="Email"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="phone"></label>
                                <input required name="phone" type="text" id="phone" class="form-control usa-phone"
                                       placeholder="Phone Number"/>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="info" class="d-block font-weight-bold">About you...</label>
                                <input name="comments" type="text" id="info" class="form-control"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-check mt-2">
                                <input type="checkbox" class="form-check-input" id="signup">
                                <label class="form-check-label d-block" for="signup">Sign up for our newsletter</label>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn-nav product-check-btn w-100">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- Hero Banner END -->

@stop
