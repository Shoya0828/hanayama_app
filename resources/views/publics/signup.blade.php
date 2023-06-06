<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/hanayama.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>会員登録</title>

</head>
<!-- ヘッダー -->
<header>
  <nav class="header-top navbar navbar-expand-lg" style="height: 200px;">

    <!-- ヘッダーロゴ -->
    <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('top') }}" style="margin: 0 auto"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;"></a>
  </nav>

  <!-- ステータス -->
  <div class="progress mx-5 mb-5" style="height: 50px;">
    <div class="progress-bar fs-6 fw-bold" role="progressbar" style="width: 33%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お客様情報
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 34%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">ご確認
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 33%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">完了
    </div>

  </div>
</header>


<body>
  <div class="container">

    <div>
      <div class="row mx-5">
        <div class="col"></div>
        <div class="col-8 m-5 fs-4 d-flex justify-content-center align-items-center">
          お客様の情報を入力して下さい
        </div>
        <div class="col"></div>
      </div>
      <!-- 氏名 -->
      <div class="mx-5 row">
        <label for="inputName" class="col-sm-2 col-form-label">氏名</label>
        <div class="col-sm-4">
          <input type="text" class="form-control mb-5 " id="inputName" placeholder="姓">
        </div>

        <div class="col-sm-4">
          <input type="text" class="form-control mb-5 " id="inputName" placeholder="名">
        </div>
      </div>

      <!-- 郵便番号 -->

      <div class="mx-5 mb-5 row">
        <label for="inputPost" class="col-sm-2 col-form-label">郵便番号</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="inputPost" placeholder="12345678">
        </div>
      </div>

      <!-- 都道府県 -->

      <div class="mx-5 mb-5 row">
        <label for="inputPrefecture" class="col-sm-2 col-form-label">都道府県</label>
        <div class="col-sm-2">
          <select class="form-select" aria-label="Disabled select example">
            <option value="1">北海道</option>
            <option value="2">青森県</option>
            <option value="3">岩手県</option>
            <option value="4">宮城県</option>
            <option value="5">秋田県</option>
            <option value="6">山形県</option>
            <option value="7">福島県</option>
            <option value="8">茨城県</option>
            <option value="9">栃木県</option>
            <option value="10">群馬県</option>
            <option value="11">埼玉県</option>
            <option value="12">千葉県</option>
            <option value="13">東京都</option>
            <option value="14">神奈川県</option>
            <option value="15">新潟県</option>
            <option value="16">富山県</option>
            <option value="17">石川県</option>
            <option value="18">福井県</option>
            <option value="19">山梨県</option>
            <option value="20">長野県</option>
            <option value="21">岐阜県</option>
            <option value="22">静岡県</option>
            <option value="23">愛知県</option>
            <option value="24">三重県</option>
            <option value="25">滋賀県</option>
            <option value="26">京都府</option>
            <option value="27">大阪府</option>
            <option value="28">兵庫県</option>
            <option value="29">奈良県</option>
            <option value="30">和歌山県</option>
            <option value="31">鳥取県</option>
            <option value="32">島根県</option>
            <option value="33">岡山県</option>
            <option value="34">広島県</option>
            <option value="35">山口県</option>
            <option value="36">徳島県</option>
            <option value="37">香川県</option>
            <option value="38">愛媛県</option>
            <option value="39">高知県</option>
            <option value="40">福岡県</option>
            <option value="41">佐賀県</option>
            <option value="42">長崎県</option>
            <option value="43">熊本県</option>
            <option value="44">大分県</option>
            <option value="45">宮崎県</option>
            <option value="46">鹿児島県</option>
            <option value="47">沖縄県</option>
          </select>
        </div>
      </div>

      <!-- 市区町村 -->

      <div class="mx-5 mb-5 row">
        <label for="inputCity" class="col-sm-2 col-form-label">市区町村</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputCity" placeholder="市区町村">
        </div>
      </div>

      <!-- 番地以降 -->

      <div class="mx-5 mb-5 row">
        <label for="inputOthers" class="col-sm-2 col-form-label">番地以降</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputOthers" placeholder="番地以降">
        </div>
      </div>

      <!-- 電話番号 -->

      <div class="mx-5 mb-5 row">
        <label for="inputTell" class="col-sm-2 col-form-label">電話番号</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="inputTell" placeholder="電話番号">
        </div>
      </div>

      <!-- メールアドレス -->

      <div class="mx-5 mb-5 row">
        <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="inputEmail" placeholder="メールアドレス">
        </div>
      </div>

      <!-- パスワード -->

      <div class="mx-5 mb-5 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">パスワード</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword" placeholder="パスワード">
        </div>
      </div>

      <!-- パスワード -->

      <div class="mx-5 mb-5 row">
        <label for="inputRepassword" class="col-sm-2 col-form-label">パスワード(確認用)</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputRepassword" placeholder="パスワード再入力">
        </div>
      </div>


      <!-- リンクボタン -->
      <div class="d-flex justify-content-center m-4">
        <a href="{{ route('signup_check') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">確認画面へ</a>
      </div>

    </div>
  </div>
</body>