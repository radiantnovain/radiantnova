@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css'); }} ">

<div class="home-container">
    <div class="hero">
        <div class="right-hero">
            <img id="carouselImg" src="{{URL::asset('imgs/item1.png');}}" alt="">
        </div>
        <div class="left-hero">
            <div class="first-line">DISCOUNT OFFERS ON</div>
            <div class="second-line">Amazing 3D Products</div>
            <div class="third-line">
                Step into a realm where innovation meets imagination. Browse our curated selection of lifelike 3D items, crafted to elevate your digital experiences. Unleash your creativity today!
            </div>
            <span class="shop-now-button">SHOP NOW</span>
        </div>
    </div>
    <div class="trending-title">
        <h2>Trending 3D Printed Products</h2>
        <p class="subline">Discover the latest and most innovative 3D printed designs available today</p>
        <!-- <div class="line-div"></div> -->
        <!-- <div class="line-div-2"></div> -->
    </div>



    <!-- Trending Section -->
    <div class="trending-items">
        <div class="item-slider">
            <div class="item">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <h3>Product Name 1</h3>
                            </div>
                            <div class="add-to-cart-btn">
                                Add to Cart
                            </div>
                        </div>
                        <p class="description">Description will appear here for this product or item.</p>
                        <p class="price">$19.99</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>
                <div class="lower-btn">
                    Buy Now
                </div>
            </div>
            <div class="item">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <h3>Product Name 1</h3>
                            </div>
                            <div class="add-to-cart-btn">
                                Add to Cart
                            </div>
                        </div>
                        <p class="description">Description will appear here for this product or item.</p>
                        <p class="price">$19.99</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>
                <div class="lower-btn">
                    Buy Now
                </div>
            </div>
            <div class="item">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <h3>Product Name 1</h3>
                            </div>
                            <div class="add-to-cart-btn">
                                Add to Cart
                            </div>
                        </div>
                        <p class="description">Description will appear here for this product or item.</p>
                        <p class="price">$19.99</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>
                <div class="lower-btn">
                    Buy Now
                </div>
            </div>
            <div class="item">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <h3>Product Name 1</h3>
                            </div>
                            <div class="add-to-cart-btn">
                                Add to Cart
                            </div>
                        </div>
                        <p class="description">Description will appear here for this product or item.</p>
                        <p class="price">$19.99</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>
                <div class="lower-btn">
                    Buy Now
                </div>
            </div>
            <div class="item">
                <div class="item-2">

                    <img class="product-img" src="https://picsum.photos/200" alt="3D Printed Product 1">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                                <h3>Product Name 1</h3>
                            </div>
                            <div class="add-to-cart-btn">
                                Add to Cart
                            </div>
                        </div>
                        <p class="description">Description will appear here for this product or item.</p>
                        <p class="price">$19.99</p>
                        <!-- <p class="rating">Rating: <span>4.2</span></p> -->
                    </div>
                </div>
                <div class="lower-btn">
                    Buy Now
                </div>
            </div>


            <!-- Add more items here -->
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const images = ["item1.png", "item2.png", "item3.png", "item4.png", "item5.png"]; // Replace with your image URLs
        const interval = 1500; // Change interval as desired (in milliseconds)
        let index = 0;

        setInterval(function() {
            index = (index + 1) % images.length;
            document.getElementById("carouselImg").src = "{{URL::asset('imgs/')}}/" + images[index];
        }, interval);
    });

    var lastScrollTop = 0;
</script>
@endsection