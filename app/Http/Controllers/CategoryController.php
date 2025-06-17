<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{

    public function index()
    {
   
        $categories = Category::all(); 
        return view('categories.index', compact('categories'));
        
    }

  
    public function show($id)
    {

        $category = Category::findOrFail($id);
        $goods = $category->goods;
        

        return view('categories.show', compact('category', 'goods'));
    }
}
