@extends('main')

@section('title','新增商品')

@section('content')
{{-- 設計表格讓後臺可以新增商品 --}}
<h2>新增商品</h2>
<form action="{{ route('item.shop') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="item_id">商品編號</label>
        <input type="text" class="form-control" id="item_id" name="item_id" required>
    </div>
    <div class="form-group">
        <label for="title">商品名稱</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="price">商品價格</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group mb-3">
        <label for="intro">商品描述</label>
        <textarea class="form-control" id="intro" name="intro" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="num">商品數量</label>
        <input type="number" class="form-control" id="num" name="num" required>
    </div>
    <div class="form-group">
        <label for="category_id">商品分類</label>
        <select class="form-control" id="category_id" name="category_id" required>
            <option value="1">家具</option>
            <option value="2">裝飾品</option>
            <option value="3">廚房用品</option>
        </select>
    </div>
    <div class="form-group">
        <label for="available">商品狀況</label>
        <select class="form-control" id="available" name="available" required>
            <option value="1">上架</option>
            <option value="0">下架</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">新增</button>
</form>
@endsection