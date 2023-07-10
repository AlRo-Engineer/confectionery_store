@extends('layouts.base-layout')

@section('content')
    <h1>Order Submitted</h1>
    <p>Thank you for your order!</p>
    <p>Order details:</p>
    <ul>
        <li>Order ID: {{ $orderDetails['order_id'] }}</li>
        <li>Guest Info: {{ $orderDetails['guest_info'] }}</li>
        <li>Items:</li>
        <ul>
            @foreach($orderDetails['items'] as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ul>
    </ul>
@stop
