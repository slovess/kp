<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{

    public function index()
    {


        $cartItems = Basket::with('goods_id')
            ->where('user_id', Auth::id())
            ->get();

        return view('cart.index', [
            'cartItems' => $cartItems,

        ]);
    }


    public function store(Request $request)
    {
        $data = $request->all();

        Basket::create($data);

        // $cartItem = Basket::where('user_id', Auth::id())
        //     ->where('product_id', $request->product_id)
        //     ->first();

        // if ($cartItem) {
        //     $cartItem->increment('quantity');
        // } 
        return redirect()->back()->with('success', 'Товар добавлен в корзину');
    }



    public function destroy(Basket $basket)
    {
        $basket->delete();
        return redirect()->back()->with('success', 'Товар удален из корзины');
    }
}
