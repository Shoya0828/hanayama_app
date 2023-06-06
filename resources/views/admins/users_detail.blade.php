@extends('admins.layout_admin')
@section('title','会員一覧')
@section('content')

<div class="container mt-4">
  <div class="row py-4">
    <div class="col bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:50px; color:white;">
      アカウント一覧
    </div>
  </div>
</div>

<div class="container p-5">
  <div class="row border-bottom border-top">
    <div class="col-2" style="color:grey; text-align:center;">アカウントID</div>
    <div class="col-2" style="color:grey; text-align:center;">氏名</div>
    <div class="col-2" style="color:grey; text-align:center;">電話番号</div>
    <div class="col-3" style="color:grey; text-align:center;">アドレス</div>
    <div class="col-1" style="color:grey; text-align:center;"></div>
    <div class="col-2" style="color:grey; text-align:center;">削除</div>
  </div>

  <div class="row border-bottom py-3">
    <a href="{{ route('users_account') }}" class="col-2" style="text-align:center;">1</a>
    <div class="col-2" style="text-align:center;">華山　翔矢</div>
    <div class="col-2" style="text-align:center;">09012345678</div>
    <div class="col-3" style="text-align:center;">sample@sample.com</div>
    <div class="col-1" style="text-align:center;"></div>
    <div class="col-2" style="text-align:center;">削除</div>
  </div>

  <div class="row border-bottom py-3">
    <a href="{{ route('users_account') }}" class="col-2" style="text-align:center;">1</a>
    <div class="col-2" style="text-align:center;">華山　翔矢</div>
    <div class="col-2" style="text-align:center;">09012345678</div>
    <div class="col-3" style="text-align:center;">sample@sample.com</div>
    <div class="col-1" style="text-align:center;"></div>
    <div class="col-2" style="text-align:center;">削除</div>
  </div>
</div>


<div class="row">
  <div class="d-flex justify-content-center my-5 p-3">
    <a href="{{ route('admin') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width: auto">戻る</a>
  </div>
</div>
@endsection