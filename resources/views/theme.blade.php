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
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="16" height="16" fill="white" style="mix-blend-mode:multiply" />
            <path d="M14.5001 13.793L10.7241 10.0169C11.6314 8.92758 12.0839 7.53039 11.9873 6.11596C11.8908 4.70154 11.2526 3.37879 10.2057 2.42289C9.15867 1.46699 7.78347 0.951523 6.36612 0.983731C4.94877 1.01594 3.5984 1.59334 2.59593 2.59581C1.59345 3.59829 1.01605 4.94866 0.983845 6.36601C0.951637 7.78336 1.4671 9.15856 2.423 10.2055C3.37891 11.2525 4.70165 11.8907 6.11608 11.9872C7.5305 12.0838 8.9277 11.6313 10.017 10.724L13.7931 14.5L14.5001 13.793ZM2.00012 6.5C2.00012 5.60999 2.26404 4.73996 2.75851 3.99994C3.25297 3.25992 3.95578 2.68314 4.77804 2.34255C5.60031 2.00195 6.50511 1.91284 7.37802 2.08647C8.25094 2.2601 9.05276 2.68869 9.6821 3.31802C10.3114 3.94736 10.74 4.74918 10.9137 5.6221C11.0873 6.49501 10.9982 7.39981 10.6576 8.22208C10.317 9.04435 9.7402 9.74715 9.00018 10.2416C8.26016 10.7361 7.39013 11 6.50012 11C5.30705 10.9987 4.16323 10.5241 3.3196 9.68052C2.47597 8.8369 2.00144 7.69307 2.00012 6.5Z" fill="#2A254B" />
        </svg>

    </div>
    <div class="logo-container">
        <h1>RadiantNova</h1>
    </div>
    <div class="header-right">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="16" height="16" fill="white" style="mix-blend-mode:multiply" />
            <path d="M5 15C5.55228 15 6 14.5523 6 14C6 13.4477 5.55228 13 5 13C4.44772 13 4 13.4477 4 14C4 14.5523 4.44772 15 5 15Z" fill="#2A254B" />
            <path d="M12 15C12.5523 15 13 14.5523 13 14C13 13.4477 12.5523 13 12 13C11.4477 13 11 13.4477 11 14C11 14.5523 11.4477 15 12 15Z" fill="#2A254B" />
            <path d="M14 3.50002H2.91L2.5 1.40002C2.47662 1.28538 2.41379 1.18257 2.32243 1.10949C2.23107 1.0364 2.11697 0.997663 2 1.00002H0V2.00002H1.59L3.5 11.6C3.52338 11.7147 3.58621 11.8175 3.67757 11.8906C3.76893 11.9636 3.88303 12.0024 4 12H13V11H4.41L4 9.00002H13C13.1156 9.00285 13.2286 8.96553 13.3197 8.89442C13.4109 8.82331 13.4746 8.72281 13.5 8.61002L14.5 4.11002C14.5168 4.03583 14.5164 3.9588 14.4989 3.88479C14.4814 3.81077 14.4472 3.74173 14.399 3.68291C14.3508 3.62409 14.2898 3.57704 14.2206 3.54535C14.1515 3.51365 14.076 3.49815 14 3.50002ZM12.6 8.00002H3.81L3.11 4.50002H13.375L12.6 8.00002Z" fill="#2A254B" />
        </svg>
        <svg  id="profileIcon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" >
            <rect width="16" height="16" fill="white" style="mix-blend-mode:multiply" />
            <path d="M8 4C7.50555 4 7.0222 4.14662 6.61108 4.42133C6.19995 4.69603 5.87952 5.08648 5.6903 5.54329C5.50108 6.00011 5.45158 6.50277 5.54804 6.98773C5.6445 7.47268 5.88261 7.91814 6.23224 8.26777C6.58187 8.6174 7.02733 8.8555 7.51228 8.95196C7.99723 9.04843 8.4999 8.99892 8.95671 8.8097C9.41353 8.62048 9.80397 8.30005 10.0787 7.88893C10.3534 7.4778 10.5 6.99445 10.5 6.5C10.5 5.83696 10.2366 5.20107 9.76777 4.73223C9.29893 4.26339 8.66304 4 8 4ZM8 8C7.70333 8 7.41332 7.91203 7.16665 7.7472C6.91997 7.58238 6.72772 7.34811 6.61418 7.07403C6.50065 6.79994 6.47095 6.49834 6.52882 6.20736C6.5867 5.91639 6.72956 5.64912 6.93934 5.43934C7.14912 5.22956 7.4164 5.0867 7.70737 5.02882C7.99834 4.97094 8.29994 5.00065 8.57403 5.11418C8.84812 5.22771 9.08239 5.41997 9.24721 5.66664C9.41203 5.91332 9.5 6.20333 9.5 6.5C9.49955 6.89769 9.34137 7.27896 9.06017 7.56016C8.77896 7.84137 8.39769 7.99955 8 8Z" fill="#2A254B" />
            <path d="M8 1C6.61553 1 5.26216 1.41054 4.11101 2.17971C2.95987 2.94888 2.06266 4.04213 1.53285 5.32122C1.00303 6.6003 0.86441 8.00776 1.13451 9.36563C1.4046 10.7235 2.07129 11.9708 3.05026 12.9497C4.02922 13.9287 5.2765 14.5954 6.63437 14.8655C7.99224 15.1356 9.3997 14.997 10.6788 14.4672C11.9579 13.9373 13.0511 13.0401 13.8203 11.889C14.5895 10.7378 15 9.38447 15 8C14.9979 6.14413 14.2597 4.36486 12.9474 3.05256C11.6351 1.74026 9.85588 1.00209 8 1ZM5 13.1882V12.5C5.00044 12.1023 5.15862 11.721 5.43983 11.4398C5.72104 11.1586 6.10231 11.0004 6.5 11H9.5C9.89769 11.0004 10.279 11.1586 10.5602 11.4398C10.8414 11.721 10.9996 12.1023 11 12.5V13.1882C10.0896 13.7199 9.05426 14 8 14C6.94574 14 5.91042 13.7199 5 13.1882ZM11.9963 12.4629C11.9863 11.807 11.7191 11.1813 11.2521 10.7206C10.7852 10.2599 10.156 10.0011 9.5 10H6.5C5.84405 10.0011 5.2148 10.2599 4.74786 10.7206C4.28093 11.1813 4.01369 11.807 4.00375 12.4629C3.09703 11.6533 2.45762 10.5873 2.17017 9.40623C1.88272 8.22513 1.9608 6.98457 2.39407 5.84883C2.82734 4.71309 3.59536 3.73573 4.59644 3.04618C5.59751 2.35663 6.78442 1.98741 8 1.98741C9.21558 1.98741 10.4025 2.35663 11.4036 3.04618C12.4046 3.73573 13.1727 4.71309 13.6059 5.84883C14.0392 6.98457 14.1173 8.22513 13.8298 9.40623C13.5424 10.5873 12.903 11.6533 11.9963 12.4629Z" fill="#2A254B" />
        </svg>
        <div id="profileDropdown" class="dropdown-menu">
        <ul>
            <li><a href="#">My Profile</a></li>
            <li><a href="#">My Orders</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    </div>
</header>
<div style="width: 100%;display: flex;justify-content: center;">

    <div class="hr"></div>
</div>
<div class="nav-contain-class">
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


document.addEventListener('DOMContentLoaded', function() {
    var profileIcon = document.getElementById('profileIcon');
    var profileDropdown = document.getElementById('profileDropdown');

    profileIcon.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevents the click event from bubbling up to the window
        profileDropdown.style.display = profileDropdown.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener('click', function(event) {
        if (!profileDropdown.contains(event.target)) {
            profileDropdown.style.display = 'none';
        }
    });
});



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


    document.addEventListener('DOMContentLoaded', function() {
        var loginModal = document.getElementById('loginModal');
        var signupModal = document.getElementById('signupModal');
        var loginBtn = document.querySelectorAll('.login');
        var signupBtn = document.querySelectorAll('.signup');
        var loginClose = document.getElementById('loginClose');
        var signupClose = document.getElementById('signupClose');

        loginBtn.forEach(btn => {
            btn.addEventListener('click', function() {
                loginModal.style.display = 'block';
            });
        });

        signupBtn.forEach(btn => {
            btn.addEventListener('click', function() {
                signupModal.style.display = 'block';
            });
        });

        loginClose.onclick = function() {
            loginModal.style.display = 'none';
        }

        signupClose.onclick = function() {
            signupModal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == loginModal) {
                loginModal.style.display = 'none';
            }
            if (event.target == signupModal) {
                signupModal.style.display = 'none';
            }
        }

        // Form Validation
        document.getElementById('signupForm').addEventListener('submit', function(e) {
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