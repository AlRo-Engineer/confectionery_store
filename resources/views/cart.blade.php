@extends('layouts.base-layout')

@section('content')

    <section class="background-black offset-top-menu"></section>

    <section id="cart" class="product">
        <div class="container">
            <h2 class="mb-5 mt-5 text-center">Your Cart</h2>
            <div class="row">
                @foreach($cartItems as $index => $item)
                    <ul>
                        <li>
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p><strong>Price: </strong>{{ $item['price'] }}</p>
                            <a href="{{ route('remove.from.cart', $item['id']) }}" class="btn btn-danger">Remove from Cart</a>

                        </li>
                    </ul>
                @endforeach

            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h4>Total Cost: ${{ $totalCost }}</h4>
                </div>
            </div>
            <a href="{{ route('checkout.show') }}" class="btn btn-primary m-5">Proceed to Checkout</a>

            <a href="/#our-products" class="btn btn-secondary m-5">back to our products</a>
        </div>
    </section>

@stop
