@extends('web.layout.index')
@section('content')
    <section class="container-lg">
        {{--  Breadcrumb  --}}
        <nav aria-label="breadcrumb mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="link link-dark text-decoration-none">@lang('lang.home')</a></li>
                <li class="breadcrumb-item"><a href="/movies" class="link link-dark text-decoration-none">@lang('lang.movie_is_playing')</a></li>
                <li class="breadcrumb-item active" aria-current="page">{!! $movie['name'] !!}</li>
            </ol>
        </nav>

        <div class="movie mt-5">
            {{--  Movie title  --}}
            <h2 class="mt-2">{!! $movie['name'] !!}</h2>

            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-4 border-warning rounded-0">
                        @if(strstr($movie['image'],"https") == "")
                            <img class="card-img-top rounded-0" alt='...'
                                 src="https://res.cloudinary.com/{!! $cloud_name !!}/image/upload/{!! $movie['image'] !!}.jpg">
                        @else
                            <img class="card-img-top rounded-0" alt='...'
                                 src="{!! $movie['image'] !!}">
                        @endif
                    </div>

                    <div class="card-body border border-4 border-warning border-top-0 d-flex align-items-center">
                        <strong class="card-text p-2">@lang('lang.evaluate'):</strong>
                        <div id="score" class="score">
                            <button class="star">&#9734;</button>
                            <button class="star">&#9734;</button>
                            <button class="star">&#9734;</button>
                            <button class="star">&#9734;</button>
                            <button class="star">&#9734;</button>
                        </div>         
                    </div>
                </div>

                <div class="col-sm-6 col-lg-9">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center"><strong class="pe-1">@lang('lang.duration') 
                                : </strong>{{ $movie->showTime }} @lang('lang.minutes')
                        </li> {{--movie running time--}}
                        <li class="list-group-item d-flex align-items-center"><strong class="pe-1">@lang('lang.national')
                                : </strong>{!! $movie['national'] !!}
                        </li>
                        <li class="list-group-item d-flex align-items-center"><strong class="pe-1">@lang('lang.release_date')
                                : </strong>{!! $movie['releaseDate'] !!}
                        </li>
                        <li class="list-group-item d-flex align-items-center"><strong class="pe-1">@lang('lang.genre'): </strong>
                            @foreach($movie->movieGenres as $genre)
                                @if ($loop->first)
                                    {{ $genre->name }}
                                @else
                                    , {{ $genre->name }}
                                @endif
                            @endforeach
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <strong class="pe-1">@lang('lang.directors'): </strong>
                            @foreach($movie->directors as $director)
                                <a href="/director/{!! $director['id'] !!}" class="link link-dark text-decoration-none hover_movie">
                                @if ($loop->first)
                                    {{ $director->name }}
                                @else
                                    , {{ $director->name }}
                                @endif
                                </a>
                            @endforeach
                        </li>
                        <li class="list-group-item d-flex align-items-center text-truncate">
                            <strong class="pe-1">@lang('lang.casts'): </strong>
                            @foreach($movie->casts as $cast)
                                <a href="/cast/{!! $cast['id'] !!}" class="link link-dark text-decoration-none hover_movie" >
                                @if ($loop->first)
                                    {{ $cast->name }}
                                @else
                                    , {{ $cast->name }}
                                @endif
                                </a>
                            @endforeach
                        </li>
                        <li class="list-group-item d-flex align-items-center"><strong class="pe-1">@lang('lang.rated'): </strong>
                            <span class="badge @if($movie->rating->name == 'C18') bg-danger
                            @elseif($movie->rating->name == 'C16') bg-warning
                            @elseif($movie->rating->name == 'P') bg-success
                            @elseif($movie->rating->name == 'K') bg-primary
                            @else bg-info
                            @endif me-1">
                                {{ $movie->rating->name }}
                            </span> - {{ $movie->rating->description }}
                        </li>
                    </ul>
                    <button type="button" title="Mua vé" class="button btn-booking" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                        <span class="btn-content">
                            <span class="btn-icon"></span>
                            <span class="btn-text">Mua vé</span>
                        </span>
                    </button>
                </div>        
            </div>
            <style>
                
            </style>        

            <div class="product-collateral">
                <!-- Tabs Header -->
                <ul class="toggle-tabs">
                    <li class="current" onclick="showTab('details')">
                        <span>Chi tiết</span>
                    </li>
                    <li class="last" onclick="showTab('trailer')">
                        <span>Trailer</span>
                    </li>
                </ul>

            <!-- Tabs Content -->
            <dl id="collateral-tabs" class="collateral-tabs">
                <!-- Details Tab -->
                <dd class="tab-container current" id="details">
                    <div class="tab-content">
                        <h2>Chi tiết</h2>
                        {!! $movie['description'] !!}
                    </div>
                </dd>

                <!-- Trailer Tab -->
                <dd class="tab-container" id="trailer">
                    <div class="tab-content">
                        <h2>Trailer</h2>
                        @isset($movie['trailer'])
                            <iframe width="800" height="500" 
                                    src="https://www.youtube.com/embed/{!! $movie['trailer'] !!}" 
                                    title="YouTube video player" 
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen>
                            </iframe>
                        @endisset
                    </div>
                </dd>
            </dl>
        
        
        <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Lịch Chiếu Phim -->
                <h4>@lang('lang.movie_schedule')</h4>
                <ul class="list-group list-group-horizontal flex-wrap">
                    @for($i = 0; $i <= 29; $i++)
                        <li class="list-group-item border-0">
                            <button onclick="highlightButton(this)"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#schedule_date_{{$i}}"
                                    aria-expanded="false"
                                    class="btn btn-block btn-outline-dark p-2 m-2">
                                {{ date('d/m', strtotime('+ '.$i.' day', strtotime(today()))) }}
                            </button>
                        </li>
                    @endfor
                </ul>
            </div>
            @include('web.layout.movieDetailSchedules')
            
            @if($schedulesEarly->count() > 0)
            <div class="col-12 mt-4">
                <h4>Vé bán trước</h4>
                    @foreach($schedulesEarly as $schedule)
                        @if(date('Y-m-d') == $schedule->date)
                            @if(date('H:i', strtotime('+ 20 minutes', strtotime($schedule->startTime))) >= date('H:i'))                            
                                @if(Auth::check())
                                    <a href="/tickets/{{$schedule->id}}"    
                                       class="btn btn-warning rounded-0 p-1 m-0 me-4 border-2 border-light"
                                       style="border-width: 2px; border-style: solid dashed; min-width: 85px">
                                        <p class="btn btn-warning rounded-0 m-0 border border-light border-1">
                                            {{ date('H:i', strtotime($schedule->startTime )).' | '.date('d-m-Y', strtotime($schedule->date)) }}
                                        </p>
                                    </a>
                                @else
                                    <a class="btn btn-warning rounded-0 p-1 m-0 me-4 border-2 border-light"
                                       data-bs-toggle="modal"
                                       data-bs-target="#loginModal"
                                       style="border-width: 2px; border-style: solid dashed; min-width: 85px">
                                        <p class="btn btn-warning rounded-0 m-0 border border-light border-1">
                                            {{ date('H:i', strtotime($schedule->startTime )).' | '.date('d-m-Y', strtotime($schedule->date)) }}
                                        </p>
                                    </a>
                                @endif
                            @endif
                        @endif
                        @if(date('Y-m-d') < $schedule->date)
                            @if(Auth::check())
                                <a href="/tickets/{{$schedule->id}}"
                                   class="btn btn-warning rounded-0 p-1 m-0 me-4 border-2 border-light"
                                   style="border-width: 2px; border-style: solid dashed; min-width: 85px">
                                    <p class="btn btn-warning rounded-0 m-0 border border-light border-1">
                                        {{ date('H:i', strtotime($schedule->startTime )).' | '.date('d-m-Y', strtotime($schedule->date)) }}
                                    </p>
                                </a>
                            @else
                                <a class="btn btn-warning rounded-0 p-1 m-0 me-4 border-2 border-light"
                                   data-bs-toggle="modal"
                                   data-bs-target="#loginModal"
                                   style="border-width: 2px; border-style: solid dashed; min-width: 85px">
                                    <p class="btn btn-warning rounded-0 m-0 border border-light border-1">
                                        {{ date('H:i', strtotime($schedule->startTime )).' - '.date('d-m-Y', strtotime($schedule->date)) }}
                                    </p>
                                </a>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

</div>
</section>
@endsection
@section('js')
<script>
    function highlightButton(button) {
        // Xóa class 'active' khỏi tất cả nút
        var buttons = document.querySelectorAll('.btn');
        buttons.forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Thêm class 'active' cho nút được nhấn
        button.classList.add('active');
    }

    function showTab(tabId) {
    // Remove 'current' class from all tabs and contents
    document.querySelectorAll('.toggle-tabs > li').forEach(tab => tab.classList.remove('current'));
    document.querySelectorAll('.collateral-tabs .tab-container').forEach(content => content.classList.remove('current'));

    // Add 'current' class to the selected tab and content
    document.querySelector(`.toggle-tabs > li[onclick="showTab('${tabId}')"]`).classList.add('current');
    document.getElementById(tabId).classList.add('current');
    }

    document.addEventListener("DOMContentLoaded", function() {
                            const allStars = document.querySelectorAll('.star');

                            allStars.forEach((star, i) => {
                                star.onclick = function() {
                                    let current_star_level = i + 1;

                                    allStars.forEach((star, j) => {
                                        if (current_star_level >= j + 1) {
                                            star.innerHTML = '&#9733;';
                                        } else {
                                            star.innerHTML = '&#9734;';
                                        }
                                    });
                                };
                            });
                        });
    function highlightButton(button) {
    // Xóa class 'active' khỏi tất cả nút
    var buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Thêm class 'active' cho nút được nhấn
    button.classList.add('active');
    }
</script>

<style>
    /* .active {
        background-color: #007bff;
        color: white;
    }  */

    .hover_movie:hover {
        color: #f26b38 !important;
    }
    .score .star {
        margin: 0 0px;
        padding: 0;
        font-size: 2.8rem;
        color: #ff9800;
        background-color: unset;
        border: none;
    }

    .score .star:hover {
        cursor: pointer;
    }
    
        /* General Styles */
    .product-collateral .toggle-tabs {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        justify-content: center;
    }

    .product-collateral .toggle-tabs > li {
        cursor: pointer;
        padding: 10px 20px;
        font-size: 16px;
        background-color: #e71a0f;
        position: relative;
        transition: background-color 0.3s ease;
        color: #fff
    }

    /* Current Tab */
    .product-collateral .toggle-tabs > li.current {
        font-weight: bold;
        background-color: #e71a0f;
    }

    .product-collateral .toggle-tabs > li.current > span{
        border: medium none;
        color: #fff;
        display: inline-block;
    }

    .product-collateral .toggle-tabs > li:not(:last-child)::after {
        content: "";
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        background: url('/images/icon/bg-tebmenu-line.gif') no-repeat center center;
        background-size: contain;
    }


    .product-collateral .toggle-tabs > li.current > span::before {
        content: "";
        display: inline-block;
        width: 30px;
        height: 20px;
        margin-right: 10px;
        background: url('/images/icon/bg-icon-finger.png') no-repeat center center;
        background-size: contain;
        vertical-align: middle;
    }

    /* Clearfix */
    .product-collateral .toggle-tabs:after {
        content: '';
        display: table;
        clear: both;
    }

    /* Content Styles */
    .product-collateral .collateral-tabs {
        margin-top: 20px;
    }

    .product-collateral .collateral-tabs .tab-container {
        display: none;
    }

    .product-collateral .collateral-tabs .tab-container.current {
        display: block;
    }

    .btn-booking {
        background: #e71a0f;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 2px 2px;
        border: none;
        color: #fff;
        font-family: Verdana, Arial, sans-serif;
        text-transform: uppercase;
        cursor: pointer;
        position: relative;
    }

    .btn-content {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #fff;
        border-radius: 5px;
        padding: 5px 10px; 
    }

    .btn-icon {
        width: 20px; 
        height: 20px;
        background: url(../images/icon/bg-cate-booking.png) no-repeat center center;
        background-size: contain;
        margin-right: 8px;
    }

    .btn-text {
        font-size: 13px;
        font-weight: bold;
    }

    .btn-booking:hover .btn-content {
        border-color: #ffd700;
    }
</style>

@endsection

