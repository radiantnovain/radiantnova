<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | RadiantNova</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/login.css'); }}">
</head>

<body>
    <div class="login-container">
        <div class="login-container-left">
            <div class="left-container">
                <div class="logo">
                    <img src="{{ URL::asset('imgs/logo.png'); }}" alt="RadiantNova Logo">
                </div>
                <div class="titles">
                    <h1 class="heading">Welcome Back!</h1>
                    <p class="sub-heading">Manage RadiantNova from here.</p>
                </div>
                <div class="form">
                    <form action="#" method="post">
                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" id="uname" placeholder="Enter Username" name="uname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="login-container-right">
            <div class="right-container">
                <img src="{{ URL::asset('imgs/admin_login.svg'); }}" alt="Admin Login Illustration">
            </div>
        </div>
    </div>
</body>

</html>
