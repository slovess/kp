<?php

namespace App\Http\Controllers\Admin;

use App\Models\Good;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Location;
use App\Models\Material;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GoodController extends Controller
{
    public function index()
    {
        $perPage = request('per_page', 15); // По умолчанию 15
        $perPage = in_array($perPage, [10, 15, 25, 50]) ? $perPage : 15; // Валидация

        $goods = Good::with(['brand', 'category', 'location', 'material', 'color'])
            ->latest()
            ->paginate($perPage);

        // Сохраняем параметр per_page в ссылках пагинации
        $goods->appends(request()->query());

        return view('admin.goods.index', compact('goods'));

    }

    public function create()
    {
        return view('admin.goods.create', [
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'locations' => Location::all(),
            'materials' => Material::all(),
            'colors' => Color::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'size' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'material_id' => 'required|exists:materials,id',
            'color_id' => 'required|exists:colors,id',
        ]);

        $data['isPopular'] = $request->has('isPopular');
        $data['isPresence'] = $request->has('isPresence');
        if ($request->hasFile('image')) {

            $data['image'] = $request->file('image')->store('goods', 'public');
        }

        Good::create($data);
        return redirect()->route('admin.goods.index')->with('success', 'Товар добавлен!');
    }

    public function edit(Good $good)
    {
        return view('admin.goods.edit', [
            'good' => $good,
            'brands' => Brand::all(),
            'categories' => Category::all(),
            'locations' => Location::all(),
            'materials' => Material::all(),
            'colors' => Color::all(),
        ]);
    }

  public function update(Request $request, $id)
{
    $good = Good::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'size' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'brand_id' => 'required|exists:brands,id',
        'category_id' => 'required|exists:categories,id',
        'location_id' => 'required|exists:locations,id',
        'material_id' => 'required|exists:materials,id',
        'color_id' => 'required|exists:colors,id',
    ]);

    $good->name = $validated['name'];
    $good->description = $validated['description'] ?? null;
    $good->price = $validated['price'];
    $good->size = $validated['size'] ?? null;
    $good->brand_id = $validated['brand_id'] ?? null;
    $good->category_id = $validated['category_id'] ?? null;
    $good->location_id = $validated['location_id'] ?? null;
    $good->material_id = $validated['material_id'] ?? null;
    $good->color_id = $validated['color_id'] ?? null;
    $good->isPopular = $request->has('isPopular') ? 1 : 0;
    $good->isPresence = $request->has('isPresence') ? 1 : 0;

    if ($request->hasFile('image')) {
        if ($good->image) {
            Storage::disk('public')->delete($good->image);
        }

        $good->image = $request->file('image')->store('goods', 'public');
    }

    $good->save();

    return redirect()->route('admin.goods.index')->with('success', 'Товар обновлен!');
}

    public function destroy(Good $good)
    {
        if ($good->image) {
            Storage::disk('public')->delete($good->image);
        }

        $good->delete();

        return redirect()->route('admin.goods.index')->with('success', 'Товар удален!');
    }
}

