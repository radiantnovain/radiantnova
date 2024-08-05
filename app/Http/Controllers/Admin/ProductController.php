<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class ProductController extends Controller
{
    // Existing store method...
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|string|max:255',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
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
    public function edit($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $categories = Category::all();
        return view('admin.editproduct', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        try {
            $product = Product::findOrFail($id);
            $product->title = $request->title;
            $product->status = $request->status;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            $product->save();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '-' . $image->getClientOriginalName();
                    $image->move(public_path('images/products'), $imageName);
                    $product->images()->create(['image_path' => 'images/products/' . $imageName]);
                }
            }

            return redirect()->route('admin/product')->with('success', 'Product updated successfully!');
        } catch (Exception $e) {
            Log::error('Error updating product: ' . $e->getMessage());
            return redirect()->route('admin/product')->with('success', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('admin/product')->with('success', 'Product deleted successfully!');
        } catch (Exception $e) {
            Log::error('Error deleting product: ' . $e->getMessage());
            return redirect()->route('admin/product')->with('success', $e->getMessage());
        }
    }
}
