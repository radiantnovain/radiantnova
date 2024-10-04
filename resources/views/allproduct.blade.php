@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css'); }} ">
<style>
    .trending-items {
    display: flex;
    justify-content: center;
    padding: 20px;
}

.item-slider {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    width: 100%;
    max-width: 1200px;
}

.item {
    width: 100%;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.item:hover {
    transform: translateY(-10px);
}

.item-2 {
    text-align: center;
}

.product-img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    object-fit: cover;
}

.item-content {
    margin-top: 10px;
}

.first-line-product {
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-heading {
    font-size: 18px;
    font-weight: bold;
    color: #2596be;
}
.product-heading a {
    text-decoration: none;
}
.price {
    font-size: 16px;
    color: #333;
    margin-top: 5px;
}
.filters {
    padding: 0px 50px;
    margin-top:15px;
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
}
.category-activated {
    color: #fff !important;
    background-color: #333;
}
.category:hover {
    color: #fff !important;
    background-color: #333;

}
.category {
    cursor: pointer;
    color: #333;
    border-radius: 30px;
    border: 1px solid #333;
    padding: 5px 12px;
    font-size: 12px;
    font-family: "Poppins", sans-serif;
    font-weight: 500;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .item-slider {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
}

</style>
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
            <div>
            <span class="shop-now-button">SHOP NOW</span>
            </div>
        </div>
    </div>

    <div class="filters">
        <?php
        $WithoutFilter;
        if ($activeCategory == 'all') {
            $WithoutFilter = 'category category-activated';
        } else {
            $WithoutFilter = 'category';
        }
        ?>
        <a style="text-decoration:none" href="{{route('AllProduct')}}"> <span class="{{$WithoutFilter}}">All</span></a>
        @foreach ($categories as $category)
        <?php
        $classNameOfcategories;
        if ($activeCategory == $category->name) {
            $classNameOfcategories = 'category category-activated';
        } else {
            $classNameOfcategories = 'category';
        }
        ?>
        <a style="text-decoration:none" href="{{route('productByCategory',$category->name)}}"> <span class="{{$classNameOfcategories}}">{{ $category->name }}</span></a>

        @endforeach


    </div>
    <!-- Trending Section -->
    <div class="trending-items">
        
        <div class="item-slider">
        @foreach($products as $item)
       
            <div class="item" data-url="order-detail">
                <div class="item-2">
                    <img class="product-img" src="{{ asset($item->random_image->image_path) }}" alt="{{ $item->title }}">
                    <div class="item-content">
                        <div class="first-line-product">
                            <div class="product-heading">
                            <a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}?text=I'm%20interested%20in%20your%20product%20{{$item->title}}" target="_blank">   <span>{{$item->title}}</span></a>
                            </div>
                        </div>

                        <p class="price">₹ {{$item->price}}</p>
                    </div>
                </div>
            </div>
            
           @endforeach
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
              //  window.location.href = '/order-detail';
            });
        });
    });

    document.querySelectorAll('.item').forEach(item => {
        item.addEventListener('click', () => {
            const url = item.getAttribute('data-url');
             //window.location.href = url;
        });
    });
</script>
@endsection