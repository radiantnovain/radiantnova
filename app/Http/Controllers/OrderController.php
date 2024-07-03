<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function OrderDetail()
    {
        return view("orderdetail");
    }

    public function Cart()
    {
        return view("cart");
    }
}
