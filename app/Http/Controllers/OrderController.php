<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\JsonStorage;


class OrderController extends Controller
{
    /**
     * Add item to session cart
     */
    public function add(Request $request)
    {
// Get current cart from session
        $cart = session()->get('cart', []);


// Push new item into cart array
        $cart[] = [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price
        ];


// Save updated cart back to session
        session()->put('cart', $cart);


        return redirect()->back();
    }


    /**
     * Show cart page
     */
    public function cart()
    {
        return view('orders.cart');
    }


    /**
     * Save order into orders.json
     */
    public function checkout(JsonStorage $storage)
    {
// Read existing orders
        $orders = $storage->read('orders');


// Add current cart as new order
        $orders[] = session('cart');


// Save updated orders list
        $storage->write('orders', $orders);


// Clear cart after checkout
        session()->forget('cart');


        return redirect('/')->with('success', 'Order saved successfully!');
    }
}
