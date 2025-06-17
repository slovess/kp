<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function index()
    {
        $sortBy = request('sort_by', 'id');
        $sortOrder = request('sort_order', 'desc');
        
        // Validate sort parameters
        $allowedSorts = ['id', 'title', 'isPopular', 'created_at'];
        $sortBy = in_array($sortBy, $allowedSorts) ? $sortBy : 'id';

        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'desc';

        $categories = Category::orderBy($sortBy, $sortOrder)->paginate(15);
        
        $categories->appends(request()->query());

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255|unique:categories,title',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'isPopular' => 'nullable|boolean',
        ]);

        $data['isPopular'] = $request->has('isPopular');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Категория добавлена!');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255|unique:categories,title,' . $category->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'isPopular' => 'nullable|boolean',
        ]);

        $data['isPopular'] = $request->has('isPopular');

        if ($request->hasFile('image')) {
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Категория обновлена!');
    }

    public function destroy(Category $category)
    {
        if ($category->goods()->count() > 0) {
            return redirect()->route('admin.categories.index')->with('error', 'Нельзя удалить категорию, у которой есть товары!');
        }

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Категория удалена!');
    }
}
