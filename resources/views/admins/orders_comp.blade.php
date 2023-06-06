@extends('admins.layout_admin')
@section('title','管理者商品一覧')
@section('content')

<div class="container mt-4">
  <div class="row py-4">
    <div class="col bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:50px; color:white;">
      オーダー(完了)
    </div>
  </div>
</div>

<div class="container my-5 px-5">
  <div class="row border-top border-bottom py-2">
    <div class="col justify-content-center d-flex text-align-center">
      オーダーID
    </div>
    <div class="col justify-content-center d-flex text-align-center">
      オーダー日時
    </div>
    <div class="col justify-content-center d-flex text-align-center">
      注文者氏名
    </div>
    <div class="col justify-content-center d-flex text-align-center">
      ステータス
    </div>
  </div>

  <div class="row border-bottom py-2 py-3">
    <a href="{{ route('orders_detail') }}" class="col justify-content-center d-flex text-align-center">
      11111111
    </a>
    <div class="col justify-content-center d-flex text-align-center">
      2023-03-13-14:52
    </div>
    <div class="col justify-content-center d-flex text-align-center">
      華山　翔矢
    </div>
    <div class="col justify-content-center d-flex text-align-center">
      <div class="col-4 bg-primary d-flex justify-content-center align-items-center fw-bold" style="color:white; border-radius:3px;">
        完了
      </div>
    </div>
  </div>

  <div class="row border-bottom py-2 py-3">
    <a href="{{ route('orders_detail') }}" class="col justify-content-center d-flex text-align-center">
      11111111
    </a>
    <div class="col justify-content-center d-flex text-align-center">
      2023-03-13-14:52
    </div>
    <div class="col justify-content-center d-flex text-align-center">
      華山　翔矢
    </div>
    <div class="col justify-content-center d-flex text-align-center">
      <div class="col-4 bg-primary d-flex justify-content-center align-items-center fw-bold" style="color:white; border-radius:3px;">
        完了
      </div>
    </div>
  </div>

  <div class="row">
    <div class="d-flex justify-content-center my-5 p-3">
      <a href="{{ route('admin') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width: auto">戻る</a>
    </div>
  </div>

</div>


@endsection