@extends('admins.layout_admin')
@section('title','会員情報')
@section('content')

<!-- 題目-お客様情報 -->
<div class="container my-5">
  <div class="container mt-5 px-5">
    <div class="row m-4">
      <div class="col-4 fs-4 fw-bold">お客様情報</div>
      <div class="col-6"></div>
    </div>
  </div>

  <div class="container px-5">
    <div class="row p-2 p-4 border-top border-bottom">
      <div class="col-3 d-flex text-left">お名前</div>
      <div class="col-4 text-left">華山　翔矢</div>
    </div>
  </div>

  <div class="container px-5">
    <div class="row p-2 p-4 border-bottom">
      <div class="col-3 d-flex text-left">ご住所</div>
      <div class="col-4 d-flex text-left">〒123-4567<br>大阪府大阪市大阪1-11</div>
    </div>
  </div>

  <div class="container px-5">
    <div class="row p-2 p-4 border-bottom">
      <div class="col-3 d-flex text-left">電話番号</div>
      <div class="col-4 d-flex text-left">09012345678</div>
    </div>
  </div>

  <div class="container px-5">
    <div class="row p-2 p-4 border-bottom">
      <div class="col-3 d-flex text-left">メールアドレス</div>
      <div class="col-4 d-flex text-left">sample@sample.com</div>
    </div>
  </div>
</div>
</div>



<div class="row">
    <div class="d-flex justify-content-center my-5 p-3">
      <a href="{{ route('users_detail') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width: auto">戻る</a>
    </div>
  </div>

@endsection