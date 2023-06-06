@extends('admins.layout_admin')
@section('title','クーポン一覧')
@section('content')

<div class="container mt-4">
  <div class="row py-4">
    <div class="col bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:50px; color:white;">
      クーポン追加
    </div>
  </div>
</div>

<div class="container mt-4 px-5">
  <div class="row py-3 border-top border-bottom">
    <div class="col-4 d-flex justify-content-center align-items-center">クーポン名</div>
    <div class="col-4 d-flex justify-content-center align-items-center">
      <input type="text" class="form-control" id="inputName" placeholder="クーポン名">
    </div>
    <div class="col-4"></div>
  </div>

  <div class="row py-3 border-bottom">
    <div class="col-4 d-flex justify-content-center align-items-center">割引価格</div>
    <div class="col-4 d-flex justify-content-center align-items-center">
      <input type="text" class="form-control" id="inputName" placeholder="価格">
    </div>
    <div class="col-4"></div>
  </div>

  <div class="row py-3 border-bottom">
    <div class="col-4 d-flex justify-content-center align-items-center">期間</div>
    <div class="col-4 d-flex justify-content-center align-items-center">
      <input type="text" class="form-control" id="inputName" placeholder="期間">
    </div>
    <div class="col-4"></div>
  </div>
</div>

<div class="container my-5">
  <div class="container mt-5 px-5">
    <div class="row">
      <div class="col"></div>
      <div class="col text-center">
        <a href="{{ route('coupon_admin') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width:120px">戻る</a>
      </div>
      <div class="col text-center">
        <a href="{{ route('coupon_admin') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg" style="width:180px">追加する</a>
      </div>
      <div class="col"></div>
    </div>
  </div>
</div>


@endsection