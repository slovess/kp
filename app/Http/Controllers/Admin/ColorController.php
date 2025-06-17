<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    public function index()
    {
        $sortBy = request('sort_by', 'id');
        $sortOrder = request('sort_order', 'desc');
        
        // Validate sort parameters
        $allowedSorts = ['id', 'title', 'created_at'];
        $sortBy = in_array($sortBy, $allowedSorts) ? $sortBy : 'id';
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'desc';

        $colors = Color::orderBy($sortBy, $sortOrder)->paginate(15);
        $colors->appends(request()->query());
        
        return view('admin.colors.index', compact('colors'));
    }

    public function create()
    {
        return view('admin.colors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:colors,title',
        ]);

        Color::create($request->only('title'));

        return redirect()->route('admin.colors.index')->with('success', 'Цвет добавлен!');
    }

    public function edit(Color $color)
    {
        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, Color $color)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:colors,title,' . $color->id,
        ]);

        $color->update($request->only('title'));

        return redirect()->route('admin.colors.index')->with('success', 'Цвет обновлен!');
    }

    public function destroy(Color $color)
    {
        if ($color->good()->count() > 0) {
            return redirect()->route('admin.colors.index')->with('error', 'Нельзя удалить цвет, у которого есть товары!');
        }

        $color->delete();
        return redirect()->route('admin.colors.index')->with('success', 'Цвет удален!');
    }
}
