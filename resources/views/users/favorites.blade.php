@extends('layout')
@section('title','アカウントページ')
@section('content')
<div class="container">
  <div class="container">
    <div class="row  mx-5">
      <div class="col pb-5 fs-4 d-flex justify-content-center align-items-center fw-bold border-bottom">
        お気に入り商品一覧
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row mx-5 border-bottom">
      <div class="col py-3 d-flex justify-content-center align-items-center fw-bold">
        <div class="d-flex justify-content-center align-items-center items_img m-2" style="width: 10%;">
          <img src="/img/白菜キムチ.jpg" class="card-img-top" alt="IMG">
        </div>
        <div class="items_name d-flex align-items-center mx-5"><a href="{{ route('view') }}">白菜キムチ</a></div>
      </div>
    </div>

    <div class="row mx-5 border-bottom">
      <div class="col py-3 d-flex justify-content-center align-items-center fw-bold">
        <div class="d-flex justify-content-center align-items-center items_img m-2" style="width: 10%;">
          <img src="/img/白菜キムチ.jpg" class="card-img-top" alt="IMG">
        </div>
        <div class="items_name d-flex align-items-center mx-5"><a href="{{ route('view') }}">白菜キムチ</a></div>
      </div>
    </div>

    <div class="row mx-5 border-bottom">
      <div class="col py-3 d-flex justify-content-center align-items-center fw-bold">
        <div class="d-flex justify-content-center align-items-center items_img m-2" style="width: 10%;">
          <img src="/img/白菜キムチ.jpg" class="card-img-top" alt="IMG">
        </div>
        <div class="items_name d-flex align-items-center mx-5"><a href="{{ route('view') }}">白菜キムチ</a></div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="d-flex justify-content-center mt-4">
          <a href="{{ route('user') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg mt-5 d-flex justify-content-center align-items-center text-center fw-bold" style="width:250px; color:white;">TOPへ戻る</a>
        </div>
      </div>
    </div>
  </div>
</div>

  @endsection