@extends('theme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/orderdetail.css'); }} ">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cart.css'); }} ">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css'); }} ">
<div class="detail-main-container">
    <div class="shoping-cart-container">
        <div class="shoping-cart-inner-container">
            <h2>
                Your shopping cart
            </h2>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="cart-description">
                                <img src="https://picsum.photos/200" alt="Product Image">
                                <div>
                                    <p>
                                        Product Name
                                    </p>
                                    <span>
                                        A timeless ceramic vase with
                                        a tri color grey glaze.
                                    </span><br />
                                    <span>
                                        £85
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="quantity-controls">
                                <button id="decrease" class="control-button">-</button>
                                <input type="text" id="quantity" value="1" readonly>
                                <button id="increase" class="control-button">+</button>
                            </div>
                        </td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-description">
                                <img src="https://picsum.photos/200" alt="Product Image">
                                <div>
                                    <p>
                                        Product Name
                                    </p>
                                    <span>
                                        A timeless ceramic vase with
                                        a tri color grey glaze.
                                    </span><br />
                                    <span>
                                        £85
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="quantity-controls">
                                <button id="decrease" class="control-button">-</button>
                                <input type="text" id="quantity" value="1" readonly>
                                <button id="increase" class="control-button">+</button>
                            </div>
                        </td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-description">
                                <img src="https://picsum.photos/200" alt="Product Image">
                                <div>
                                    <p>
                                        Product Name
                                    </p>
                                    <span>
                                        A timeless ceramic vase with
                                        a tri color grey glaze.
                                    </span><br />
                                    <span>
                                        £85
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="quantity-controls">
                                <button id="decrease" class="control-button">-</button>
                                <input type="text" id="quantity" value="1" readonly>
                                <button id="increase" class="control-button">+</button>
                            </div>
                        </td>
                        <td>$50.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="checkout-container">
            <div class="checkout-inner-container">

            
            <div>
                <span>Subtotal</span>
                <span>£210</span>
            </div>
            <p>
            Taxes and shipping are calculated at checkout
            </p>
            <button>Go to Checkout</button>
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
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mainImage = document.getElementById('mainImage');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
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