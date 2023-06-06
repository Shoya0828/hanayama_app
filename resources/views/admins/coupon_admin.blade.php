@extends('admins.layout_admin')
@section('title','クーポン一覧')
@section('content')

<div class="container mt-4">
  <div class="row py-4">
    <div class="col bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:50px; color:white;">
      クーポン一覧
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="d-flex justify-content-center my-2 p-3">
      <a href="{{ route('coupon_add') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg fw-bold" style="width: auto">クーポンを追加</a>
    </div>
  </div>
</div>

<div class="container my-5 px-5">
  <div class="row p-1 border-top border-bottom">
    <div class="col-2" style="color:grey; text-align:center;">クーポンID</div>
    <div class="col-3" style="color:grey; text-align:center;">クーポン名</div>
    <div class="col-2" style="color:grey; text-align:center;">割引価格</div>
    <div class="col-3" style="color:grey; text-align:center;">期間</div>
    <div class="col-2" style="color:grey; text-align:center;">削除</div>
  </div>

  <div class="row py-4 border-bottom">
    <div class="col-2" style="text-align:center;">1</div>
    <div class="col-3" style="text-align:center;">オープン記念</div>
    <div class="col-2" style="text-align:center;">￥500</div>
    <div class="col-3" style="text-align:center;">2023-10-31 まで</div>
    <div class="col-2" style="text-align:center;">削除</div>
  </div>

  <div class="row py-4 border-bottom">
    <a class="col-2" style="text-align:center;">1</a>
    <div class="col-3" style="text-align:center;">店舗来店者限定</div>
    <div class="col-2" style="text-align:center;">￥100</div>
    <div class="col-3" style="text-align:center;">2023-10-31 まで</div>
    <div class="col-2" style="text-align:center;">削除</div>
  </div>

</div>

<div class="container">
  <div class="row">
    <div class="d-flex justify-content-center my-2 p-3">
      <a href="{{ route('admin') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width: auto">戻る</a>
    </div>
  </div>
</div>

@endsection