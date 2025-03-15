<footer class="container-fluid mt-5 py-5 shadow" style="background: #fafafa; border-top: 2px solid #222;">
    <section class="container">
        <div class="row">
            <div class="col-sm-4 col-xl-3">
                <h5>{{isset($info['name']) ? $info['name'] : ''}}</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">@lang('lang.introduce')</a></li>
                    <li><a class="link-secondary text-decoration-none" href="movie-list-left.html">@lang('lang.movies')</a></li>
                    <li><a class="link-secondary text-decoration-none" href="trailer.html">Trailers</a></li>
                    <li><a class="link-secondary text-decoration-none" href="rates-left.html">Rates</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xl-3">
                <h5>@lang('lang.terms_of_use')</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="coming-soon.html">Điều khoản chung</a></li>
                    <li><a class="link-secondary text-decoration-none" href="cinema-list.html">Chính sách thanh toán</a></li>
                    <li><a class="link-secondary text-decoration-none" href="offers.html">Chính sách bảo mật</a></li>
                    <li><a class="link-secondary text-decoration-none" href="news-left.html">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xl-3">
                <h5>@lang('lang.follow_us')</h5>
                <ul class="list-unstyled text-small">
                    <div class="social col-sm-12 col-xl-8">
                        <a class="link link-dark text-decoration-none rounded-circle fs-4" href="{{isset($info['facebook']) ? $info['facebook'] : ''}}"><i class="fa-brands fa-facebook"></i></a>
                        <a class="link link-dark text-decoration-none rounded-circle fs-4" href="{{isset($info['twitter']) ? $info['twitter'] : ''}}"><i class="fa-brands fa-twitter"></i></a>
                        <a class="link link-dark text-decoration-none rounded-circle fs-4" href="{{isset($info['instagram']) ? $info['instagram'] : ''}}"><i class="fa-brands fa-instagram"></i></a>
                        <a class="link link-dark text-decoration-none rounded-circle fs-4" href="{{isset($info['youtube']) ? $info['youtube'] : ''}}"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </ul>
            </div>
            <div class="col-sm-12 col-xl-3">
                <h5>@lang('lang.contact')</h5>
                <div class="row">
                    <p class="fs-4 col-sm-12 col-xl-6">
                        {{isset($info['email']) ? $info['email'] : ''}}
                    </p>
                </div>
                <div class="row">
                    <p class="link-info">
                        {{isset($info['worktime']) ? $info['worktime'] : ''}}
                    </p>
                </div>
                <div class="row">
                    <p class="link-info">
                        Hotline: {{isset($info['phone']) ? $info['phone'] : ''}}
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<!-- footer 2 -->
<footer class="container-fluid mt-2 py-2 shadow" style="background: #fafafa;">
    <section class="container">
        <div class="row align-items-center"> <!-- Căn giữa theo chiều dọc -->
            <div class="col-sm-12 col-xl-7 d-flex align-items-center"> <!-- Chỉnh lại cột -->
                <div class="logo-footer-cgv me-3"> <!-- Thêm khoảng cách giữa logo và thông tin -->
                    <img src="images/favicon/logo.png" alt="Logo" style="height: 70px; width: 100px">
                </div>
                <div>
                    <h5>CÔNG TY ĐIỆN ẢNH THẮNG QUÍ</h5>
                    <ul class="list-unstyled text-small">
                        <li>
                            <a class="link-secondary text-decoration-none" href="">
                                256 Đ. Nguyễn Văn Cừ, An Hoà, Ninh Kiều, Cần Thơ 900000
                            </a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="">
                                <p>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" class="svg-inline--fa" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M80 0C44.7 0 16 28.7 16 64V448c0 35.3 28.7 64 64 64H304c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H80zm80 432h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                    </svg>:
                                    <a class="hover:text-[#FD841F] transition-all duration-300 text-decoration-none" href="">{{isset($info['phone']) ? $info['phone'] : ''}}</a>
                                    - 
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" class="svg-inline--fa" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                    </svg>:
                                    <a class="hover:text-[#FD841F] transition-all duration-300 text-decoration-none" href="">1122 3344 ({{isset($info['worktime']) ? $info['worktime'] : ''}})</a>
                                    - 
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-inline--fa" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                                    </svg>:
                                    <a class="hover:text-[#FD841F] transition-all duration-300 text-decoration-none" href="" target="_blank">{{isset($info['email']) ? $info['email'] : ''}}</a>
                                </p> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-xl-5"> <!-- Đảm bảo chỉ có một cột cho copyright -->
                <p class="copy mt-4" style="font-size: 1.2rem;">{{isset($info['copyright']) ? $info['copyright'] : ''}}</p>
            </div> 
        </div>
    </section>
</footer>

<style>
    .svg-inline--fa {
        width: 1em;  /* Kích thước chiều rộng (em) */
        height: 1em; /* Kích thước chiều cao (em) */
        vertical-align: middle; /* Đảm bảo biểu tượng căn giữa với văn bản */
        margin-right: 0.3em; /* Khoảng cách giữa biểu tượng và văn bản */
    }
    .footer .row {
        display: flex; /* Sử dụng flexbox */
        justify-content: center; /* Căn giữa các cột */
        align-items: center; /* Căn giữa nội dung theo chiều dọc */
    }
    .footer .col-sm-4, .footer .col-xl-2 {
        display: flex; /* Duy trì khả năng linh hoạt cho các cột */
        flex-direction: column; /* Đặt cột theo chiều dọc */
        align-items: center; /* Căn giữa các cột */
        text-align: left; /* Căn trái nội dung bên trong cột */
    }

    .footer p {
        margin-bottom: 0; /* Giảm khoảng cách giữa các thẻ <p> */
    }

    .logo-footer-cgv {
        display: flex; /* Sử dụng flexbox cho logo */
        align-items: center; /* Căn giữa theo chiều dọc */
    }

    .social i {
        transition: transform 0.3s, color 0.3s;
        font-size: 2.1rem; /* Tăng kích thước icon */
        }
    .social i:hover {
        transform: scale(1.2);
        color: #007bff;
    }
    .social a {
        margin-right: 15px; /* Thêm khoảng cách giữa các icon */
    }
    .social a:last-child {
        margin-right: 0; /* Đảm bảo icon cuối không có khoảng cách bên phải */
    }
</style>