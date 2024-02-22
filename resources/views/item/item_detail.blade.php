@extends('main')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('title','商品介紹')

@section('content')
<div class="item-section">
    <div class="container-md">
        <div class="row item-detail">
            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-6 item-img">
                <a class="product-item" href="#"> <!-- 增加商品獨立頁面 -->
                    <img src="images/product-3.png" class="img-fluid product-thumbnail">
                </a>
            </div> 

            <div class="col-12 col-md-6 col-lg-6 detail-section">
                <h1>商品名稱</h1>
                <h2>商品價格</h2>
                <div class="item-description">
                    <p>商品描述</p>
                </div>
                <button class="add-to-cart">Add To Cart</button>
            </div>
            <!-- End Column 1 -->
        </div>
    </div>
</div>
@endsection