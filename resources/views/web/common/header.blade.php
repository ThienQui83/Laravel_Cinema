<!-- Header section -->
<nav class="header navbar navbar-expand-lg navbar-dark shadow" style="background-color: #2e292e; font-size: 1.2rem;" >
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/favicon/logo.png" alt="Logo" style="height: 70px; width: 100px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav text-uppercase mx-auto">

                <li class="nav-item dropdown mx-2" style="font-weight: bold;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('lang.search') 
                    </a>
                    <div class="dropdown-menu shadow" style="background-color: #2e292e">
                        <a class="dropdown-item link-light @yield('movies')" href="/movies">
                            @lang('lang.sortby_movies')
                        </a>
                        <a class="dropdown-item link-light @yield('schedules')" href="/schedulesByMovie">
                            @lang('lang.sortby_schedules')
                        </a>    
                    </div>
                </li>
                <li class="nav-item dropdown mx-2" style="font-weight: bold;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('lang.news_events') 
                    </a>
                    <div class="dropdown-menu shadow" style="background-color: #2e292e">
                        <a class="dropdown-item link-light @yield('movies')" href="/news">
                            @lang('lang.news')
                        </a>
                        <a class="dropdown-item link-light @yield('schedules')" href="/events">
                            @lang('lang.events')
                        </a>    
                    </div>
                </li>

                <li class="nav-item mx-2" style="font-weight: bold;">
                    <a class="nav-link @yield('support')" href="/contact">@lang('lang.contact')/@lang('lang.support')</a>
                </li>

            </ul>
            <style>
                .navbar-nav .nav-item{
                    position: relative;
                }
                .navbar-nav .nav-item::before{
                    content:"";
                    height: 4px;
                    width: 0px;
                    background: #ff0000;
                    position: absolute;
                    bottom: 0px;
                    transition: 0.25s cubic-bezier(0.075, 0.82, 0.16, 1)
                }

                .navbar-nav .nav-item:hover::before{
                    width: 100%;
                }
                .navbar-nav .nav-item .dropdown-menu{
                    border: 1px solid #ffffff43;
                }
                .navbar-nav .nav-item .dropdown-menu a{
                    border-bottom: 1px solid #ffffff43;
                }
                .navbar-nav .nav-item .dropdown-item:hover{
                    border-bottom: 1px solid #ff0000;
                    background-color: transparent;
                }
                
                .navbar-nav .nav-item .dropdown-item.active{
                    background-color: #ff0000;
                }
            </style>
            @if(Auth::check())
                <div class="nav-item dropdown mx-2">
                    <a class="nav-link link-warning font-weight-bold dropdown "style="font-weight: bold;" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-id-card me-sm-1"></i>
                        <span class="d-sm-inline d-none">{{ Auth::user()->fullName }}</span>
                    </a>
                    <ul class="dropdown-menu shadow" style="background-color: #2e292e">
                        <li><a class="dropdown-item link-light" href="/profile">@lang('lang.profile')</a></li>
                        <li><a class="dropdown-item link-light" href="/signOut">@lang('lang.signout')</a></li>
                    </ul>
                </div>
            @else
                <div class="nav-item mx-2 float-end">
                    <a class="nav-link link-warning" href="#loginModal" data-bs-toggle="modal" data-bs-target="#loginModal">
                        @lang('lang.signin')
                    </a>
                </div>
            @endif

        </div>

    </div>
    <div class=" mx-2 dropdown float-end">
        <button class="btn btn-link text-decoration-none link-light " href="#"
                data-bs-toggle="dropdown" aria-expanded="false">
            @lang('lang.lang'): <img class="rounded ms-1" style="max-width: 30px" src="images/language/@lang('lang.flag').png" alt="vietnamese">
        </button>
        <ul class="dropdown-menu shadow dropdown-menu-end" style="background-color: #f5f5f5">
            <li>
                <a class="dropdown-item" href="lang/en">
                    <img class="rounded me-1" style="max-width: 30px" src="images/language/united-states.png" alt="engligh">
                    @lang('lang.en')
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="lang/vi">
                    <img class="rounded me-1" style="max-width: 30px" src="images/language/vietnam.png" alt="vietnamese">
                    @lang('lang.vi')
                </a>
            </li>
        </ul>
    </div>
    <!-- Modal đăng nhập -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                            <div class="wrapper-container" id="wrapperContainer">
                                <div class="form-section sign-up-section">
                                    <form method='post' action="/signUp">
                                        <h1>Tạo Tài Khoản</h1>
                                        <div class="social-media-container">
                                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="social-icon"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        @csrf
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="@lang('lang.type') @lang('lang.fullname')" name="fullName" aria-label="">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="email" placeholder="@lang('lang.type') Email..." name="email" aria-label="email"
                                                autocomplete="email">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="number" placeholder="@lang('lang.type') @lang('lang.phone')..." name="phone" aria-label="">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="password" placeholder="@lang('lang.type') @lang('lang.password')..." name="password"
                                                aria-label="">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="password" placeholder="@lang('lang.re_password')..." name="repassword" aria-label="">
                                        </div>
                                        <button type='submit' class="btn btn-warning text-uppercase">@lang('lang.signup')</button>
                                    </form>
                                </div>
                                <div class="form-section sign-in-section">
                                    <form method='post' action="/signin">
                                        <h1>Đăng Nhập</h1>
                                        <div class="social-media-container">
                                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="social-icon"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <span>hoặc đăng nhập với tài khoản của bạn</span>
                                        {{--                    @csrf--}}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <input type="hidden" name="url" value="{{ url()->current() }}"/>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="@lang('lang.type') email hoặc @lang('lang.phone')"
                                                @if(session()->has('username_web'))
                                                    value="{!!session()->get('username_web') !!}"
                                                @endif
                                                name="username" aria-label="username"
                                                autocomplete="email">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="password" placeholder="@lang('lang.password')..."
                                                @if(session()->has('password_web'))
                                                    value="{!!session()->get('password_web') !!}"
                                                @endif
                                                name="password" aria-label="password">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-box" type="checkbox"
                                                @if(session()->has('username_web'))
                                                    checked
                                                @endif
                                                id="rememberme" name="rememberme">
                                            <label class="form-check-label" for="rememberme">
                                                @lang('lang.remember_password')
                                            </label>
                                        </div>

                                        <div class="justify-content-center text-center">
                                            <a data-bs-target="#forgotModal" data-bs-toggle="modal"
                                            href="#forgotModal">@lang('lang.forget_password')?</a>
                                        </div>
                                        <button type='submit' class="btn btn-warning text-uppercase">@lang('lang.submit')</button>
                                    </form>
                                </div>
                                <div class="transition-overlay-container">
                                    <div class="transition-overlay">
                                        <div class="overlay-section overlay-left">
                                            <h1>Chào Mừng Trở Lại!</h1>
                                            <p>Để tiếp tục kết nối, vui lòng đăng nhập bằng thông tin của bạn</p>
                                            <button class="toggle-button" id="signInToggle">Đăng Nhập</button>
                                        </div>
                                        <div class="overlay-section overlay-right">
                                            <h1>Xin Chào, Bạn Mới!</h1>
                                            <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                                            <button class="toggle-button" id="signUpToggle">Đăng Ký</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>

    <!-- Forget Password -->
    <div class="modal fade" id="forgotModal" tabindex="-1" aria-hidden="true" aria-labelledby="forgotModalLabel">
        <div class="modal-dialog container">
            <div class="modal-content">
                <div class="modal-header text-uppercase">
                    <h5 class="modal-title" id="forgotModalLabel">@lang('lang.forget_password')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body my-4">
                    <form method='post' action="/forgot_password">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="email" placeholder="@lang('lang.type') email" name="email" aria-label="">
                        </div>
                        <div class="modal-footer justify-content-center text-center">
                            <button type='submit' class="btn btn-warning text-uppercase">@lang('lang.submit')</button>
                            <p class="text-dark w-100">@lang('lang.have_account')?
                                <a class="link link-warning" data-bs-target="#loginModal" data-bs-toggle="modal" href="#loginModal">@lang('lang.signin')
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
