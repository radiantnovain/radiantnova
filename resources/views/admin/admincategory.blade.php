@extends('admin/admintheme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/admincategory.css'); }}">

<div class="category-container">
    <div class="category-header">
        <button id="addCategoryBtn">Add Category</button>
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
            <tbody id="categoryTableBody">
                <!-- Dynamic rows will be added here -->
            </tbody>
        </table>
    </div>
</div>

<!-- Add Modal Structure -->
<div id="addCategoryModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add Category</h2>
        <form id="addCategoryForm" enctype="multipart/form-data">
            @csrf
            <label for="categoryImage">Category Image</label>
            <input type="file" id="categoryImage" name="categoryImage" accept="image/*" required>
            
            <label for="categoryName">Category Name</label>
            <input type="text" id="categoryName" name="categoryName" required>
            
            <label for="categoryDescription">Category Description</label>
            <textarea id="categoryDescription" name="categoryDescription" required></textarea>
            
            <label for="categoryStatus">Status</label>
            <select id="categoryStatus" name="categoryStatus" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            
            <button type="submit">Add Category</button>
        </form>
    </div>
</div>

<!-- Edit Modal Structure -->
<div id="editCategoryModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit Category</h2>
        <form id="editCategoryForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="editCategoryId" name="id">
            <label for="editCategoryImage">Category Image</label>
            <input type="file" id="editCategoryImage" name="categoryImage" accept="image/*">
            
            <label for="editCategoryName">Category Name</label>
            <input type="text" id="editCategoryName" name="categoryName" required>
            
            <label for="editCategoryDescription">Category Description</label>
            <textarea id="editCategoryDescription" name="categoryDescription" required></textarea>
            
            <label for="editCategoryStatus">Status</label>
            <select id="editCategoryStatus" name="categoryStatus" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            
            <button type="submit">Update Category</button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modals
    var addModal = document.getElementById("addCategoryModal");
    var editModal = document.getElementById("editCategoryModal");

    // Get the buttons that open the modals
    var addBtn = document.getElementById("addCategoryBtn");

    // Get the <span> elements that close the modals
    var addClose = addModal.getElementsByClassName("close")[0];
    var editClose = editModal.getElementsByClassName("close")[0];

    // When the user clicks the buttons, open the modals 
    addBtn.onclick = function() {
        addModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modals
    addClose.onclick = function() {
        addModal.style.display = "none";
    }
    editClose.onclick = function() {
        editModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modals, close it
    window.onclick = function(event) {
        if (event.target == addModal) {
            addModal.style.display = "none";
        } else if (event.target == editModal) {
            editModal.style.display = "none";
        }
    }

    // Form submission for adding category
    document.getElementById('addCategoryForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        let formData = new FormData(this);
        
        fetch("{{ route('admin.categories.store') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showAlert(data.success, 'success');
                addModal.style.display = "none";
                loadCategories();
            }
        })
        .catch(error => console.error('Error:', error));
    });

    // Form submission for editing category
    document.getElementById('editCategoryForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);
        let id = document.getElementById('editCategoryId').value;

        fetch(`/admin/categories/update/${id}`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showAlert(data.success, 'success');
                editModal.style.display = "none";
                loadCategories();
            }
        })
        .catch(error => console.error('Error:', error));
    });

    // Function to load categories
    function loadCategories() {
        fetch("{{ route('admin.categories.list') }}")
        .then(response => response.json())
        .then(data => {
            let tableBody = document.getElementById('categoryTableBody');
            tableBody.innerHTML = '';
            data.forEach(category => {
                let row = `
                    <tr>
                        <td><img src="/images/${category.image}" alt="Category Image" width="100"></td>
                        <td>${category.name}</td>
                        <td>${category.description}</td>
                        <td>${category.status}</td>
                        <td>
                            <button onclick="editCategory(${category.id})">Edit</button>
                            <button onclick="deleteCategory(${category.id})">Delete</button>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        })
        .catch(error => console.error('Error:', error));
    }

    // Function to edit category
    window.editCategory = function(id) {
        fetch(`/admin/categories/list`)
        .then(response => response.json())
        .then(data => {
            let category = data.find(cat => cat.id == id);
            document.getElementById('editCategoryId').value = category.id;
            document.getElementById('editCategoryName').value = category.name;
            document.getElementById('editCategoryDescription').value = category.description;
            document.getElementById('editCategoryStatus').value = category.status;
            editModal.style.display = "block";
        })
        .catch(error => console.error('Error:', error));
    };

    // Function to delete category
    window.deleteCategory = function(id) {
        if (confirm('Are you sure you want to delete this category?')) {
            fetch(`/admin/categories/delete/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert(data.success, 'success');
                    loadCategories();
                }
            })
            .catch(error => console.error('Error:', error));
        }
    };

    // Initial load
    loadCategories();
});

// Function to show alert
function showAlert(message, type) {
    const alertBox = document.createElement('div');
    alertBox.className = `alert ${type}`;
    alertBox.innerText = message;
    document.body.appendChild(alertBox);

    setTimeout(() => {
        alertBox.remove();
    }, 3000);
}
</script>

@endsection
