<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use App\Models\Brand;
use App\Models\Color;

class CatalogController extends Controller
{
    public function index()
    {
        // Получаем все товары с пагинацией и загрузкой связанных моделей
        $products = Good::with('color')->paginate(10);
        
        // Получаем все бренды для фильтра
        $brands = Brand::all();
        
        // Получаем все цвета для фильтра
        $colors = Color::all();
        
        // Получаем минимальную и максимальную цену для слайдера
        $minPrice = Good::min('price') ?? 0;
        $maxPrice = Good::max('price') ?? 200000;
        
        return view('catalog.index', compact('products', 'brands', 'colors', 'minPrice', 'maxPrice'));
    }
    
    // Метод для AJAX-фильтрации (если нужен)
    public function filter(Request $request)
    {
        $query = Good::with('color');
        
        // Фильтр по брендам
        if ($request->has('brands') && !empty($request->brands)) {
            $query->whereIn('brand', $request->brands);
        }
        
        // Фильтр по цветам
        if ($request->has('colors') && !empty($request->colors)) {
            $query->whereHas('color', function($q) use ($request) {
                $q->whereIn('title', $request->colors);
            });
        }
        
        // Фильтр по цене
        if ($request->has('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        
        if ($request->has('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }
        
        $products = $query->paginate(12);
        
        if ($request->ajax()) {
            return response()->json([
                'html' => view('partials.product_grid', compact('products'))->render(),
                'pagination' => view('partials.pagination', compact('products'))->render(),
            ]);
        }
        
        $brands = Brand::all();
        $colors = Color::all();
        $minPrice = Good::min('price') ?? 0;
        $maxPrice = Good::max('price') ?? 200000;
        
        return view('catalog', compact('products', 'brands', 'colors', 'minPrice', 'maxPrice'));
    }
}