<?php

namespace App\Http\Controllers;

use App\Mail\OrderSubmitted;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $cartItems = session()->get('cart', []);
        $cartItems[] = ['id' => $product->id, 'name' => $product->name, 'price' => $product->price];
        session()->put('cart', $cartItems);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        $cartItems = session('cart', []);
        $products = Product::whereIn('id', array_column($cartItems, 'id'))->get();
        $cartItems = $products->keyBy('id')->toArray();

        $totalCost = 0;
        foreach ($cartItems as $item) {
            $totalCost += $item['price'];
        }

        return view('cart', ['cartItems' => $cartItems, 'totalCost' => $totalCost]);
    }

    public function removeFromCart(Request $request, $id)
    {
        $cartItems = session()->get('cart', []);

        foreach ($cartItems as $index => $cartItem) {
            if ($cartItem['id'] == $id) {
                unset($cartItems[$index]);
                session()->put('cart', $cartItems);
                return redirect()->route('cart.show')->with('success', 'Item removed from cart');
            }
        }

        return redirect()->route('cart.show')->with('error', 'Item not found in cart');
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'guest_info' => 'required',
        ]);

        $order = new Order;
        $order->guest_info = $request->guest_info;
        $order->status = 'processing';
        $order->save();

        $cartItems = session('cart', []);
        $products = Product::whereIn('id', array_column($cartItems, 'id'))->get();

        foreach ($products as $product) {
            $orderItem = new OrderItem;
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product->id;
            $orderItem->save();
        }

        session()->forget('cart');

        $totalCost = $products->sum('price');

        $adminEmail = 'fastova.engineer@gmail.com';
        $orderDetails = [
            'order_id' => $order->id,
            'guest_info' => $order->guest_info,
            'items' => $products,
            'totalCost' => $totalCost,
        ];
        Mail::to($adminEmail)->send(new OrderSubmitted($orderDetails));

        return redirect()->route('confirmation', ['orderId' => $order->id]);
    }


    public function showCheckoutForm()
    {
        $cartItems = session('cart', []);
        $products = Product::whereIn('id', array_column($cartItems, 'id'))->get();

        return view('checkout', ['cartItems' => $products]);
    }


    public function processCheckout(Request $request)
    {

        $order = new Order;
        $order->guest_info = $request->guest_info; // подставьте реальные данные из запроса
        $order->status = 'processing'; // или любой другой статус по умолчанию
        $order->save();

        $orderId = $order->id; // теперь у нас есть ID созданного заказа

        return redirect()->route('order/confirmation', ['orderId' => $orderId]);
    }

    public function orderConfirmation($orderId)
    {
        $order = Order::findOrFail($orderId);

        return view('confirmation', ['order' => $order]);

    }

    public function placeOrder(Request $request)
    {

        $order = new Order;
        $order->guest_info = $request->guest_info;
        $order->status = 'processing';
        $order->save();

        $orderId = $order->id;

        return redirect()->route('confirmation', ['orderId' => $orderId]);
    }
}
