<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/hanayama.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>パスワード再設定メール</title>
</head>

<header>
  <nav class="header-top navbar navbar-expand-lg" style="height: 200px;">
    <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('top') }}" style="margin: 0 auto"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;"></a>
  </nav>
</header>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col p-3">
        パスワードをリセットします。登録しているメールアドレスを入力して下さい
      </div>
    </div>

    <div class="row">
      <div class="col p-3 d-flex justify-content-center align-items-center">
        <input type="email" class="form-control" id="inputEmail" placeholder="@メールアドレス" style="width:60%">
      </div>
    </div>

    <div class="row">
      <div class="d-flex justify-content-center p-3">
        <a href="{{ route('forget_sent') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg" style="width: auto">パスワード再設定用メールを送信</a>
      </div>
    </div>

    <div class="row text-center">
      <div class="col p-3">
        上記メールアドレスに再設定用のURLを送信します。
      </div>
    </div>

    <div class="row">
      <div class="d-flex justify-content-center p-3">
        <a href="{{ route('top') }}" type="submit" id="button" name="confirm" class="form-control btn" style="color:red; width: auto">TOPに戻る</a>
      </div>
    </div>

  </div>
</body>

<footer>
  <div class="container mt-5 pt-5">
    <div class="row">
      <a class="header_logo text-center"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:100px; width:100px;"></a>
    </div>
    <div class="row">
      <ul class="nav d-flex justify-content-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#" style="color: black;">特定商取引法に関する表記</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">利用規約</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">プライバシーポリシー</a>
        </li>
      </ul>
    </div>
  </div>
</footer>