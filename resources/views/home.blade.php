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
</div>

<script>
// JavaScript to rotate images
document.addEventListener("DOMContentLoaded", function() {
    const images = ["item1.png", "item2.png", "item3.png","item4.png","item5.png"]; // Replace with your image URLs
    const interval = 1500; // Change interval as desired (in milliseconds)
    let index = 0;
    
    setInterval(function() {
        index = (index + 1) % images.length;
        document.getElementById("carouselImg").src = "{{URL::asset('imgs/')}}/" + images[index];
    }, interval);
});

</script>

@endsection