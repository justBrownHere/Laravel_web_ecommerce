@extends('main')
@section('content')
<div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="{{asset('/')}}">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="/shop-cuoiki/danh-muc/{{ $product->menu->id }}-{{ Str::slug($product->menu->name) }}.html">{{$product->menu->name}}</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="/shop-cuoiki/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">{{$title}}</a>
                </div>
            </div>
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img src="{{ $product->thumb }}" alt="">
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <img src="{{ $product->thumb }}" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="{{ $product->thumb }}" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="{{ $product->thumb }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                @include('admin.alert')
                <form action="{{asset('/add-cart')}}" method="post">
                    @if ($product->price !== NULL)
                    <div class="product-info">
                        
                        <h1>
                            {{$product->name}}
                        </h1>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Danh mục:</span>
                            <a href="#">{{$product->menu->name}}</a>
                        </div>
                      
                        <p class="product-description">
                            {{$product->description}}
                        </p>
                        <div class="product-info-price">
                        {!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}
                        </div>
                        <div class="product-quantity-wrapper counter">
                            <span class=" down" onClick='decreaseCount(event, this)'>
                                -
                            </span>
                            <input class="num-product" type="number" name="num_product" value="1">
                            <span class=" up" onClick='increaseCount(event, this)'>
                               +
                            </span>
                        </div>
                        <script type="text/javascript">
                            function increaseCount(a, b) {
                                var input = b.previousElementSibling;
                                var value = parseInt(input.value, 10); 
                                value = isNaN(value)? 0 : value;
                                value ++;
                                input.value = value;
                            }
                            function decreaseCount(a, b) {
                                var input = b.nextElementSibling;
                                var value = parseInt(input.value, 10); 
                                if (value > 1) {
                                value = isNaN(value)? 0 : value;
                                value --;
                                input.value = value;
                                }
                            }
                        </script>
                            <style>
                                .counter {
                                    width: 150px;
                                    border: 1px solid rgb(230, 230, 230);
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }
                                .counter input {
                                    width: 50px;
                                    border: 0;
                                    line-height: 30px;
                                    font-size: 20px;
                                    text-align: center;
                                    background: #4b4b4b;
                                    color: #fff;
                                    appearance: none;
                                    outline: 0;
                                }
                                .counter span {
                                    display: block;
                                    font-size: 25px;
                                    padding: 0 17px;
                                    cursor: pointer;
                                    color: #4b4b4b;
                                    user-select: none;
                                }
                                input::-webkit-outer-spin-button,
                                    input::-webkit-inner-spin-button {
                                        /* display: none; <- Crashes Chrome on hover */
                                        -webkit-appearance: none;
                                        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
                                    }
                                    
                                    input[type=number] {
                                        -moz-appearance:textfield; /* Firefox */
                                    }
                            </style>
                            <button class="btn-flat btn-hover">Thêm vào giỏ hàng</button>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        </div>
                    </div>
                    @endif
                    @csrf
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    description
                </div>
                <div class="product-detail-description">
                    <!-- <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                        view all
                    </button> -->
                    <div class="product-detail-description-content">
                    <!-- <img src="{{$product->thumb}}" alt=""> -->
                        <p>
                            {{$product->content}}
                        </p>
                       
                        
                    </div>
            </div>
            
            <div class="box">
                <div class="box-header">
                    Sản phẩm khác
                </div>
                <div class="row" id="related-products">
                @include('products.list')
                </div>
            </div>
        </div>
    </div>
@endsection