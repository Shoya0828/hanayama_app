@extends('admins.layout_admin')
@section('title','管理者商品一覧')
@section('content')

<div class="container mt-4 mb-5">
  <div class="row py-4">
    <div class="col bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:50px; color:white;">
      オーダー詳細
    </div>
  </div>
</div>

<!-- ステータス -->

<div class="container">
  <div class="row mx-5 py-4 border-top border-bottom">
    <div class="col">
      ステータス
    </div>
    <div class="col-8 px-5">
      <div class="col-4 bg-warning d-flex justify-content-center align-items-center fw-bold" style="color:white; border-radius:3px;">
        発送待ち
      </div>
    </div>
  </div>

  <!-- オーダーID　-->

  <div class="row mx-5 py-4 border-bottom">
    <div class="col">
      オーダーID
    </div>
    <div class="col-8 px-5">
      <div class="col-4 d-flex justify-content-center align-items-center fw-bold">
        11111111
      </div>
    </div>
  </div>

  <!-- オーダー日時 -->

  <div class="row mx-5 py-4 border-bottom">
    <div class="col">
      オーダー日時
    </div>
    <div class="col-8 px-5">
      <div class="col-4 d-flex justify-content-center align-items-center fw-bold">

      </div>
    </div>
  </div>

  <!-- 氏名 -->

  <div class="row mx-5 py-4 border-bottom">
    <div class="col">
      氏名
    </div>
    <div class="col-8 px-5">
      <div class="col-4 d-flex justify-content-center align-items-center fw-bold">
        11111111
      </div>
    </div>
  </div>

  <!-- 住所 -->

  <div class="row mx-5 py-4 border-bottom">
    <div class="col">
      住所
    </div>
    <div class="col-8 px-5">
      <div class="col-4 d-flex justify-content-center align-items-center fw-bold">
        11111111
      </div>
    </div>
  </div>


  <!-- 電話番号 -->

  <div class="row mx-5 py-4 border-bottom">
    <div class="col">
      電話番号
    </div>
    <div class="col-8 px-5">
      <div class="col-4 d-flex justify-content-center align-items-center fw-bold">
        11111111
      </div>
    </div>
  </div>

  <!-- メールアドレス -->

  <div class="row mx-5 py-4 border-bottom">
    <div class="col">
      メールアドレス
    </div>
    <div class="col-8 px-5">
      <div class="col-4 d-flex justify-content-center align-items-center fw-bold">
        11111111
      </div>
    </div>
  </div>

</div>

<div class="container mt-4 mb-5">
  <div class="row py-4">
    <div class="col d-flex justify-content-center align-items-center fw-bold fs-4" style="height:50px; background-color:lightgrey;">
      購入商品
    </div>
  </div>
</div>

<div class="container">
  <div class="row border-bottom mx-5 py-4 ">
    <div class="col-8 d-flex justify-content-center align-items-center">
      商品
    </div>
    <div class="col d-flex justify-content-center align-items-center">
      数
    </div>
  </div>
</div>
<div class="container mb-5">
  <div class="row border-bottom mx-5 py-4">
    <div class="col-8 d-flex justify-content-center align-items-center">
      画像
    </div>
    <div class="col d-flex justify-content-center align-items-center">
      数字
    </div>
  </div>

  <div class="row border-bottom mx-5 py-4">
    <div class="col-8 d-flex justify-content-center align-items-center">
      画像
    </div>
    <div class="col d-flex justify-content-center align-items-center">
      数字
    </div>
  </div>
</div>


<!-- 数量合計 -->
<div class="container my-5 pb-5">
  <div class="row">
    <div class="col-6"></div>
    <div class="col-3" style="text-align:right;">
      数量合計
    </div>
    <div class="col-1" style="text-align:right">
      1
    </div>
    <div class="col-2"></div>
  </div>


  <!-- 送料 -->
  <div class="row">
    <div class="col-6"></div>
    <div class="col-3" style="text-align:right;">
      送料
    </div>
    <div class="col-1" style="text-align:right;">
      ￥0
    </div>
    <div class="col-2"></div>
  </div>


  <!-- 合計 -->
  <div class="row">
    <div class="col-6"></div>
    <div class="col-3" style="text-align:right;">
      合計
    </div>
    <div class="col-1" style="text-align:right;">
      ￥1,000
    </div>
    <div class="col-2"></div>
  </div>


  <!-- 内消費税 -->
  <div class="row">
    <div class="col-6"></div>
    <div class="col-3" style="text-align:right;">
      内消費税
    </div>
    <div class="col-1" style="text-align:right;">
      ￥90
    </div>
    <div class="col-2"></div>
  </div>
</div>

<div class="container my-5">
  <div class="container mt-5 px-5">
    <div class="row">
      <div class="col"></div>
      <div class="col text-center">
        <a href="{{ route('orders_incomp') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width:120px">戻る</a>
      </div>
      <div class="col text-center">
        <a href="{{ route('orders_incomp') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg" style="width:180px">発送準備完了</a>
      </div>
      <div class="col"></div>
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col" style="color:red; text-align:center;">このオーダーを取り消す</div>
  </div>
</div>

@endsection