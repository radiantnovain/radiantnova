<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }
    public function admindashboard()
    {
        return view('admin/admindashboard');
    }

    public function admincategory()
    {
        return view('admin/admincategory');
    }

    public function adminproduct()
    {
        return view('admin/adminproduct');
    }

    public function adminaddproduct()
    {
        return view('admin/adminaddproduct');
    }
}
