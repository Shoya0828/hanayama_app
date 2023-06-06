<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/hanayama.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>ゲスト購入情報入力</title>
</head>

<header>
  <!-- ヘッダー -->
  <nav class="header-top navbar navbar-expand-lg" style="height: 200px;">

    <!-- ヘッダーロゴ -->
    <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('top') }}" style="margin: 0 auto"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;"></a>
  </nav>

  <div class="progress mx-5 mb-5" style="height: 50px;">
    <div class="progress-bar fs-6" role="progressbar" style="width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お客様情報
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お支払方法
    </div>

    <div class="progress-bar fs-6 fw-bold" role="progressbar" style="width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">ご確認
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">完了
    </div>
  </div>
</header>

<body>

  <form action="{{ route('buy_done') }}" method="POST">
    @csrf
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
          <div class="col-2 text-center" style="color:grey;">価格</div>
          <div class="col"></div>
          <div class="col-2 text-center" style="color:grey;">個数</div>
          <div class="col"></div>
          <div class="col-2 text-center" style="color:grey;">小計</div>
        </div>
      </div>
    </div>


    <div class="container my-5">
      <!-- 注文商品 -->
      <div class="container mt-5 px-5">
        @foreach ($cartItems as $cartItem)
        <div class="row mt-5 px-5 border-bottom">
          <div class="col-4">
            <div class="row d-flex align-items-center">
              <div class="col-5 d-flex justify-content-center align-items-center items_img m-2" style="width: 40%;">
                <img src="/img/白菜キムチ.jpg" class="card-img-top" alt="IMG">
              </div>
              <div class="col items_name d-flex align-items-center">{{ $cartItem->item->name }}</div>
            </div>
          </div>
          <div class="col-2 d-flex align-items-center">
            <div class="col items_name d-flex justify-content-center">￥{{ $cartItem->price->price }}</div>
          </div>
          <div class="col"></div>
          <div class="col-2 d-flex align-items-center">
            <div class="col items_name d-flex justify-content-center align-items-center">{{ $cartItem->quantity }}</div>
          </div>
          <div class="col"></div>
          <div class="col-2 d-flex align-items-center">
            <div class="col items_name d-flex justify-content-center align-items-center">￥{{ $cartItem->price->price * $cartItem->quantity }}</div>
          </div>
        </div>
        @endforeach

      </div>
    </div>

    <div class="container px-5 mt-5">
      <div class="row">
        <div class="col-8"></div>
        <div class="col-2">送料</div>
        <div class="col text-right">
          <div class="col price d-flex justify-content-center text-right">￥0</div>
        </div>
      </div>
    </div>

    <div class="container px-5 mt-3">
      <div class="row">
        <div class="col-8"></div>
        <div class="col-2">支払手数料</div>
        <div class="col text-right">
          <div class="col price d-flex justify-content-center text-right">￥500</div>
        </div>
      </div>
    </div>

    <div class="container px-5 mt-3">
      <div class="row text-right">
        <div class="col-8"></div>
        <div class="col-2">合計</div>
        <div class="col">
          <div class="col price d-flex justify-content-center text-right">￥{{ $totalPrice + 500 }}</div>
        </div>
      </div>
    </div>


    <!-- 題目-お客様情報 -->
    <div class="container my-5">
      <div class="container mt-5 px-5">
        <div class="row m-4">
          <div class="col-4 fs-4 fw-bold">お客様情報</div>
          <div class="col-6"></div>
          @guest
          <div class="col">
            <a href="{{ route('buy') }}" type="submit" id="button" name="confirm" class="form-control btn btn-secondary" style="width:100px;">修正する</a>
          </div>
          @endguest
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-top border-bottom">
          <div class="col-3 d-flex text-left">お名前</div>
          <div class="col-4 text-left">{{ $customerNameSei }} {{ $customerNameMei }}</div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-bottom">
          <div class="col-3 d-flex text-left">ご住所</div>
          <div class="col-4 d-flex text-left">〒{{ $customerPost }}<br>{{ $customerPrefecture }}{{ $customerCity }}{{ $customerOthers }}</div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-bottom">
          <div class="col-3 d-flex text-left">電話番号</div>
          <div class="col-4 d-flex text-left">{{ $customerTell }}</div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-bottom">
          <div class="col-3 d-flex text-left">メールアドレス</div>
          <div class="col-4 d-flex text-left">{{ $customerEmail }}</div>
        </div>
      </div>
    </div>
    </div>

    <!-- 題目-支払方法 -->
    <div class="container my-5">
      <div class="container mt-5 px-5">
        <div class="row m-4">
          <div class="col-4 fs-4 fw-bold">お支払方法</div>
          <div class="col-6"></div>
          <div class="col">
            <a href="{{ route('guest_pay') }}" type="submit" id="button" name="confirm" class="form-control btn btn-secondary" style="width:100px;">修正する</a>
          </div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-top border-bottom">
          <div class="col-3 d-flex text-left">お支払方法</div>
          <div class="col-4 d-flex text-left">代金引換</div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-bottom">
          <div class="col-3 d-flex text-left">クーポン</div>
          <div class="col-4 d-flex text-left">なし</div>
        </div>
      </div>
    </div>


    <!-- 題目-同意 -->
    <div class="container my-5">
      <div class="container mt-5 px-5">
        <div class="row m-4">
          <div class="col d-flex justify-content-center">
            <div class="form-check d-flex text-center">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
              <label class="form-check-label" for="flexCheckIndeterminate">
                以下に同意する
              </label>
            </div>
          </div>
        </div>

        <div class="row m-4">
          <div class="col d-flex justify-content-center">
            <a style="color:aqua;">韓国食品店　華山　の利用規約</a>
            <a>　と　</a>
            <a style="color:aqua;">プライバシーポリシー</a>
          </div>
        </div>
        @guest
        <input type="hidden" name="customer_name_sei" value="{{ $customerNameSei }}">
        <input type="hidden" name="customer_name_mei" value="{{ $customerNameMei }}">
        <input type="hidden" name="customer_post" value="{{ $customerPost }}">
        <input type="hidden" name="customer_prefecture" value="{{ $customerPrefecture }}">
        <input type="hidden" name="customer_city" value="{{ $customerCity }}">
        <input type="hidden" name="customer_others" value="{{ $customerOthers }}">
        <input type="hidden" name="customer_tell" value="{{ $customerTell }}">
        <input type="hidden" name="customer_email" value="{{ $customerEmail }}">
        @endguest
        <div class="d-flex justify-content-center m-4">
          <button type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">注文する</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>