@extends('main')
@section('content')

<style>
    .result-search{
        margin: 20px 50px;
    }
</style>
<div class="container">
@if (count($data) != 0)
<div class="result-search">
    <h2>Kết quả tìm kiếm</h2><br>
    <p>Tìm thấy {{count($data)}} sản phẩm</p>
</div>
<div class="row" id="latest-products">
    @foreach($data as $product)
            <div class="col-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="{{$product->thumb}}" alt="">
            
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <button class="btn-flat btn-hover btn-shop-now">
                            <a href="/shop-cuoiki/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">Mua ngay
                            </a>
                            </button>
                            
                        </div>
                        <div class="product-card-name">
                            {{$product->name}}
                        </div>
                        <div class="product-card-price">
                        {!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    @else <div class="result-search"><h2>Không tìm thấy sản phẩm nào</h2></div>
    @endif
    </div>
@endsection