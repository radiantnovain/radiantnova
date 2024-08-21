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

}
