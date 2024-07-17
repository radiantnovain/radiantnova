<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/adminpage.css'); }}">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadiantNova</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@500&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/header.css'); }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="header">
        <h2>RadiantNova</h2>
        <button onclick="location.href='logout.php'" class="logout-btn-header">Go To Site</button>
    </div>
    <?php 
    $dashboardRoute; $categoryRoute; $productRoute;
if (Route::currentRouteName() == 'admin/dashboard' ) {
                            $dashboardRoute = 'active-class';
                        } else {
                            $dashboardRoute = '';
                        }

                        if (Route::currentRouteName() == 'admin/category' ) {
                            $categoryRoute = 'active-class';
                        } else {
                            $categoryRoute = '';
                        }
                        if (Route::currentRouteName() == 'admin/product' || Route::currentRouteName() == 'admin/product/add'  ) {
                            $productRoute = 'active-class';
                        } else {
                            $productRoute = '';
                        }
    ?>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li class="{{ $dashboardRoute }}"><a href="/admin/dashboard"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                <li class="{{ $categoryRoute }}"><a href="/admin/category"><i class="fas fa-list"></i> Categories</a></li>
                <li class="{{ $productRoute }}"><a href="/admin/product"><i class="fas fa-box"></i> Products</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> General Settings</a></li>
            </ul>
            <button onclick="location.href='logout.php'" class="logout-btn">Logout</button>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>
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