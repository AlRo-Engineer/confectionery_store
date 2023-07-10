@extends('layouts.base-layout')

@section('content')

    <section class="background-black offset-top-menu"></section>

    <section id="checkout" class="product">
        <div class="container">
            <h2 class="mb-5 mt-5 text-center">Your Cart</h2>
            <div class="row">
            </div>
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <ul class="mb-4">
                    @foreach($cartItems as $item)
                        <li>
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p><strong>Price: </strong>{{ $item['price'] }}</p>
                        </li>
                    @endforeach
                </ul>
                <div class="form-group">
                    <label for="guest_info">Guest Information:</label>
                    <input type="text" name="guest_info" id="guest_info" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </form>

        </div>
    </section>



@stop

