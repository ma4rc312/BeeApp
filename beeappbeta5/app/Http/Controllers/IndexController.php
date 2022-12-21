<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function index(){ $sites = Site::all(); return view('dashboard',compact('sites')); }
    public function index(){ 
        $products = Product::all(); 
        $categories = Category::all(); 
        return view('dashboard',compact('products','categories')); 
    }
}
