@extends('theme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/orderdetail.css'); }} ">

<div class="product-detail-container">
    <div class="product-gallery">
        <img src="https://picsum.photos/400" alt="Product Name" class="main-image">
        <div class="thumbnail-images">
            <img src="https://picsum.photos/200" alt="Thumbnail 1">
            <img src="https://picsum.photos/200" alt="Thumbnail 2">
            <img src="https://picsum.photos/200" alt="Thumbnail 3">
        </div>
    </div>
    <div class="product-details">
        <h2>Product Name</h2>
        <p class="product-price">$19.99</p>
        <p class="product-description">Detailed description of the product goes here. It includes all features, specifications, and other relevant information.</p>
        <div class="buy-options">
            <button type="button" class="btn btn-primary">Add to Cart</button>
            <button type="button" class="btn btn-secondary">Buy Now</button>
        </div>
        <div class="product-features">
            <h3>Features</h3>
            <ul>
                <li>Feature 1</li>
                <li>Feature 2</li>
                <li>Feature 3</li>
                <li>Feature 4</li>
            </ul>
        </div>
    </div>
</div>

<div class="product-description-section">
    <h3>Product Description</h3>
    <p>Here you can provide a detailed product description, including its use cases, benefits, and any other relevant information that would help customers understand the product better.</p>
</div>

<div class="product-reviews">
    <h3>Customer Reviews</h3>
    <div class="review">
        <h4>Review Title</h4>
        <p>Review content goes here. This is a detailed review from a customer.</p>
        <p><strong>Rating:</strong> 5/5</p>
    </div>
</div>

<div class="related-products">
    <h3>Related Products</h3>
    <div class="related-product-item">
        <img src="https://picsum.photos/200" alt="Related Product 1">
        <p>Related Product 1</p>
        <p>$9.99</p>
    </div>
    <div class="related-product-item">
        <img src="https://picsum.photos/200" alt="Related Product 2">
        <p>Related Product 2</p>
        <p>$14.99</p>
    </div>
</div>

<div class="product-specifications">
    <h3>Technical Specifications</h3>
    <table>
        <tr>
            <th>Specification</th>
            <th>Details</th>
        </tr>
        <tr>
            <td>Specification 1</td>
            <td>Details of Specification 1</td>
        </tr>
        <tr>
            <td>Specification 2</td>
            <td>Details of Specification 2</td>
        </tr>
    </table>
</div>
@endsection
