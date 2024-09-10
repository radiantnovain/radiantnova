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
    $product = Product::findOrFail($id);
        return view("orderdetail",compact('categories','product'));
    }

    public function Cart()
    {
    $categories = Category::where('status','active')->get();

        return view("cart",compact('categories'));
    }
}
