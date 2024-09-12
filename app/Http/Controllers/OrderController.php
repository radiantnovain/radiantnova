<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function OrderDetail($id)
    {
    $categories = Category::where('status','active')->get();
    $products = Product::where('status', 'active')->limit(4)->get();
    $products->each(function ($product) {
        $product->random_image = $product->randomImage();
    });
    $product = Product::findOrFail($id);
        return view("orderdetail",compact('categories','product',"products"));
    }

    public function Cart()
    {
    $categories = Category::where('status','active')->get();

        return view("cart",compact('categories'));
    }
}
