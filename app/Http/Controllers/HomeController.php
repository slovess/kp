<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Good;

class HomeController extends Controller
{

public function index()
{
    $categories = Category::all();
    $popularGoods = Good::where('isPopular', true)->take(5)->get();

    return view('index', compact('categories', 'popularGoods'));
}
}
