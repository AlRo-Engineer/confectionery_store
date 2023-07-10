<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showCakes()
    {
        $categoryId = 1;
        $category = Category::find($categoryId);
        $products = Product::where('category_id', $categoryId)->get();
        return view('cakes', ['products' => $products, 'categoryName' => $category->name]);
    }

    public function showPastries()
    {
        $products = Product::where('category_id', 2)->get(); // id категории Pastries
        $categoryName = 'Pastries';
        return view('pastries', ['products' => $products, 'categoryName' => $categoryName]);
    }


    public function showCandyBars()
    {
        $categoryId = 3;
        $category = Category::find($categoryId);
        $products = Product::where('category_id', $categoryId)->get();
        return view('candy-bar', ['products' => $products, 'categoryName' => $category->name]);
    }

    public function showCandySets()
    {
        $categoryId = 4;
        $category = Category::find($categoryId);
        $products = Product::where('category_id', $categoryId)->get();
        return view('candy-set', ['products' => $products, 'categoryName' => $category->name]);
    }

}
