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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<header>
        <div class="header-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </div>
        <div class="logo-container">
            <h1>RadiantNova</h1>
        </div>
        <div class="header-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1a1 1 0 0 1 1-1h1.528a.5.5 0 0 1 .493.418L3.89 3H14a1 1 0 0 1 .97 1.242l-1.2 6A1 1 0 0 1 12.8 11H5.621l-.375 1.5H14.5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.484-.375L2.89 3H1v-.01a.5.5 0 0 1-.217-.076L0 1zM1.55 1L2.89 3H5l1 4.5L9.293 6H14l1-5H3.6L2.152 1H1.55zM5.5 12a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm6 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"/>
            </svg>
        </div>
    </header>
    <div style="width: 100%;display: flex;justify-content: center;">

        <div class="hr"></div>
    </div>
    <nav>
        <ul>
            <li><a href="#">Anime Characters</a></li>
            <li><a href="#">Stands</a></li>
            <li><a href="#">Cars</a></li>
            <li><a href="#">Key Chains</a></li>
            <li><a href="#">Special Gifts</a></li>
            <li><a href="#">Tableware</a></li>
            <li><a href="#">All Products</a></li>
        </ul>
    </nav>



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