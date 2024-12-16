<div class="navbar-container">
    <div class="img-logo">
        <img src="{{URL('images/greenwich-logo.png')}}" alt="">
    </div>
    <div class="title-project">
        <h1 class="title-student">STUDENT MANAGEMENT</h1>
    </div>
    @if (Auth::check())  
        <div class="authentication">
            <p> {{Auth::user()->name}}</p>
            <a  class="register-button" href="/logout">Logout</a>
        </div>
    @else
        <div class="authentication">
            <a class="login-button" href="/login">Login</a>
            <a  class="register-button" href="/register">Sign in</a>
        </div>
    @endif
</div>