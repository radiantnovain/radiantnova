<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin/dashboard');
        }
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

        $product = Product::with('category')->get(); // Fetches the first product with its category
    
        return view('admin/adminproduct', ['product' => $product]);
    }

    public function adminaddproduct()
    {
        $categories = Category::where('status','active')->get();
        return view('admin/adminaddproduct',compact('categories'));
    }

    public function categorystore(Request $request)
    {
        $request->validate([
            'categoryImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'required|string',
            'categoryStatus' => 'required|in:active,inactive',
        ]);

        $imageName = time().'.'.$request->categoryImage->extension();  
        $request->categoryImage->move(public_path('images'), $imageName);

        Category::create([
            'image' => $imageName,
            'name' => $request->categoryName,
            'description' => $request->categoryDescription,
            'status' => $request->categoryStatus,
        ]);

        return response()->json(['success' => 'Category added successfully.']);
    }

    public function list()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categoryImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'required|string',
            'categoryStatus' => 'required|in:active,inactive',
        ]);

        $category = Category::find($id);

        if ($request->hasFile('categoryImage')) {
            $imageName = time().'.'.$request->categoryImage->extension();  
            $request->categoryImage->move(public_path('images'), $imageName);
            // Delete old image
            if ($category->image) {
                Storage::delete(public_path('images/'.$category->image));
            }
            $category->image = $imageName;
        }

        $category->name = $request->categoryName;
        $category->description = $request->categoryDescription;
        $category->status = $request->categoryStatus;

        $category->save();

        return response()->json(['success' => 'Category updated successfully.']);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->image) {
            Storage::delete(public_path('images/'.$category->image));
        }
        $category->delete();
        return response()->json(['success' => 'Category deleted successfully.']);
    }
}
