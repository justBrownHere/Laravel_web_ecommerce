@extends('main')

@section('content')
    <style>
        .border{
            margin:auto;
        }
        .total{
            display: flex;
            padding:10px 0;
        }
        .anh{
            margin-left:25px;

        }
        .update-cart{
            margin-left:25px;
        }
        
        .list-cart{
            position: relative;
        }
        .delete{
            position: absolute;
            float: right; 
            bottom:36%;
            right:20px;
        }
        .delete button{
            width:50px;
            height: 30px;
        }
        .container {max-width: 1380px;}

                @media (max-width: 1600px) {
                .container {max-width: 1200px;}
                }
                /*//////////////////////////////////////////////////////////////////
                [ Table Shopping Cart ]*/

                .wrap-table-shopping-cart {
                overflow: auto;
                border-left: 1px solid #e6e6e6;
                border-right: 1px solid #e6e6e6;
                }

                .table-shopping-cart {
                border-collapse: collapse;
                width: 100%;
                min-width: 680px;
                }

                .table-shopping-cart tr {
                border-top: 1px solid #e6e6e6;
                border-bottom: 1px solid #e6e6e6;
                text-align: center;
                }

                .table-shopping-cart .column-1 {
                width: 133px;
               
                }

                .table-shopping-cart .column-2 {
                width: 220px;
                font-size: 15px;
                }

                .table-shopping-cart .column-3 {
                width: 120px;
                font-size: 16px;
                }

                .table-shopping-cart .column-4 {
                width: 145px;
                text-align: right;
                }

                .table-shopping-cart .column-5 {
                width: 172px;
                padding-right: 50px;
                text-align: center;
                font-size: 16px;
                }

                .table-shopping-cart .table_row {
                height: 185px;
                }

                .table-shopping-cart .table_row td {
                padding-bottom: 20px;
                }

                .table-shopping-cart .table_row td.column-1 {
                padding-bottom: 30px;
                }

                .table-shopping-cart .table_head th {
                text-align: center;
                font-size: 13px;
                color: #555;
                text-transform: uppercase;
                line-height: 1.6;
                padding-top: 15px;
                padding-bottom: 15px;
                }

                .table-shopping-cart td {
               
                color: #555;
                line-height: 1.6;
                }
                .table-shopping-cart td .p-r-15 a{
                    padding-right:10px;
                }
                /*==================================================================
                    SIZE SIZE SIZE SIZE SIZE SIZE SIZE SIZE SIZE SIZE SIZE SIZE SIZE 
                ==================================================================*/


                /*//////////////////////////////////////////////////////////////////
                [ Size ]*/
                .size-101 {
                min-width: 161px;
                height: 46px;
                }

                .size-102 {
                min-width: 139px;
                height: 40px;
                }

                .size-103 {
                min-width: 179px;
                height: 46px;
                }

                .size-104 {
                min-width: 94px;
                height: 40px;
                }

                .size-105 {
                min-width: 111px;
                height: 40px;
                }

                .size-106 {
                width: 88px;
                height: 100%;
                }

                .size-107 {
                min-width: 145px;
                height: 40px;
                }

                .size-108 {
                width: 40px;
                height: 40px;
                }

                .size-109 {
                width: 60px;
                height: 60px;
                }

                .size-110 {
                width: 100%;
                min-height: 100px;
                }

                .size-111 {
                width: 100%;
                height: 40px;
                }

                .size-112 {
                min-width: 134px;
                height: 43px;
                }

                .size-113 {
                width: 38px;
                height: 60px;
                }

                .size-114 {
                width: calc(100% - 38px);
                height: 60px;
                }

                .size-115 {
                min-width: 185px;
                height: 45px;
                }

                .size-116 {
                width: 100%;
                height: 50px;
                }

                .size-117 {
                width: 220px;
                height: 45px;
                }

                .size-118 {
                min-width: 163px;
                height: 45px;
                }

                .size-119 {
                min-width: 111px;
                height: 40px;
                }

                .size-120 {
                width: 100%;
                min-height: 199px;
                }

                .size-121 {
                width: 100%;
                height: 46px;
                }

                .size-122 {
                width: 55px;
                height: 100%;
                }

                .size-123 {
                width: 70px;
                min-height: 70px;
                }

                .size-124 {
                width: 100%;
                min-height: 150px;
                }

                .size-125 {
                min-width: 180px;
                height: 40px;
                }

                /*//////////////////////////////////////////////////////////////////
                [ Width ]*/
                .size-201 {
                max-width: 270px;
                }

                .size-202 {
                width: calc(100% / 3);
                }

                .size-203 {
                width: 105px;
                }

                .size-204 {
                width: calc(100% - 105px);
                }

                .size-205 {
                width: 145px;
                }

                .size-206 {
                width: calc(100% - 145px);
                }

                .size-207 {
                width: calc(100% - 78px);
                }

                .size-208 {
                width: 34.5%;
                }

                .size-209 {
                width: 65.5%;
                }

                .size-210 {
                width: 50%;
                }

                .size-211 {
                width: 60px;
                }

                .size-212 {
                width: calc(100% - 60px);
                }

                .size-213 {
                max-width: 245px;
                }

                .size-214 {
                width: 90px;
                }

                .size-215 {
                width: calc(100% - 110px);
                }

                .size-216 {
                width: 55px;
                }

                .size-217 {
                width: calc(100% - 55px);
                }

                .size-218 {
                max-width: 286px;
                }

                .bor0 {border-radius: 50%;}

                .bor1 {
                border-radius: 23px;
                }

                .bor2 {
                border-radius: 20px;
                }

                .bor3 {
                border-bottom: 1px solid transparent;
                }

                .bor4 {
                border: 1px solid #e6e6e6;
                border-radius: 3px;
                }

                .bor5 {
                border-left: 1px solid #e5e5e5;
                border-right: 1px solid #e5e5e5;
                }

                .bor6 {border-right: 1px solid rgba(255,255,255,0.1);}

                .bor7 {
                border: 1px solid #ccc;
                border-radius: 15px;
                }

                .bor8 {
                border: 1px solid #e6e6e6;
                border-radius: 2px;
                }

                .bor9 {
                border-right: 1px solid #e6e6e6;
                }

                .bor10 {
                width: 250px;
                }

                .bor11 {
                border-radius: 21px;
                }

                .bor12 {
                
                }

                .bor13 {
                border: 1px solid #e6e6e6;
                border-radius: 22px;
                }

                .bor14 {
                border-radius: 25px;
                }

                .bor15 {
                border-left: 1px solid #e6e6e6;
                border-right: 1px solid #e6e6e6;
                border-bottom: 1px solid #e6e6e6;
                }

                .bor16 {
                border-left: 3px solid #e6e6e6;
                }

                .bor17 {
                border: 1px solid #e6e6e6;
                border-radius: 25px;
                }

                /*---------------------------------------------*/
                .bor18 {
                border-top: 1px solid #e6e6e6;
                }

                .bor18:last-child {
                border-bottom: 1px solid #e6e6e6;
                }

                /*---------------------------------------------*/
                .bor19 {
                border: 1px solid #d9d9d9;
                border-radius: 2px;
                }
                .m-all-1 {margin-top: 1px;}
                    .m-tb-4 {margin-top: 4px;}
                    .m-tb-5 {margin-top: 5px;}
                    .m-t-6 {margin-top: 6px;}
                    .m-all-7 {margin-top: 7px;}
                    .m-t-9 {margin-top: 9px;}
                    .m-tb-10 {margin-top: 10px;}
                    .m-t-22 {margin-top: 22px;}
                    .m-t-23 {margin-top: 23px;}
                    .m-t-50 {margin-top: 50px;}
                    .m-t-73 {margin-top: 73px;}
                    .m-all-1 {margin-bottom: 1px;}
                    .m-tb-4 {margin-bottom: 4px;}
                    .m-b-5, .m-tb-5 {margin-bottom: 5px;}
                    .m-all-7 {margin-bottom: 7px;}
                    .m-b-10, .m-tb-10 {margin-bottom: 10px;}
                    .m-b-12 {margin-bottom: 12px;}
                    .m-b-18 {margin-bottom: 18px;}
                    .m-b-20 {margin-bottom: 20px;}
                    .m-b-22 {margin-bottom: 22px;}
                    .m-b-30 {margin-bottom: 30px;}
                    .m-b-50 {margin-bottom: 50px;}
                    .m-all-1 {margin-left: 1px;}
                    .m-l-4 {margin-left: 4px;}
                    .m-all-7 {margin-left: 7px;}
                    .m-l-9 {margin-left: 9px;}
                    .m-l-25 {margin-left: 25px;}
                    .m-l-63 {margin-left: 63px;}
                    .m-r-0 {margin-right: 0px;}
                    .m-all-1 {margin-right: 1px;}
                    .m-r-3 {margin-right: 3px;}
                    .m-r-5 {margin-right: 5px;}
                    .m-r-6 {margin-right: 6px;}
                    .m-all-7 {margin-right: 7px;}
                    .m-r-8 {margin-right: 8px;}
                    .m-r-10 {margin-right: 10px;}
                    .m-r-11 {margin-right: 11px;}
                    .m-r-15 {margin-right: 15px;}
                    .m-r-16 {margin-right: 16px;}
                    .m-r-18 {margin-right: 18px;}
                    .m-r-20 {margin-right: 20px;}
                    .m-r-32 {margin-right: 32px;}
                    .m-r-40 {margin-right: 0px;}
                    .m-lr--7 {margin-left: -7px;}
                    .m-r--5 {margin-right: -5px;}
                    .m-lr--7 {margin-right: -7px;}
                    .m-r--38 {margin-right: -38px;}

                   
                /*//////////////////////////////////////////////////////////////////
                [ Height ]*/
                .size-301 {
                min-height: 30px;
                }

                .size-302 {
                min-height: 80px;
                }

                .size-303 {
                height: 390px;
                }


                /*==================================================================
                BACKGROUND BACKGROUND BACKGROUND BACKGROUND BACKGROUND BACKGROUND 
                ==================================================================*/
                .bg-none {background-color: transparent;}
                .bg0 {background-color: #fff;}
                .bg1 {background-color: #717fe0;}
                .bg2 {background-color: #e6e6e6;}
                .bg3 {background-color: #f3f3f3;}
                .bg5 {background-color: rgba(0,0,0,0.5);}
                .bg6 {background-color: #f2f2f2;}
                .bg7 {background-color: #333;}
                .bg8 {background-color: #f3f3f3;}
                .bg9 {background-color: rgba(255,255,255,0.9);}

                /*---------------------------------------------*/
                .bg-overlay1::before {
                content: "";
                position: absolute;
                z-index: -100;
                display: block;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-color: #000;
                opacity: 0.5;
                }

                /*---------------------------------------------*/
                .bg-img1 {
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                }




                /*==================================================================
                    BORDER BORDER  BORDER  BORDER  BORDER  BORDER  BORDER  BORDER
                ==================================================================*/
                .bor0 {border-radius: 50%;}

                .bor1 {
                border-radius: 23px;
                }

                .bor2 {
                border-radius: 20px;
                }

                .bor3 {
                border-bottom: 1px solid transparent;
                }

                .bor4 {
                border: 1px solid #e6e6e6;
                border-radius: 3px;
                }

                .bor5 {
                border-left: 1px solid #e5e5e5;
                border-right: 1px solid #e5e5e5;
                }

                .bor6 {border-right: 1px solid rgba(255,255,255,0.1);}

                .bor7 {
                border: 1px solid #ccc;
                border-radius: 15px;
                }

                .bor8 {
                border: 1px solid #e6e6e6;
                border-radius: 2px;
                }

                .bor9 {
                border-right: 1px solid #e6e6e6;
                }

                .bor10 {
                
                }

                .bor11 {
                border-radius: 21px;
                }

                .bor12 {
               
                }

                .bor13 {
                border: 1px solid #e6e6e6;
                border-radius: 22px;
                }

                .bor14 {
                border-radius: 25px;
                }

                .bor15 {
                border-left: 1px solid #e6e6e6;
                border-right: 1px solid #e6e6e6;
                border-bottom: 1px solid #e6e6e6;
                }

                .bor16 {
                border-left: 3px solid #e6e6e6;
                }

                .bor17 {
                border: 1px solid #e6e6e6;
                border-radius: 25px;
                }

                /*---------------------------------------------*/
                .bor18 {
                border-top: 1px solid #e6e6e6;
                }

                .bor18:last-child {
                border-bottom: 1px solid #e6e6e6;
                }

                /*---------------------------------------------*/
                .bor19 {
                border: 1px solid #d9d9d9;
                border-radius: 2px;
                }

    </style>
    <form class="bg0 p-t-130 p-b-85" method="post">
        @include('admin.alert')
        @if (count($products) != 0)
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                @php $total = 0; @endphp
                                <table class="table-shopping-cart">
                                    <tbody>
                                    <tr class="table_head">
                                        <th class="column-1">Sản phẩm</th>
                                        <th class="column-2"></th>
                                        <th class="column-3">Giá</th>
                                        <th class="column-4">Số lượng</th>
                                        <th class="column-5">Tổng</th>
                                        <th class="column-6">&nbsp;</th>
                                    </tr>
                                    @foreach($products as $key => $product)
                                        @php
                                            $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                                            $priceEnd = $price * $carts[$product->id];
                                            $total += $priceEnd;
                                        @endphp
                                        <tr class="table_row list-cart">
                                            <td class="column-1">
                                                <div class="how-itemcart1 anh">
                                                    <img src="{{ $product->thumb }}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{ $product->name }}</td>
                                            <td class="column-3">{{ number_format($price, 0, '', '.') }}</td>
                                            <td class="column-4">
                                            <div class="product-quantity-wrapper counter">
                            <span class=" down" onClick='decreaseCount(event, this)'>
                                -
                            </span>
                            <input class="num-product" type="number" name="num_product[{{ $product->id }}]" value="{{ $carts[$product->id] }}">
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
                                            </td>
                                            <td class="column-5">{{ number_format($priceEnd, 0, '', '.') }}</td>
                                            <td class="p-r-15 delete">
                                                <button>
                                                <a href="/shop-cuoiki/carts/delete/{{ $product->id }}">Xóa</a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <input type="submit" value="Cập nhật giá" formaction="/shop-cuoiki/update-cart"
                                    class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 update-cart">
                                @csrf
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm border">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Tổng
                            </h4>

                            <div class="flex-w flex-t p-t-27 p-b-33 total">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Đặt hàng:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2" id="cost_total">
                                        {{ number_format($total, 0, '', '.') }}
                                    </span>
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">

                                <div class="size-100 p-r-18 p-r-0-sm w-full-ssm">

                                    <div class="p-t-15">
                                        <span class="stext-112 cl8">
                                            Thông Tin Khách Hàng
                                        </span>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Tên khách Hàng">
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="Số Điện Thoại">
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Địa Chỉ Giao Hàng">
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="Email Liên Hệ">
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <textarea class="cl8 plh3 size-111 p-lr-15" name="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" id="paypal-button">
                               
                            </button>
                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                               Đặt Hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    @else
        <div class="text-center"><h2>Giỏ hàng trống</h2></div>
    @endif
@endsection