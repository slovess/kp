<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GoodsController extends Controller
{
    // // Показ списка товаров
    // public function index()
    // {
    //     $goods = Good::all();
    //     return view('goods.index');
    //     // compact('goods')
    // }


    // // Показ формы создания
    // public function create()
    // {
    //     return view('goods.create');
    // }

    // // Сохранение нового товара
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|max:255',
    //         'price' => 'required|numeric',
    //         'image' => 'image|mimes:jpeg,png,jpg|max:2048',
    //         'isPopular' => 'required'
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('photos', 'public');
    //         $validated['image'] = $path;
    //     }

    //     Good::create($validated);
    //     return redirect()->route('goods.index');
    // }

    // Показ конкретного товара
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


    // // Показ формы редактирования
    // public function edit(Good $good)
    // {
    //     return view('goods.edit', compact('good'));
    // }

    // // Обновление товара
    // public function update(Request $request, Good $good)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|max:255',
    //         'price' => 'required|numeric',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //         'isPopular' => 'nullable|boolean'
    //     ]);

    //     if ($request->hasFile('image')) {
    //         // Удаляем старое изображение
    //         Storage::delete($good->image);

    //         $path = $request->file('image')->store('goods', 'public');
    //         $validated['image'] = $path;
    //     }

    //     $good->update($validated);
    //     return redirect()->route('goods.index');
    // }

    // // Удаление товара
    // public function destroy(Good $good)
    // {
    //     Storage::delete($good->image);
    //     $good->delete();
    //     return redirect()->route('goods.index');
    // }
    
}
