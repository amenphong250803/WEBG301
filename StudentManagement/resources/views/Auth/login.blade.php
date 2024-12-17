<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL('css/auth.css')}}">
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="wrapper">
            <div class="form-login">
                <div class="container-login">
                    <h1 class="title-login">
                        Sign in
                    </h1>
                    @if (session('success'))
                        <div class="anounce">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="anounce-error">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    @if (!session('success'))
                        
                        <div class="content-login">
                            <p>
                                If you don’t have an account register
                            </p>
                            <span class="register-login">
                                <span>
                                    You can 
                                </span>
                                <a class="register-here" href="/register">Register here !</a>
                            </span>
                        </div>
                    @endif
                <form action="/login" method="post">
                    @csrf
                    <div class="login-email">
                        <label for="">Email</label> <br>
                        <input class="input-login" type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="login-password">
                        <label for="">Password</label> <br>
                        <input class="input-login" type="password" name="password" id="password" placeholder="Enter your Password">
                    </div>
                    <div class="check-box">
                        <input type="checkbox" name="checkbox" id="">  Remenber me
                    </div>
                    @error('massage')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="login-buttom">Login</button>
                </form>
                <div class="webforguess">
                    <a class="webforguess" href="/index">Website For Guess</a>
                </div>
            </div>
            </div>
            <div class="img-login">
                <img class="image-l" srcset="{{URL('images/Login.jpg')}} 2x " alt="">
            </div>
        </div>
    </div>
</body>
</html>
