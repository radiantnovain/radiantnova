@extends('admin/admintheme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/adminaddproduct.css') }}">

<form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="title">Product Name:</label><br>
    <input type="text" id="title" name="title" value="{{ $product->title }}" required><br>
    <label for="status">Status:</label><br>
    <select class="status" name="status">
        <option value="active" {{ $product->status === 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $product->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select><br>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" style="height:200px" required>{{ $product->description }}</textarea><br>
    <label for="category">Category:</label><br>
    <select id="category" name="category_id" required>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select><br>
    <label for="images">Images:</label><br>
    <div class="file-uploader" id="fileUploader">
        <input type="file" id="imagesData" name="images[]" multiple accept="image/*">
        <span>Add Images +</span>
    </div>
    <div id="preview"></div>
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price" value="{{ $product->price }}" required><br><br>
    <button type="submit">Update Item</button>
</form>

<script src="{{ URL::asset('js/admin/multi-image-upload.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileUploader = document.getElementById('fileUploader');
        const fileInput = document.getElementById('imagesData');
        const preview = document.getElementById('preview');

        fileInput.addEventListener('change', () => {
            preview.innerHTML = '';
            for (const file of fileInput.files) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    preview.innerHTML += `<img src="${e.target.result}" alt="Image Preview">`;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection
