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

    <div class="progress-bar fs-6 fs-6 fw-bold" role="progressbar" style="width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お支払方法
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">ご確認
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">完了
    </div>
  </div>
</header>

<body>
  <div class="wrap mx-5">
    <div class="container">
      <div class="row pay_announce row d-flex justify-content-center align-items-center p-3 border-bottom">
        <div class="fs-4" style="text-align:center;">
          お支払い方法を選択してください
        </div>
      </div>
    </div>

    <!-- 支払選択フォーム -->
    <form action="{{ route('buy_check') }}" method="POST">
      @csrf
      <div class="pay_select mx-5 my-3">
        <div class="container">
          <div class="row mx-5 p-3">
            <div class="col-4"></div>
            <div class="col text-right">
              <input type="radio" name="test" value="代金引換" placeholder="代金引換" style="transform:scale(2.0);">
            </div>
            <div class="col-7">
              代金引換
            </div>
          </div>
          @guest
          <input type="hidden" name="customer_name_sei" value="{{ $customer_name_sei }}">
          <input type="hidden" name="customer_name_mei" value="{{ $customer_name_mei }}">
          <input type="hidden" name="customer_post" value="{{ $customer_post }}">
          <input type="hidden" name="customer_prefecture" value="{{ $customer_prefecture }}">
          <input type="hidden" name="customer_city" value="{{ $customer_city }}">
          <input type="hidden" name="customer_others" value="{{ $customer_others }}">
          <input type="hidden" name="customer_tell" value="{{ $customer_tell }}">
          <input type="hidden" name="customer_email" value="{{ $customer_email }}">

          @endguest


          <div class="d-flex justify-content-center">
            <button type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">内容のご確認へ</a>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>

  <!-- 
    <div class="my-5 row">
      <div class="col"></div>
      <label for="inputPost" class="col-3 col-form-label">クーポン（任意）</label>
      <div class="col-4">
        <input type="text" class="form-control" id="inputPost" placeholder="クーポン番号">
      </div>
      <div class="col"></div>
    </div> -->
</body>

</html>