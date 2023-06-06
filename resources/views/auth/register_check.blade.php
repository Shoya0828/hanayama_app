<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/hanayama.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>会員登録情報確認</title>
</head>

<body>
  @csrf
  <!-- ヘッダー -->
  <header>
    <nav class="header-top navbar navbar-expand-lg" style="height: 200px;">
      <!-- ヘッダーロゴ -->
      <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('top') }}" style="margin: 0 auto">
        <img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;">
      </a>
    </nav>

    <!-- ステータス -->
    <div class="progress mx-5 mb-5" style="height: 50px;">
      <div class="progress-bar fs-6" role="progressbar" style="width: 33%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お客様情報</div>
      <div class="progress-bar fs-6 fw-bold" role="progressbar" style="width: 34%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">ご確認</div>
      <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 33%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">完了</div>
    </div>
  </header>

  <!-- 題目-お客様情報 -->
  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="row m-4">
        <div class="col-4 fs-4 fw-bold">お客様情報</div>
        <div class="col-6"></div>
        <div class="col">
          <a href="{{ route('register_edit') }}" class="form-control btn btn-secondary" style="width:100px;">再入力</a>
        </div>
      </div>
    </div>

    <form action="{{ route('register_done') }}" method="POST">
      @csrf
      <div class="container px-5">
        <div class="row p-2 p-4 border-top border-bottom">
          <div class="col-3 d-flex text-left">お名前</div>
          <div class="col-4 text-left">{{ $inputs['name_sei'] }}{{ $inputs['name_mei'] }}</div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-bottom">
          <div class="col-3 d-flex text-left">ご住所</div>
          <div class="col-4 d-flex text-left">
            〒{{ $inputs['post'] }}<br>
            {{ $inputs['prefecture'] }}{{ $inputs['city'] }}{{ $inputs['others'] }}
          </div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-bottom">
          <div class="col-3 d-flex text-left">電話番号</div>
          <div class="col-4 d-flex text-left">{{ $inputs['tell'] }}</div>
        </div>
      </div>

      <div class="container px-5">
        <div class="row p-2 p-4 border-bottom">
          <div class="col-3 d-flex text-left">メールアドレス</div>
          <div class="col-4 d-flex text-left">{{ $inputs['email'] }}</div>
        </div>
      </div>

      <input type="hidden" name="name_sei" value="{{ $inputs['name_sei'] }}">
      <input type="hidden" name="name_mei" value="{{ $inputs['name_mei'] }}">
      <input type="hidden" name="post" value="{{ $inputs['post'] }}">
      <input type="hidden" name="prefecture" value="{{ $inputs['prefecture'] }}">
      <input type="hidden" name="city" value="{{ $inputs['city'] }}">
      <input type="hidden" name="others" value="{{ $inputs['others'] }}">
      <input type="hidden" name="tell" value="{{ $inputs['tell'] }}">
      <input type="hidden" name="email" value="{{ $inputs['email'] }}">
      <input type="hidden" name="password" value="{{ $inputs['password'] }}">

      <!-- 題目-登録ボタン -->
      <div class="container my-5">
        <div class="container mt-5 px-5">
          <div class="d-flex justify-content-center m-4">
            <button type="submit" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">登録する</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
