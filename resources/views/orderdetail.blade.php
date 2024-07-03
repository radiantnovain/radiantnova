@extends('theme2')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/orderdetail.css'); }} ">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css'); }} ">
<div class="detail-main-container">

    <div class="product-detail-container">
        <div class="product-gallery">
            <div class="main-image-container" id="mainImageContainer">
                <img src="https://picsum.photos/400" alt="Product Name" class="main-image" id="mainImage">
            </div>
            <div class="thumbnail-images">
                <img src="https://picsum.photos/200?image=1" alt="Thumbnail 1" class="thumbnail">
                <img src="https://picsum.photos/200?image=2" alt="Thumbnail 2" class="thumbnail">
                <img src="https://picsum.photos/200?image=3" alt="Thumbnail 3" class="thumbnail">
            </div>
        </div>

        <div class="product-details">
            <h2>Product Name</h2>
            <p class="product-price">$19.99</p>
            <span>Description</span><br/>
            <span class="product-description">A timeless design, with premium materials features as one of our most popular and iconic pieces. The dandy chair is perfect for any stylish living space with beech legs and lambskin leather upholstery.</span><br/>
            <ul style="list-style-type: circle;">
                <li>
                Premium material
                </li>
                <li>
                Premium material
                </li>
                <li>
                Premium material
                </li>
                <li>
                Premium material
                </li>
            </ul>
            <div class="buy-options">
        <div class="buy-options-p">
            <label for="quantity" class="buy-options-lable">Quantity :</label>
            <div class="quantity-controls">
                <button id="decrease" class="control-button">-</button>
                <input type="text" id="quantity" value="1" readonly>
                <button id="increase" class="control-button">+</button>
            </div>
        </div>
        <button class="add-to-cart" data-url="cart">Add to cart</button>
    </div>
        </div>
    </div>
    <div class="section section-detail">
        <span>
        You might also like
        </span>
    </div>
    <div class="trending-items detail">
        <div class="item-slider">
            <div class="item" data-url="order-detail">
                <div class="item-2">
                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <span>Product Name 1</span>
                            </div>
                        </div>

                        <p class="price">₹ 1000</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>
            </div>
            <div class="item" data-url="order-detail">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <span>Product Name 1</span>
                            </div>

                        </div>

                        <p class="price">₹ 1000</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>

            </div>
            <div class="item" data-url="order-detail">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <span>Product Name 1</span>
                            </div>

                        </div>

                        <p class="price">₹ 1000</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>

            </div>
            <div class="item" data-url="order-detail">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <span>Product Name 1</span>
                            </div>

                        </div>

                        <p class="price">₹ 1000</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="view-collection">
        <span>
            View Collection
        </span>
    </div>
    <div class="section">
        <span>
            What makes our brand different
        </span>
    </div>
    <section class="reasons-container">
        <div class="reason">
            <h3>Fast Delivery</h3>
            <p>Swift delivery service ensures your packages arrive quickly and reliably.</p>
        </div>
        <div class="reason">
            <h3>Made by true artisans</h3>
            <p>Crafted by true artisans, exemplifies exceptional skill and attention to detail.</p>
        </div>
        <div class="reason">
            <h3>Unbeatable prices</h3>
            <p>For our materials and quality you won't find better prices anywhere</p>
        </div>
        <div class="reason">
            <h3>Recycled packaging</h3>
            <p>We use 100% recycled packaging to ensure our footprint is more manageable</p>
        </div>
    </section>

    <div style="width: 100%;display: flex;justify-content: center;padding-top: 30px;">

        <div class="hrs"></div>
    </div>
    <div class="form">
        <div class="form-container">
            <div class="form-inner-container">
                <span class="title">
                    Join the club and get the benefits
                </span>
                <span class="subtitle">
                    Sign up for our newsletter and receive exclusive offers on new ranges, sales, pop up stores and more
                </span>
                <div class="form-field">
                    <input type="email" placeholder="your@email.com" />
                    <button class="sign-up-btn">Sign up</button>
                </div>
            </div>
        </div>
    </div>

    
   
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const buyNowButtons = document.querySelectorAll('.add-to-cart');

    buyNowButtons.forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = '/cart';
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function () {
            const newSrc = this.src.replace('200', '400');
            mainImage.src = newSrc;
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const decreaseButton = document.getElementById('decrease');
    const increaseButton = document.getElementById('increase');
    const quantityInput = document.getElementById('quantity');

    decreaseButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value, 10);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    increaseButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value, 10);
        quantityInput.value = currentValue + 1;
    });
});
</script>

@endsection