@extends('layouts.app_backend')
@section('title','Xem thông tin sản phẩm')
@section('content')
<div class="bg-light">
    <div class="container">
        <h1 class="mb-5">Xem thông tin sản phẩm</h1>
        @include('layouts.flash_message')
        @include('backend.san_pham.form')
    </div>
</div>
@stop
