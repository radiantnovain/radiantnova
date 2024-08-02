<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('images/products'), $imageName);
                $product->images()->create(['image_path' => 'images/products/' . $imageName]);
            }
        }

        return redirect()->route('admin/product')->with('success', 'Product added successfully!');
    }
}
