<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Support\Facades\Auth;


class GoodsController extends Controller
{
   
public function show($id)
{
    $good = Good::findOrFail($id);
    $user = Auth::user();
    $userId = $user ? $user->id : null;

    $inCart = false;
    if ($userId) {
        $inCart = \App\Models\Basket::where('user_id', $userId)
            ->where('goods_id', $good->id)
            ->exists();
    }

    $popularGoods = Good::where('isPopular', true)
        ->where('id', '!=', $good->id)
        ->inRandomOrder()
        ->take(5)
        ->get();

    return view('goods.show', compact('good', 'popularGoods', 'userId', 'inCart'));
}


   
    
}
