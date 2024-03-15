@extends('main')

@section('title','商品列表')

@section('content')
{{-- 將所有的商品呈現在此page --}}
<h2>商品列表</h2>
<div class="container-md">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">商品ID:{{ $item->item_id }}</h6>
                    <h5 class="card-text">商品名稱:{{ $item->title}}</h5>
                    <p class="card-text">{{ $item->intro }}</p>
                    <p class="card-text">{{ $item->price }}</p>
                    <p class="card-text">{{ $item->num }}</p>
                    <p class="card-text">{{ $item->category_id }}</p>
                    <p class="card-text">{{ $item->available }}</p>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection