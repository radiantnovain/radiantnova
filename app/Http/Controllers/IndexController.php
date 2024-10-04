<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    // public function Landingpage(){
    //     $categories = Category::where('status','active')->get();
    //     $products = Product::where('status','active')->limit(4)->get();
    //     return view('home',compact("categories","products"));
    // }

    public function Landingpage()
    {
        $categories = Category::where('status', 'active')->get();
        $products = Product::where('status', 'active')->limit(4)->get();

        // Attach a random image to each product
        $products->each(function ($product) {
            $product->random_image = $product->randomImage();
        });

        return view('home', compact('categories', 'products'));
    }

    public function AllProduct()
    {
        $categories = Category::where('status', 'active')->get();
        $products = Product::where('status', 'active')->get();

        // Attach a random image to each product
        $products->each(function ($product) {
            $product->random_image = $product->randomImage();
        });
        $activeCategory = 'all';
        return view('allproduct', compact('categories', 'products','activeCategory'));
    }
    public function productByCategory($categoryName)
    {
        $categories = Category::where('status', 'active')->get();
        $category = Category::where('name', $categoryName)->firstOrFail();
        $products = Product::where('status', 'active')->where('category_id', $category->id)->get();
        $activeCategory = $categoryName;
        // Attach a random image to each product
        $products->each(function ($product) {
            $product->random_image = $product->randomImage();
        });

        return view('allproduct', compact('categories', 'products','activeCategory'));
    }
}
