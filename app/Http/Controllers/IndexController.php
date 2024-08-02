<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
public function Landingpage(){
    $categories = Category::where('status','active')->get();
    return view('home',compact("categories"));
}


}
