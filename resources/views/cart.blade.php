@extends('layout')
@section('title','カート')
@section('content')

<div class="container">
  <!-- 題目-購入商品 -->
  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="row m-4">
        <div class="col-4 fs-4 fw-bold">購入商品</div>
        <div class="col"></div>
      </div>
    </div>
  </div>
  <!-- 項目 -->
  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="row p-2 border-top border-bottom">
        <div class="col-4 text-center" style="color:grey;">商品名</div>
        <div class="col text-center" style="color:grey;">価格</div>
        <div class="col"></div>
        <div class="col text-center" style="color:grey;">個数</div>
        <div class="col"></div>
        <div class="col-2 text-center" style="color:grey;">小計</div>
        <div class="col text-center" style="color:grey;">削除</div>

      </div>
      @foreach ($cartItems as $cartItem)
      <div class="row mt-5 px-5 border-bottom">
        <div class="col-4">
          <div class="row d-flex align-items-center">
            <div class="col-5 d-flex justify-content-center align-items-center items_img m-2" style="width: 40%;">
              <img src="/img/白菜キムチ.jpg" class="card-img-top" alt="IMG">
            </div>
            <div class="col items_name d-flex align-items-center">{{ $cartItem->item->name }}</div> <!-- カートに追加された商品の名前を表示 -->
          </div>
        </div>
        <div class="col d-flex align-items-center">
          <div class="col items_name d-flex justify-content-center">￥{{ $cartItem->price->price }}</div> <!-- カートに追加された商品の価格を表示 -->
        </div>
        <div class="col"></div>
        <div class="col-2 d-flex align-items-center">
          <div class="col items_name d-flex justify-content-center align-items-center">{{ $cartItem->quantity }}</div> <!-- カートに追加された商品の個数を表示 -->
        </div>
        <div class="col"></div>
        <div class="col-2 d-flex align-items-center">
          <div class="col items_name d-flex justify-content-center align-items-center">￥{{ $cartItem->price->price * $cartItem->quantity }}</div> <!-- カートに追加された商品の小計を表示 -->
        </div>

        <div class="col d-flex align-items-center">
          <form action="{{ route('remove.from.cart') }}" method="POST">
            @csrf
            <input type="hidden" name="cart_item_id" value="{{ $cartItem->id }}">
            <button type="submit" class="btn btn-danger">削除</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @if(count($cartItems) > 0)
  @guest
  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="d-flex justify-content-center m-4">
        <a href="{{ route('login') }}" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">ログインして購入する</a>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="d-flex justify-content-center m-4">
        <a href="{{ route('buy') }}" type="submit" id="button" name="confirm" class="form-control btn btn-secondary btn-lg" style="width:250px">ゲスト購入する</a>
      </div>
    </div>
  </div>
  @else
  @if(session('user'))
  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="d-flex justify-content-center m-4">
        <a href="{{ route('buy') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg" style="width:250px">購入する</a>
        @endif
      </div>
    </div>
  </div>
  @endif
  @endguest


  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="d-flex justify-content-center m-4">
        <a href="{{ route('top') }}" type="submit" id="button" name="confirm" class="form-control btn mb-5" style="width:250px; color:#00bfff;">ショッピングを続ける</a>
      </div>
    </div>
  </div>
</div>

@endsection