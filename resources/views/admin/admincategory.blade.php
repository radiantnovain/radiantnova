@extends('admin/admintheme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/admincategory.css'); }}">

<div class="category-container">
    <div class="category-header">
        <button>Add Category</button>
    </div>
    <div class="category-table">
    <table>
    <thead>
        <tr>
            <th>Category Image</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Sample row, replace with dynamic data -->
        <tr>
            <td><img src="https://picsum.photos/200" alt="Category Image" width="100"></td>
            <td>Category 1</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
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