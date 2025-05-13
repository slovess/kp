<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Метод для показа всех категорий с изображениями
    public function index()
    {
        // Получаем все категории из базы
        $categories = Category::all();
        
        // Передаем в представление
        return view('categories.index', compact('categories'));
    }

    // Метод для показа одной категории
    public function show($id)
    {
        // Находим категорию по ID
        $category = Category::findOrFail($id);
        
        // Получаем товары этой категории (если нужно)
        $goods = $category->goods;
        
        return view('categories.show', compact('category', 'goods'));
    }
}