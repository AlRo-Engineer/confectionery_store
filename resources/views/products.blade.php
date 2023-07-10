@extends('layouts.base-layout')

@section('content')

    <section class="background-black offset-top-menu"></section>

    <section id="products" class="product">
        <div class="container">
            <h2 class="mb-5 mt-5 text-center text-uppercase">{{ $categoryName }}</h2>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p><strong>Price: </strong>{{ $product->price }}</p>
                                <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary add-to-cart" data-id="{{ $product->id }}">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="/cart" class="btn btn-primary m-5">Go to Cart</a>
        </div>
    </section>


@stop
