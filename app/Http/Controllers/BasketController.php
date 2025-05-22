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


        $cartItems = Basket::with('good')
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



    public function destroy($id)
    {
        $item = Basket::findOrFail($id);

        // Проверка, что товар принадлежит текущему пользователю
        if ($item->user_id != auth()->id()) {
            abort(403);
        }

        $item->delete();

        return back()->with('success', 'Товар удалён из корзины');
    }
}
