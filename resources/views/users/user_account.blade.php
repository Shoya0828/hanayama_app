@extends('layout')
@section('title', 'アカウントページ')
@section('content')

<!-- お客様情報 -->
<div class="container">
  <div class="container">
    <div class="container mt-5 px-5">
      <div class="row m-4">
        <div class="col-4 fs-4 fw-bold">お客様情報</div>
        <div class="col-6"></div>
      </div>
    </div>

    <div class="container px-5">
      <div class="row p-2 p-4 border-top border-bottom">
        <div class="col-3 d-flex text-left">お名前</div>
        <div class="col-4 text-left">{{ Auth::user()->name_sei }}{{ Auth::user()->name_mei }}</div>
      </div>
    </div>

    <div class="container px-5">
      <div class="row p-2 p-4 border-bottom">
        <div class="col-3 d-flex text-left">ご住所</div>
        <div class="col-4 d-flex text-left">〒{{ Auth::user()->post }}</div>
      </div>
    </div>

    <div class="container px-5">
      <div class="row p-2 p-4 border-bottom">
        <div class="col-3 d-flex text-left">電話番号</div>
        <div class="col-4 d-flex text-left">{{ Auth::user()->tell }}</div>
      </div>
    </div>

    <div class="container px-5">
      <div class="row p-2 p-4 border-bottom">
        <div class="col-3 d-flex text-left">メールアドレス</div>
        <div class="col-4 d-flex text-left">{{ Auth::user()->email }}</div>
      </div>
    </div>
  </div>

  <!-- 登録ボタン -->
  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="row">
        <div class="col"></div>
        <div class="col text-center">
          <a href="{{ route('user') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width:120px">戻る</a>
        </div>
        <div class="col text-center">
          <a href="{{ route('user.edit') }}" type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg" style="width:120px">変更する</a>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
</div>
@endsection
