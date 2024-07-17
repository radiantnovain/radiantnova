@extends('admin/admintheme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/adminproducts.css') }}">

<div class="product-container">
    <div class="product-header">
       <a href="product/add"> <button>Add Product</button></a>
    </div>
    <div class="product-table">
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Category</th>
                    <th>Product Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample row, replace with dynamic data -->
                <tr>
                    <td>Product 1</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                    <td>Category A</td>
                    <td>₹ 50.00</td>
                    <td>
                        <select class="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <!-- Additional rows will be dynamically added -->
            </tbody>
        </table>
    </div>
</div>
@endsection
