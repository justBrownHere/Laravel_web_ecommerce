@extends('main')
@section('content')
 <!-- products content -->
 <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="{{asset('/')}}">home</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="">{{$title}}</a>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    <div class="col-3 filter-col" id="filter-col">
                        <div class="box filter-toggle-box">
                            <button class="btn-flat btn-hover" id="filter-close">close</button>
                        </div>
                        <div class="box">
                            <span class="filter-header">
                                Bộ lọc
                            </span>
                            <ul class="filter-list">
                                <li><a href="{{ request()->url() }}">Mặc định</a></li>
                                <li>
                                    <a href="{{ request()->fullUrlWithQuery(['price' => 'asc']) }}">Giá từ thấp lên cao</a>
                                </li>
                                <li>
                                    <a href="{{ request()->fullUrlWithQuery(['price' => 'desc']) }}">Giá từ cao xuống thấp</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-9 col-md-12 ">
                        <div class="box filter-toggle-box">
                            <button class="btn-flat btn-hover" id="filter-toggle">filter</button>
                        </div>
                            @include('products.list')
                            <div class="card-footer clearfix">
                            {!! $products->links() !!}
                            <style>
                                .hidden {
                                    display: none;
                                }
                                .pl-4, .px-4 {
                                padding-left: 1.5rem!important;
                               padding-right: 1.5rem!important;

                            }
                            .pb-2, .py-2 {
                                padding-bottom: 0.5rem!important;
                                padding-top: 0.5rem!important;
                                }
                            .border {
                                border: 1px solid #dee2e6!important;
                                }
                            .ml-3, .mx-3 {
                                margin-left: 1rem!important;
                            }
                            .card-footer {
                                padding: 0.75rem 1.25rem;
                                
                                border-top: 0 solid rgba(0,0,0,.125);
                            }
                            </style>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- end products content -->
@endsection
