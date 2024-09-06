@extends('admin/admintheme')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/admincategory.css'); }}">

<div class="product-container">
   
    <div class="product-table">
        <table>
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Product Name</th>
                    <th>Product Amount</th>
                    <th>Order City</th>
                    <th>Order Date</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gaming Laptop</td>
                    <td>$1200</td>
                    <td>New York</td>
                    <td>2024-09-01</td>
                    <td><button onclick="showDetails(1)"><i class="fas fa-eye"></i></button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Wireless Mouse</td>
                    <td>$50</td>
                    <td>Los Angeles</td>
                    <td>2024-09-03</td>
                    <td><button onclick="showDetails(2)"><i class="fas fa-eye"></i></button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Smartphone</td>
                    <td>$800</td>
                    <td>Chicago</td>
                    <td>2024-09-02</td>
                    <td><button onclick="showDetails(3)"><i class="fas fa-eye"></i></button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bluetooth Headphones</td>
                    <td>$150</td>
                    <td>Houston</td>
                    <td>2024-09-04</td>
                    <td><button onclick="showDetails(4)"><i class="fas fa-eye"></i></button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Smartwatch</td>
                    <td>$200</td>
                    <td>San Francisco</td>
                    <td>2024-09-05</td>
                    <td><button onclick="showDetails(5)"><i class="fas fa-eye"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Structure -->
<div id="detailsModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Order Details</h2>
        <div id="modalDetailsContent">
            <!-- Dynamic content will be added here -->
        </div>
    </div>
</div>

<script>
// Product data for the details modal
const productDetails = {
    1: {
        name: 'Gaming Laptop',
        amount: '$1200',
        city: 'New York',
        date: '2024-09-01',
        additional: 'Processor: Intel i7, RAM: 16GB, Storage: 1TB SSD'
    },
    2: {
        name: 'Wireless Mouse',
        amount: '$50',
        city: 'Los Angeles',
        date: '2024-09-03',
        additional: 'Ergonomic design, 2.4GHz wireless technology'
    },
    3: {
        name: 'Smartphone',
        amount: '$800',
        city: 'Chicago',
        date: '2024-09-02',
        additional: 'Screen: 6.5 inch OLED, Battery: 4000mAh, 5G compatible'
    },
    4: {
        name: 'Bluetooth Headphones',
        amount: '$150',
        city: 'Houston',
        date: '2024-09-04',
        additional: 'Noise-cancelling, 20 hours battery life, Bluetooth 5.0'
    },
    5: {
        name: 'Smartwatch',
        amount: '$200',
        city: 'San Francisco',
        date: '2024-09-05',
        additional: 'Heart-rate monitor, GPS, Water-resistant'
    }
};

// Get the modal
var detailsModal = document.getElementById("detailsModal");

// Get the <span> element that closes the modal
var closeModal = detailsModal.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
closeModal.onclick = function() {
    detailsModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == detailsModal) {
        detailsModal.style.display = "none";
    }
}

// Function to show details in the modal
function showDetails(id) {
    let details = productDetails[id];
    let modalContent = `
        <p><strong>Product Name:</strong> ${details.name}</p>
        <p><strong>Product Amount:</strong> ${details.amount}</p>
        <p><strong>Order City:</strong> ${details.city}</p>
        <p><strong>Order Date:</strong> ${details.date}</p>
        <p><strong>Additional Info:</strong> ${details.additional}</p>
    `;
    document.getElementById('modalDetailsContent').innerHTML = modalContent;
    detailsModal.style.display = "block";
}

</script>

@endsection
