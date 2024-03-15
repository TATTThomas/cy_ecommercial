@extends('main')

@section('title','新增商品')

@section('content')
{{-- 設計表格讓後臺可以新增商品 --}}
<h2>編輯商品 -- {{ $item->title }}</h2>
<form action="{{ route('item.update', ['item' => $item->id ]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="item_id">商品編號</label>
        <input type="text" class="form-control" id="item_id" name="item_id" value="{{ $item->item_id }}">
    </div>
    <div class="form-group">
        <label for="title">商品名稱</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}">
    </div>
    <div class="form-group">
        <label for="price">商品價格</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $item->price}}">
    </div>
    <div class="form-group mb-3">
        <label for="intro">商品描述</label>
        <textarea class="form-control" id="intro" name="intro" rows="3">{{ $item->intro}}</textarea>
    </div>
    <div class="form-group">
        <label for="num">商品數量</label>
        <input type="number" class="form-control" id="num" name="num" value="{{ $item->num }}">
    </div>
    <div class="form-group">
        <label for="category_id">商品分類</label>
        <select class="form-control" id="category_id" name="category_id">
            <option value="1" {{ $item->category_id == 1 ? 'selected': ''}}>家具</option>
            <option value="2" {{ $item->category_id == 2 ? 'selected': ''}}>裝飾品</option>
            <option value="3" {{ $item->category_id == 3 ? 'selected': ''}}>廚房用品</option>
        </select>
    </div>
    <div class="form-group">
        <label for="available">商品狀況</label>
        <select class="form-control" id="available" name="available">
            <option value="1" {{ $item->available == 1 ? 'selected': ''}}>上架</option>
            <option value="0" {{ $item->available == 0 ? 'selected': ''}}>下架</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">修改</button>
</form>
@endsection