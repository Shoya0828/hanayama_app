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
<!-- ヘッダー -->
<header>
  <nav class="header-top navbar navbar-expand-lg" style="height: 200px;">

    <!-- ヘッダーロゴ -->
    <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('top') }}" style="margin: 0 auto"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;"></a>
  </nav>

  <!-- ステータス -->
  <div class="progress mx-5 mb-5" style="height: 50px;">
    <div class="progress-bar fs-6 fw-bold" role="progressbar" style="width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お客様情報
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お支払方法
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">ご確認
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="background-color:lightgrey; color:grey; width: 25%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">完了
    </div>
  </div>
</header>

<!-- メイン部 -->

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
      <form action="{{ route('pay') }}" method="POST">
        @csrf
        <!-- 氏名 -->
        <div class="mx-5 row">
          <label for="name_sei" class="col-sm-2 col-form-label">氏名</label>
          <div class="col-sm-4">
            <input name="customer_name_sei" id="name_sei" type="text" class="form-control mb-5" placeholder="姓" required>
          </div>
          <div class="col-sm-4">
            <input name="customer_name_mei" id="name_mei" type="text" class="form-control mb-5" placeholder="名" required>
          </div>
        </div>
        <!-- 郵便番号 -->
        <div class="mx-5 mb-5 row">
          <label for="post" class="col-sm-2 col-form-label">郵便番号</label>
          <div class="col-sm-2">
            <input name="customer_post" id="post" type="text" class="form-control" placeholder="12345678" required>
          </div>
        </div>
        <!-- 都道府県 -->
        <div class="mx-5 mb-5 row">
          <label for="prefecture" class="col-sm-2 col-form-label">都道府県</label>
          <div class="col-sm-2">
            <select name="customer_prefecture" id="prefecture" class="form-select" aria-label="Disabled select example">
              <option value="北海道">北海道</option>
              <option value="青森県">青森県</option>
              <option value="岩手県">岩手県</option>
              <option value="宮城県">宮城県</option>
              <option value="秋田県">秋田県</option>
              <option value="山形県">山形県</option>
              <option value="福島県">福島県</option>
              <option value="茨城県">茨城県</option>
              <option value="栃木県">栃木県</option>
              <option value="群馬県">群馬県</option>
              <option value="埼玉県">埼玉県</option>
              <option value="千葉県">千葉県</option>
              <option value="東京都">東京都</option>
              <option value="神奈川県">神奈川県</option>
              <option value="新潟県">新潟県</option>
              <option value="富山県">富山県</option>
              <option value="石川県">石川県</option>
              <option value="福井県">福井県</option>
              <option value="山梨県">山梨県</option>
              <option value="長野県">長野県</option>
              <option value="岐阜県">岐阜県</option>
              <option value="静岡県">静岡県</option>
              <option value="愛知県">愛知県</option>
              <option value="三重県">三重県</option>
              <option value="滋賀県">滋賀県</option>
              <option value="京都府">京都府</option>
              <option value="大阪府">大阪府</option>
              <option value="兵庫県">兵庫県</option>
              <option value="奈良県">奈良県</option>
              <option value="和歌山県">和歌山県</option>
              <option value="鳥取県">鳥取県</option>
              <option value="島根県">島根県</option>
              <option value="岡山県">岡山県</option>
              <option value="広島県">広島県</option>
              <option value="山口県">山口県</option>
              <option value="徳島県">徳島県</option>
              <option value="香川県">香川県</option>
              <option value="愛媛県">愛媛県</option>
              <option value="高知県">高知県</option>
              <option value="福岡県">福岡県</option>
              <option value="佐賀県">佐賀県</option>
              <option value="長崎県">長崎県</option>
              <option value="熊本県">熊本県</option>
              <option value="大分県">大分県</option>
              <option value="宮崎県">宮崎県</option>  
              <option value="鹿児島県">鹿児島県</option>
              <option value="沖縄県">沖縄県</option>
            </select>
          </div>
        </div>
        <!-- 市区町村 -->
        <div class="mx-5 mb-5 row">
          <label for="city" class="col-sm-2 col-form-label">市区町村</label>
          <div class="col-sm-8">
            <input name="customer_city" id="city" type="text" class="form-control" placeholder="市区町村" required>
          </div>
        </div>
        <!-- 番地以降 -->
        <div class="mx-5 mb-5 row">
          <label for="others" class="col-sm-2 col-form-label">番地以降</label>
          <div class="col-sm-8">
            <input name="customer_others" id="others" type="text" class="form-control" placeholder="番地以降" required>
          </div>
        </div>
        <!-- 電話番号 -->
        <div class="mx-5 mb-5 row">
          <label for="tell" class="col-sm-2 col-form-label">電話番号</label>
          <div class="col-sm-4">
            <input name="customer_tell" id="tell" type="text" class="form-control" placeholder="電話番号" required>
          </div>
        </div>
        <!-- メールアドレス -->
        <div class="mx-5 mb-5 row">
          <label for="email" class="col-sm-2 col-form-label">メールアドレス</label>
          <div class="col-sm-8">
            <input name="customer_email" id="email" type="email" class="form-control" placeholder="メールアドレス" required>
          </div>
        </div>

        <!-- リンクボタン -->
        <div class="d-flex justify-content-center m-4">
          <button type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">お支払情報の入力へ</a>
        </div>
      </form>
    </div>
</body>