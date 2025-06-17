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
    $userId = Auth::id();
    $goodsId = $request->input('goods_id');

    $existingItem = Basket::where('user_id', $userId)
        ->where('goods_id', $goodsId)
        ->first();

    if ($existingItem) {
        return redirect()->back()->with('error', 'Этот товар уже в корзине');
    }

    Basket::create([
        'user_id' => $userId,
        'goods_id' => $goodsId,
        'quantity' => 1,
    ]);

    return redirect()->back()->with('success', 'Товар добавлен в корзину');
}


public function increase(Good $item)
{
    if ($item->quantity < $item->good->quantity) {
        $item->increment('quantity');
        return response()->json(['success' => true]);
    }
    
    return response()->json([
        'success' => false,
        'item_id' => $item->id
    ]);
}

public function decrease(Good $item)
{
    if ($item->quantity > 1) {
        $item->decrement('quantity');
        return response()->json(['success' => true]);
    }
    
    return response()->json(['success' => true]);
}

    public function destroy($id)
    {
        $item = Basket::findOrFail($id);

        
        if ($item->user_id != auth()->id()) {
            abort(403);
        }

        $item->delete();

        return back()->with('success', 'Товар удалён из корзины');
    }
    public function update(Request $request, Basket $cart)
{
    $action = $request->input('action');
    
    if ($action === 'increase') {
        $cart->increment('quantity');
    } elseif ($action === 'decrease') {
        if ($cart->quantity > 1) {
            $cart->decrement('quantity');
        } else {
            $cart->delete();
        }
    }
    
    return back()->with('success', 'Количество обновлено');
}
}
