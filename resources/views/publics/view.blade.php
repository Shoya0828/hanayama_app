@extends('layout')
@section('title', '商品詳細')
@section('content')
<div class="container mx-5">
  <div class="row">
    <div class="side_menu col-3">
      @include('publics.side_menu')
    </div>
    <div class="col-9">
      <div class="col-md-9 my-5 mx-3" style="height:auto;">

        <div class="row align-items-center justify-content-center pt-5">
          <div class="items_img" style="width: 20rem;">
            <img src="{{ asset('storage/item_images/' . $item->img) }}" class="card-img-top" alt="...">
          </div>
          <div class="row d-flex justify-content-center align-items-center text-align-center my-3">
            <div class="col-3">商品名 :</div>
            <div class="col-7 fs-3 fw-bold">{{ $item->name }}</div>
          </div>
          <div class="row d-flex justify-content-center text-align-center my-5">
            <div class="col-3">商品紹介:</div>
            <div class="col-7">{{ $item->detail }}</div>
          </div>

          <div class="row items_amount justify-content-center d-flex align-items-center">
            <ul class="list-group-flush mt-3" style="width:50%;">
              @foreach ($item->prices as $price)
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <!-- 商品価格 -->
                <div class="ms-1 me-auto px-3">{{ $price->weight }}<br>￥{{ $price->price }}</div>
                <form action="{{ route('add.to.cart') }}" method="POST">
                  @csrf
                  <input type="hidden" name="item_id" value="{{ $item->id }}">
                  <input type="hidden" name="price_id" value="{{ $price->id }}">

                  <input type="number" name="quantity" class="form-control" min="1" value="1">

                  <!-- 追加ボタン -->
                  <button type="submit" class="btn bg-primary" style="color:white;">カートに追加</button>
                </form>
              </li>
              @endforeach
            </ul>
          </div>
          <a type="button" href="{{ route('top') }}" class="btn btn-danger btn-lg m-5" style="width:100px;">戻る</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
