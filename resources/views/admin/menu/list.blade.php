@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width:45px">ID</th>
                <th>Tên</th>
                <th>Kích hoạt</th>
                <th>Cập nhật</th>
                <th style="width:100px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {!! \App\Helpers\Helper::menu($menus) !!}
        </tbody>
    </table>
@endsection    