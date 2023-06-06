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

  </header>

  <!-- Modal -->
  <div class="d-flex justify-content-center align-items-center" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center text-align-center">
          <h3 class="modal-title" id="staticBackdropLabel">ログイン</h3>
        </div>

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="modal-body pt-5">
            <div class="container">
              <div class="row text-center">
                <input type="email" name="email" id="email" class="form-control mb-5 text-center @error('email') is-invalid @enderror" placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="password" name="password" class="form-control mb-3 text-center @error('password') is-invalid @enderror" placeholder="パスワード" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="container px-5">
            <div class="row mb-3">
              <button type="submit" class="btn btn-primary">ログイン</a>
            </div>
          </div>
        </form>

        <div class="container px-5">
          <div class="row mb-3">
            <a href="{{ route('register') }}" type="button" class="btn">会員登録はこちら</a>
          </div>

          <div class="row mb-3">
            <a href="{{ route('forget_pass') }}" type="button" class="btn" style="color:red;">パスワードを忘れた方はこちら</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col"></div>
      <a href="{{ route('top') }}" class="btn btn-danger col-2">トップ画面へ戻る</a>
      <div class="col"></div>
    </div>
  </div>
</body>