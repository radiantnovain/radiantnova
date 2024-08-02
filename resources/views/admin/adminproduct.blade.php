@extends('admin/admintheme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/adminproducts.css') }}">

<div class="product-container">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
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
<style>
     .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        position: relative;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        display: flex;
        align-items: center;
    }

    .alert-success .close {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #155724;
        cursor: pointer;
        font-size: 20px;
    }

    .alert-success .icon {
        margin-right: 10px;
        font-size: 20px;
    }
</style>
@endsection
