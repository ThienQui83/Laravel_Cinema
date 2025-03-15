<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 z-index-1" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="./admin">
            <img src="images/favicon/cinema.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Admin Cinema</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Quản lý Phim -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#movieManagement" role="button" aria-expanded="false" aria-controls="movieManagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-film text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Phim</span>
                </a>
                <div class="collapse show" id="movieManagement">
                    <ul class="navbar-nav ms-4">
                        @can('movie_genre')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/movie_genres">@lang('lang.movie_genre')</a>
                        </li>
                        @endcan
                        @can('movies')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/movie">@lang('lang.movies')</a>
                        </li>
                        @can('director')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/director">@lang('lang.directors')</a>
                        </li>
                        @endcan
                        @can('cast')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/cast">@lang('lang.casts')</a>
                        </li>
                        @endcan
                        @endcan
                    </ul>
                </div>
            </li>

            <!-- Quản lý Rạp Phim -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#theaterManagement" role="button" aria-expanded="false" aria-controls="theaterManagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-theater-masks text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Rạp Phim</span>
                </a>
                <div class="collapse show" id="theaterManagement">
                    <ul class="navbar-nav ms-4">
                        @can('theater')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/theater">@lang('lang.theater')</a>
                        </li>
                        @endcan
                        @can('schedule_movie')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/schedule">@lang('lang.schedule')</a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>

            <!-- Quản lý Bán Hàng -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#salesManagement" role="button" aria-expanded="false" aria-controls="salesManagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-money-bill text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Giao dịch</span>
                </a>
                <div class="collapse show" id="salesManagement">
                    <ul class="navbar-nav ms-4">
                        @can('buyTicket')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/buyTicket">Bán vé</a>
                        </li>
                        @endcan
                        @can('buyCombo')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/buyCombo">Bán combo</a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>

            <!-- Quản lý Đơn Hàng -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#orderManagement" role="button" aria-expanded="false" aria-controls="orderManagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-receipt text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Xác thực</span>
                </a>
                <div class="collapse show" id="orderManagement">
                    <ul class="navbar-nav ms-4">
                        @can('ticket')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/ticket">Vé</a>
                        </li>
                        @endcan
                        @can('buyTicket')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/scanTicket">Quét vé</a>
                        </li>
                        @endcan
                        @can('buyCombo')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/scanCombo">Quét combo</a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>

            <!-- Quản lý Giá Vé -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ticketPriceManagement" role="button" aria-expanded="false" aria-controls="ticketPriceManagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-tag text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Giá</span>
                </a>
                <div class="collapse show" id="ticketPriceManagement">
                    <ul class="navbar-nav ms-4">
                        @can('food')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/food">Thức ăn</a>
                        </li>                     
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/combo">Combo</a>
                        </li>
                        @endcan
                        @can('price')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/prices">Giá vé</a>
                        </li>
                        @endcan
                        @can('discount')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/discount">Mã khuyến mãi</a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>

            <!-- Quản lý Bài Viết -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#articleManagement" role="button" aria-expanded="false" aria-controls="articleManagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-newspaper text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý Bài Viết</span>
                </a>
                <div class="collapse show" id="articleManagement">
                    <ul class="navbar-nav ms-4">
                        @can('events')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/news">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/events">Sự kiện</a>
                        </li>
                        @endcan
                        @can('banners')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/banners">Quảng cáo</a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>

            <!-- Quản lý User -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#userManagement" role="button" aria-expanded="false" aria-controls="userManagement">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-user text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản lý User</span>
                </a>
                <div class="collapse show" id="userManagement">
                    <ul class="navbar-nav ms-4">
                        @can('user')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/user">Người dùng</a>
                        </li>
                        @endcan
                        @role('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/staff">Nhân viên</a>
                        </li>
                        @endrole
                        @can('feedback')
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/feedback">Phản hồi / Liên hệ</a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>

            @role('admin')
            <li class="nav-item">
                <a class="nav-link @yield('active')" href="./admin/info">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-sharp fa text-info text-sm  fa-circle-info"></i>
                    </div>
                    <span class="nav-link-text ms-1">@lang('lang.information')</span>
                </a>
            </li>
            @endrole
        </ul>
    </div>
</aside>
