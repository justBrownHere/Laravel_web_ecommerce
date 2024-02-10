@extends('main')
@section('content')

 <!-- hero section -->
<div class="hero">
    <div class="slider">
        <div class="container">
        @foreach($sliders as $slider)
            <!-- slide item -->
            <div class="slide active">
                <div class="info">
                    <div class="info-content">
                        <h2 class="top-down">
                            {{$slider->name}}
                        </h2>
                        <h3 class="top-down trans-delay-0-2">
                            {{$slider->description}}
                        </h3>
                        <p class="top-down trans-delay-0-4">
                            {{$slider->content}}
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>Mua ngay</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img right-left">
                    <img src="{{$slider->thumb}}" alt="">
                </div>
            </div>
            <!-- end slide item -->
            @endforeach
            
        </div>
        <!-- slider controller -->
        <button class="slide-controll slide-next">
            <i class='bx bxs-chevron-right'></i>
        </button>
        <button class="slide-controll slide-prev">
            <i class='bx bxs-chevron-left'></i>
        </button>
        <!-- end slider controller -->
    </div>
</div>
<!-- end hero section -->

<!-- promotion section -->

<div class="promotion">
<div class="section-header">
            <h2>Danh mục sản phẩm</h2>
        </div>
    <div class="row">
        @foreach($menus as $menu)
        <div class="col-4 col-md-12 col-sm-12">
            <div class="promotion-box">
                <div class="text">
                    <h3>{{$menu->name}}</h3>
                    <button class="btn-flat btn-hover">
                    <a href="/shop-cuoiki/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html">
                    <span>Xem ngay</span>
                    </a>
                    </button>
                </div>
                <img src="{{$menu->thumb}}"  alt="">
            </div>
        </div>
        @endforeach
        
    </div>
</div>
<!-- end promotion section -->

<!-- special product -->
<div class="section-header">
            <h2>sản phẩm mới nhất</h2>
        </div>
<div class="bg-second">
    <div class="section container">
        <div class="row">
            <div class="col-4 col-md-4">
                <div class="sp-item-img">
                    <img src="{{$lProduct->thumb}}" alt="">
                </div>
            </div>
            <div class="col-7 col-md-8">
                <div class="sp-item-info">
                    <div class="sp-item-name">{{$lProduct->name}}</div>
                    <p class="sp-item-description">
                    {{$lProduct->description}}
                    </p>
                    <button class="btn-flat btn-hover">
                    <a href="/shop-cuoiki/san-pham/{{ $lProduct->id }}-{{ Str::slug($lProduct->name, '-') }}.html">Xem ngay</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end special product -->

<!-- product list -->
<div class="section">
    <div class="container">

        <div class="section-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div id="loadProduct">
                @include('products.list')
            </div>
    <div class="section-footer" id="button-loadMore">
        <!-- <input type="hidden" value="1" id ="page">
            <a href="" onclick="loadMore()" class="btn-flat btn-hover">Xem thêm</a>
        </div> -->
    </div>
</div>
<div class="section">
<div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.620230771055!2d108.24835911497637!3d15.981196746035783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108fec4d61cb%3A0x488a4686a8e2c948!2zMjYgTmd1eeG7hW4gVOG6oW8sIEhvw6AgSOG6o2ksIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1638978986297!5m2!1svi!2s" width="1326" height="384" style="border:0; padding-top:10px;" allowfullscreen="" loading="lazy"></iframe>

</div>
</div>
@endsection
<!-- end product list -->