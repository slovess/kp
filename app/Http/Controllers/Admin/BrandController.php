<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $sortBy = request('sort_by', 'id');
        $sortOrder = request('sort_order', 'desc');
        
        $allowedSorts = ['id', 'title', 'created_at'];
        $sortBy = in_array($sortBy, $allowedSorts) ? $sortBy : 'id';
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'desc';

        $brands = Brand::orderBy($sortBy, $sortOrder)->paginate(15);
        $brands->appends(request()->query());
        
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:brands,title',
        ]);

        Brand::create($request->only('title'));

        return redirect()->route('admin.brands.index')->with('success', 'Бренд добавлен!');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:brands,title,' . $brand->id,
        ]);

        $brand->update($request->only('title'));

        return redirect()->route('admin.brands.index')->with('success', 'Бренд обновлен!');
    }

    public function destroy(Brand $brand)
    {
        if ($brand->good()->count() > 0) {
            return redirect()->route('admin.brands.index')->with('error', 'Нельзя удалить бренд, у которого есть товары!');
        }

        $brand->delete();
        return redirect()->route('admin.brands.index')->with('success', 'Бренд удален!');
    }
}
