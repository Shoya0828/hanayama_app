@extends('admins.layout_admin')
@section('title','管理者商品一覧')
@section('content')


<div class="container">
  <div class="row">
    <div class="col bg-warning d-flex justify-content-center align-items-center fw-bold fs-4" style="width: 100%; height:60px; color:white;">
      商品管理
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="d-flex justify-content-center">
      <a href="{{ route('items_add') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">商品を追加する</a>
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row border-bottom border-top">
    <div class="col"></div>
    <div class="col-2 text-center">商品ID</div>
    <div class="col-2 text-center">商品名</div>
    <div class="col-2 text-center">画像</div>
    <!-- <div class="col-3 text-center">価格帯</div> -->
    <!-- <div class="col-1 text-center">編集</div> -->
    <div class="col-1 text-center">削除</div>
    <div class="col"></div>
  </div>
  @foreach($items as $item)
  <div class="row border-bottom">
    <div class="col"></div>
    <div class="col-2 text-center">{{ $item->id }}</div>
    <div class="col-2 text-center">{{ $item->name }}</div>
    <div class="col-2 text-center">{{ $item->img }}</div>
    <!-- <div class="col-3 text-center">{{ $item->price }}</div> -->
    <!-- <div class="col-1 text-center"><a href="{{ route('items_edit', ['id' => $item->id]) }} }}">編集</a></div> -->
    <div class="col-1 text-center">
      <form action="{{ route('items_delete', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">削除</button>
      </form>
    </div>
    <div class="col"></div>
  </div>
  @endforeach
  <div class="row">
    <div class="d-flex justify-content-center my-5 p-3">
      <a href="{{ route('admin.top') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width: auto">戻る</a>
    </div>
  </div>
</div>
@endsection