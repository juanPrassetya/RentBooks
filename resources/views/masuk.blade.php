<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="signin-image.jpg" rel="icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="csslogin/style.css">
</head>
<body>

    <div class="main"> 



<!-- ini login -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="loginlogo.png" alt="sing up image"></figure>
                        <a href="register" class="signup-image-link">Belum Punya Akun ?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>

@if (session('status'))
<div class="teks" style="">
    <b>{{ session('message') }}  </b>
</div>
@endif
                        <form action="" method="post" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                             <input type="submit" name="signin"  href="userhal" id="" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    
    <script src="vendorlogin/jquery/jquery.min.js"></script>
    <script src="jslogin/main.js"></script>
</body>
</html>