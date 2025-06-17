<?php

namespace App\Http\Controllers\Admin;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{
    public function index()
    {
        $sortBy = request('sort_by', 'id');
        $sortOrder = request('sort_order', 'desc');

        // Validate sort parameters
        $allowedSorts = ['id', 'title', 'created_at'];
        $sortBy = in_array($sortBy, $allowedSorts) ? $sortBy : 'id';
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'desc';

        // Используем withCount для подсчета товаров
        $materials = Material::withCount('goods')
            ->orderBy($sortBy, $sortOrder)
            ->paginate(15);

        $materials->appends(request()->query());

        return view('admin.materials.index', compact('materials'));
    }

    public function create()
    {
        return view('admin.materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:materials,title',
        ]);

        Material::create($request->only('title'));

        return redirect()->route('admin.materials.index')->with('success', 'Материал добавлен!');
    }

    public function edit(Material $material)
    {
        return view('admin.materials.edit', compact('material'));
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:materials,title,' . $material->id,
        ]);

        $material->update($request->only('title'));

        return redirect()->route('admin.materials.index')->with('success', 'Материал обновлен!');
    }

    public function destroy(Material $material)
    {
        // Проверяем количество товаров через withCount
        $material->loadCount('goods');

        if ($material->goods_count > 0) {
            return redirect()->route('admin.materials.index')->with('error', 'Нельзя удалить материал, у которого есть товары!');
        }

        $material->delete();
        return redirect()->route('admin.materials.index')->with('success', 'Материал удален!');
    }
}
