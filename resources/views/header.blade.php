<!-- header -->
<header>
@php $menusHtml = \App\Helpers\Helper::menus($menus); @endphp
        <!-- mobile menu -->
        <div class="mobile-menu bg-second">
            <a href="/" class="mb-logo">ATShop</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <!-- top header -->
            <div class="bg-second">
                <div class="top-header container">
                    <ul class="devided">
                        <li>
                            <a href="#">0123456789</a>
                        </li>
                        <li>
                            <a href="#">atshop@vku.udn.com</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <!-- end top header -->
            <!-- mid header -->
            <div class="bg-main">
                <div class="mid-header container">
                    <a href="{{asset('/')}}" class="logo">ATShop</a>
                   <form action="{{asset('/search')}}" method="GET">
                   {{csrf_field()}}
                    <div class="search">
                        <input type="text" name="key" placeholder="Tìm kiếm" required>
                        <button type="submit" name ="search_items">
                        <i class='bx bx-search-alt'></i>
                        </button>
                    </div>
                    </form>
                    <ul class="user-menu" >
                        <li>
                            <a href="{{asset('/carts')}}">
                            @if(!is_null(\Session::get('carts')))
                                <i class='bx bx-cart icon-button'><span class="icon-button__badge">{{ count(\Session::get('carts')) }}</span></i>
                                <style>
                                    .icon-button {
                                    position: relative;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 50px;
                                    height: 50px;
                                    color: #333333;
                                    background: #dddddd;
                                    border: none;
                                    outline: none;
                                    border-radius: 50%;
                                    }
                                
                                    .icon-button:hover {
                                        cursor: pointer;
                                    }
                                    
                                    .icon-button:active {
                                        background: #cccccc;
                                    }
                                    
                                    .icon-button__badge {
                                        position: absolute;
                                        top: -10px;
                                        right: -10px;
                                        width: 25px;
                                        height: 25px;
                                        background: red;
                                        color: #ffffff;
                                        display: flex;
                                        justify-content: center;
                                        
                                        border-radius: 50%;
                                        font-size:20px;
                                    }
                                </style>
                            @else
                            <i class='bx bx-cart icon-button'><span class="icon-button__badge"></span></i>
                            <style>
                                .icon-button {
                                    position: relative;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 50px;
                                    height: 50px;
                                    color: #333333;
                                    background: #dddddd;
                                    border: none;
                                    outline: none;
                                    border-radius: 50%;
                                    }
                                    .icon-button:hover {
                                        cursor: pointer;
                                    }
                            </style>
                            @endif    
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                        <li><a href="{{asset('/')}}">Trang chủ</a></li>
                        <!-- mega menu -->
                        {!! $menusHtml !!}
                        <!-- end mega menu -->
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>
    <!-- end header -->