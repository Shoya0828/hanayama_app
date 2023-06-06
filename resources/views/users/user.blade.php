@extends('layout')
@section('title','アカウントページ')
@section('content')

<div class="container">

<!-- アカウント情報 -->
  <div class="row">
    <div class="col">
      <div class="d-flex justify-content-center">
        <a href="{{ route('user_account') }}" type="submit" id="button" name="confirm" class="form-control btn btn-warning btn-lg mt-5 d-flex justify-content-center align-items-center text-center fw-bold" style="height:75px; width:45%; color:white;">アカウント情報</a>
      </div>
    </div>
  </div>
  
  <!-- 購入履歴 -->
  <div class="row">
    <div class="col">
      <div class="d-flex justify-content-center">
        <a href="{{ route('user_hist') }}" type="submit" id="button" name="confirm" class="form-control btn btn-warning btn-lg mt-5 d-flex justify-content-center align-items-center text-center fw-bold" style="height:75px; width:45%; color:white;">購入履歴</a>
      </div>
    </div>
  </div>

  <!-- お気に入り -->
  <div class="row">
    <div class="col">
      <div class="d-flex justify-content-center">
        <a href="{{ route('favorites') }}" type="submit" id="button" name="confirm" class="form-control btn btn-warning btn-lg mt-5 d-flex justify-content-center align-items-center text-center fw-bold" style="height:75px; width:45%; color:white;">お気に入り</a>
      </div>
    </div>
  </div>

  <!-- トップへ戻る -->
  <div class="row">
    <div class="col">
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('top') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg mt-5 d-flex justify-content-center align-items-center text-center fw-bold" style="width:250px; color:white;">TOPへ戻る</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="d-flex justify-content-center mt-5">
        <a href="{{ route('user_signout') }}" type="submit" id="button" name="confirm" class="form-control btn btn-lg mt-5 d-flex justify-content-center align-items-center text-center fw-bold" style="width:300px; color:red;">退会する(アカウントを削除)</a>
      </div>
    </div>
  </div>


</div>
@endsection