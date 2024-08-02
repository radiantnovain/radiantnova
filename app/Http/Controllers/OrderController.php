<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function OrderDetail()
    {
    $categories = Category::where('status','active')->get();

        return view("orderdetail",compact('categories'));
    }

    public function Cart()
    {
    $categories = Category::where('status','active')->get();

        return view("cart",compact('categories'));
    }
}
