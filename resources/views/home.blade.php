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
    <!-- Trending Section -->
    <div class="trending-items">
        <div class="item-slider">
            <div class="item">
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
            <div class="item">
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
            <div class="item">
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
            <div class="item">
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


    document.addEventListener('DOMContentLoaded', function() {
        const buyNowButtons = document.querySelectorAll('.buy-now-btn');

        buyNowButtons.forEach(button => {
            button.addEventListener('click', function() {
                window.location.href = '/order-detail';
            });
        });
    });
</script>
@endsection