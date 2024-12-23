<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL('css/register.css')}}">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="form-register">
                <div class="container-register">
                    <h1 class="title-register">
                        Sign up
                    </h1>
                    <div class="content-register">
                        <span class="register-login">
                            <span>
                                You can 
                            </span>
                            <a class="register-here" href="/login">Login here !</a>
                        </span>
                    </div>
                <form action="/register" method="post">
                    @csrf
                    <div class="register-name">
                        <label for="">Name</label> <br>
                        <input class="input-register" type="text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="register-email">
                        <label for="">Email</label> <br>
                        <input class="input-register" type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="register-password">
                        <label for="">Password</label> <br>
                        <input class="input-register" type="password" name="password" id="password" placeholder="Enter your Password">
                    </div>
                    <div class="register-password">
                        <label for="">Confirm Password</label> <br>
                        <input class="input-register" type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your Password">
                    </div>
                    <div class="check-box">
                        <input type="checkbox" name="checkbox" id="">  Remenber me
                    </div>
                    <button type="submit" class="register-buttom">register</button>
                </form>
            </div>
            </div>
            <div class="img-register">
                <img class="image-l" srcset="{{URL('images/Login.jpg')}} 2x " alt="">
            </div>
        </div>
    </div>
</body>
</html>