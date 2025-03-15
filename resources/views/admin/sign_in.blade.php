  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="admin_assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="admin_assets/img/favicon.png">
    <title>
      Administrator cinema
    </title>
    <base href="{{asset('')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="admin_assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="admin_assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="admin_assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="admin_assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  </head>

<body class="form-admin-sign">
    <main class="custom-main-content mt-0">
        <section>
            <div class="custom-page-header min-vh-100">
                <div class="custom-container">
                    <div class="custom-row">
                        <div class="form-sign">
                            <div class="custom-card">
                                <div class="custom-card-header pb-0 text-start">
                                    @if(count($errors) > 0)
                                    <div class="custom-alert alert-danger">
                                        @foreach($errors->all() as $arr)
                                        {{ $arr }}<br>
                                        @endforeach
                                    </div>
                                    @endif
                                    @if (session('warning'))
                                    <div class="custom-alert alert-warning">
                                        {{ session('warning') }}
                                    </div>
                                    @endif
                                    <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
                                    <h4 class="custom-font-weight-bolder">ĐĂNG NHẬP</h4>
                                </div>
                                <div class="custom-card-body">
                                    <form action="admin/sign_in" method="POST" role="form">
                                        @csrf
                                        <div class="custom-form-group mb-3">
                                            <span class="icon">
                                              <i class="fa-solid fa-user"></i>
                                            </span>
                                            <input type="email" name="email" class="custom-form-control" placeholder="Email" aria-label="Email">      
                                        </div>
                                        <div class="custom-form-group mb-3">
                                            <span class="icon">
                                              <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <input type="password" name="password" class="custom-form-control" placeholder="Password" aria-label="Password">                                            
                                        </div>
                                        <div class="custom-form-check">
                                            <input class="custom-form-check-box" type="checkbox" id="rememberMe">
                                            <label class="custom-form-check-label" for="rememberMe">Nhớ mật khẩu</label>
                                        </div>
                                        <div class="custom-text-center">
                                            <button type="submit" class="custom-btn btn-lg w-100 mt-4 mb-0">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @yield('scripts')
</body>

  </html>
