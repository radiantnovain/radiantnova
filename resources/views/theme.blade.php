<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadiantNova</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/theme.css'); }} ">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/footer.css'); }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/header.css'); }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</head>

<header>

    <div class="logo-main">
        <!-- <div class="logo">RadiantNova </div><span class="dot"></span> -->
        <img src="{{URL::asset('imgs/logo.png');}}" alt="">
    </div>
    <div class="bars" id="bar-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="bar-icon"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
        </svg>
    </div>
    <div class="search">
        <input  class="searchTerm" placeholder="What are you looking for?">
        <button class="searchButton">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
        </button>
    </div>
    <div class="buttons">
        <button class="login">Login</button>
        <button class="signup">Signup</button>
    </div>
</header>
<div class="sidebar" id="sidebar">
    <div class="close-btn" id="closeBtnForSidebar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M0.75 23.249L23.25 0.749023" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M23.25 23.249L0.75 0.749023" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="menus-sidebar">
        <div class="sidebar-search">
            <div class="search-2">
                <input type="text" class="searchTerm" placeholder="Search...">
                <button type="submit" class="searchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="sidebar-buttons">
            <div class="buttons-2">
                <button class="login">Login</button>
                <button class="signup">Signup</button>

            </div>
        </div>
        <div class="sidebar-pages">
            <div class="sub-header-2">
                <div class="sub-header-item active">Home</div>
                <div class="sub-header-item">Anime Characters</div>
                <div class="sub-header-item">Stands</div>
                <div class="sub-header-item">All Products</div>
                <div class="sub-header-item">Help Center</div>



            </div>

        </div>
        <!-- <a href="#"><div class="menu-name-sidebar">HOME</div></a>
    <a href="#"><div class="menu-name-sidebar">ABOUT</div></a>
    <a href="#"><div class="menu-name-sidebar">SERVICES</div></a>
    <a href="#"><div class="menu-name-sidebar">Gallery</div></a>
    <a href="#"><div class="menu-name-sidebar">CONTACT US</div></a> -->


    </div>
</div>
<div class="sub-header">
    <div class="sub-header-item active">Home</div>
    <div class="sub-header-item">Anime Characters</div>
    <div class="sub-header-item">Stands</div>
    <div class="sub-header-item">All Products</div>
    <div class="sub-header-item">Help Center</div>



</div>



<body>
    @yield('content')
  
    
    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="loginClose">&times;</span>
            <h2>Login</h2>
            <form id="loginForm">
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="loginEmail" required>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close" id="signupClose">&times;</span>
            <h2>Signup</h2>
            <form id="signupForm">
                <label for="signupUsername">Username:</label>
                <input type="text" id="signupUsername" name="signupUsername" required>
                <label for="signupEmail">Email:</label>
                <input type="email" id="signupEmail" name="signupEmail" required>
                <label for="signupPassword">Password:</label>
                <input type="password" id="signupPassword" name="signupPassword" required>
                <label for="signupConfirmPassword">Confirm Password:</label>
                <input type="password" id="signupConfirmPassword" name="signupConfirmPassword" required>
                <button type="submit">Signup</button>
            </form>
        </div>
    </div>

    <footer class="footer-section">
        <div class="footer-container">
            
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <img src="{{URL::asset('imgs/logo.png');}}" alt="">
                            </div>
                            <div class="footer-text">
                                <p>Step into a realm where innovation meets imagination. Browse our curated selection of lifelike 3D items, crafted to elevate your digital experiences. Unleash your creativity today!</p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Follow us</h3>
                            </div>
                            <div class="footer-social-icon">

                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="copyright-area">
            <div class="copyright-text">
                <p>© Copyright 2024 – 2025 RadiantNova.</p>
            </div>
        </div>
    </footer>
</body>

<script>
    document.getElementById('bar-button').addEventListener('click', function() {
        var targetBlock = document.getElementById('sidebar');
        var targetBlock1 = document.getElementById('backgroundSidebar');
        targetBlock.style.display = 'block';

    });

    document.getElementById('closeBtnForSidebar').addEventListener('click', function() {
        var targetBlock = document.getElementById('sidebar');
        var targetBlock1 = document.getElementById('backgroundSidebar');
        targetBlock.style.display = 'none';
    });


    document.addEventListener('DOMContentLoaded', function () {
        var loginModal = document.getElementById('loginModal');
        var signupModal = document.getElementById('signupModal');
        var loginBtn = document.querySelectorAll('.login');
        var signupBtn = document.querySelectorAll('.signup');
        var loginClose = document.getElementById('loginClose');
        var signupClose = document.getElementById('signupClose');

        loginBtn.forEach(btn => {
            btn.addEventListener('click', function () {
                loginModal.style.display = 'block';
            });
        });

        signupBtn.forEach(btn => {
            btn.addEventListener('click', function () {
                signupModal.style.display = 'block';
            });
        });

        loginClose.onclick = function () {
            loginModal.style.display = 'none';
        }

        signupClose.onclick = function () {
            signupModal.style.display = 'none';
        }

        window.onclick = function (event) {
            if (event.target == loginModal) {
                loginModal.style.display = 'none';
            }
            if (event.target == signupModal) {
                signupModal.style.display = 'none';
            }
        }

        // Form Validation
        document.getElementById('signupForm').addEventListener('submit', function (e) {
            var password = document.getElementById('signupPassword').value;
            var confirmPassword = document.getElementById('signupConfirmPassword').value;
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
            }
        });
    });
</script>

</html>