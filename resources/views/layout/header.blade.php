<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:info@globalvisa.com"><strong>Email:</strong> info@globalvisa.com</a>
                        <a href="tel:+923168275597"><strong>Hotline:</strong> +92 316 8275597</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                         @auth
                            <!-- <div class="dropdown d-inline-block user-dropdown">
                                <button class="btn btn-user dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-circle"></i>
                                    <span class="username">{{ Auth::user()->name }}</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-user"></i> Profile
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </button>
                                    </form>
                                </div>
                            </div> -->
                            <a></a>
                            <a></a>
                        @else
                            <a class="btn-auth btn-auth-rev" href="{{ route('login') }}">Login</a>
                            <a class="btn-auth btn-auth" href="{{ route('login') }}">Register</a>
                        @endauth

                        <!-- <a title="Login" class="btn-auth btn-auth-rev" href="/register">Login</a>
                        <a title="Register" class="btn-auth btn-auth" href="/register">Signup</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="/event">Event</a></li>
                                <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                                
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                                <li class="nav-item"><a class="nav-link special-link" href="/get-start"><i class="fa fa-send"></i><span style="width:3px"> </span>Get Started</a></li>   
                                
                                @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle user-nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right user-dropdown-menu" aria-labelledby="userDropdown">
                                        <div class="dropdown-header user-dropdown-header text-center">
                                            <i class="fa fa-user-circle" style="font-size: 2.5rem; color: #007bff; margin-bottom: 5px;"></i>
                                            <div style="font-weight: 700; color: #222; font-size:12px">{{ Auth::user()->name }}</div>
                                            <div style="font-size: 12px; color: #888;">{{ Auth::user()->email }}</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <!-- <a class="dropdown-item user-dropdown-item" href="{{ route('profile.edit') }}">
                                            <i class="fa fa-user"></i> Profile
                                        </a> -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item user-dropdown-item" type="submit">
                                                <i class="fa fa-sign-out"></i> Logout
                                            </button>
                                        </form>
                                    </div>
                                </li>
                                @else
                                <li class="nav-item">
                                   
                                </li>
                                @endauth
                                

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<style>


.user-dropdown-menu {
    min-width: 220px;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    padding-top: 0;
    padding-bottom: 0;
    border: none;
}
.user-dropdown-header {
    padding: 18px 16px 10px 16px;
    background: #f8f9fa;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    border-bottom: 1px solid #eee;
}
.user-dropdown-item {
    padding: 12px 20px;
    font-size: 15px;
    color: #333;
    transition: background 0.2s, color 0.2s;
}
.user-dropdown-item i {
    margin-right: 8px;
    color: #007bff;
}
.user-dropdown-item:hover, .user-dropdown-item:focus {
    background: #f0f4f8;
    color: #007bff;
    text-decoration: none;
}
.dropdown-divider {
    margin: 0;
}

</style>
