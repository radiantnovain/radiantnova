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
        <a href="{{ route('admin.product.add') }}"> <button>Add Product</button></a>
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
           
            @if($product->count() > 0)
            <tbody>
                @foreach($product as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', $item->id) }}">
                            <button>Edit</button>
                        </a>
                        <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <!-- Additional rows will be dynamically added -->
            </tbody>
        
@endif
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
