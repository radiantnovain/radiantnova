@extends('admin/admintheme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/adminaddproduct.css') }}">
<form action="/action_page.php" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br>
    <label for="status">Status:</label><br>
    <input type="text" id="status" name="status" required><br>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" style="height:200px" required></textarea><br>
    <label for="category">Category:</label><br>
    <input type="text" id="category" name="category" required><br>
    <label for="images">Images:</label><br>
    <div class="file-uploader" id="fileUploader">
    <input type="file" id="imagesData" name="images[]" multiple accept="image/*">
        <span>Add Images +</span>
    </div>
    <div id="preview"></div>
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price" required><br><br>
    <button type="submit">Add Item</button>
</form>

<script src="{{ URL::asset('js/admin/multi-image-upload.js') }}"></script>
<script>
 document.addEventListener('DOMContentLoaded', function () {
    const fileUploader = document.getElementById('fileUploader');
    const fileInput = document.getElementById('imagesData');
    const preview = document.getElementById('preview');
    
    // fileUploader.addEventListener('click', () => {
    //     fileInput.click();
    // });

   

    fileInput.addEventListener('change', () => {
        console.log(fileInput)
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
