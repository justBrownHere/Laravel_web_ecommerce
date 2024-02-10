
      <div class="row" id="latest-products">
        @foreach($products as $key => $product)
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
