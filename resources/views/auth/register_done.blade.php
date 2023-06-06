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
<!-- ヘッダー -->
<header>
  <nav class="header-top navbar navbar-expand-lg" style="height: 200px;">

    <!-- ヘッダーロゴ -->
    <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('top') }}" style="margin: 0 auto"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;"></a>
  </nav>

  <!-- ステータス -->
  <div class="progress mx-5 mb-5" style="height: 50px;">
    <div class="progress-bar fs-6" role="progressbar" style="width: 33%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">お客様情報
    </div>

    <div class="progress-bar fs-6" role="progressbar" style="width: 34%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">ご確認
    </div>

    <div class="progress-bar fs-6 fw-bold" role="progressbar" style="width: 33%; border: 1px solid white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">完了
    </div>

  </div>
</header>


<body>
  <div class="container pt-5 mt-5">
    <div class="row m-5 text-center">
      <div class="fs-3">登録が完了しました
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center m-4">
    <a href="{{ route('top') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg mt-5" style="width:250px">TOPへ戻る</a>
  </div>

</body>