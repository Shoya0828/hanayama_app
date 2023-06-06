@extends('layout')
@section('title','アカウントページ')
@section('content')


<div class="container">
  <div class="row mx-5">
    <div class="col"></div>
    <div class="col-8 m-5 fs-4 d-flex justify-content-center align-items-center fw-bold">
      注文履歴
    </div>
    <div class="col"></div>
  </div>

  <div class="container border-top border-bottom">
    <div class="row my-3">
      <div class="col d-flex justify-content-center">
        <div class="m-3 p-3">
          注文ID：11111111
        </div>

        <div class="m-3 p-3">
          2023/04/23/13 16:22
        </div>

      </div>

      <div class="col d-flex justify-content-center">

        <div class="m-3 p-3">
          白菜キムチ
        </div>

      </div>
    </div>
  </div>

  <div class="container border-top border-bottom">
    <div class="row my-3">
      <div class="col d-flex justify-content-center">
        <div class="m-3 p-3">
          注文ID：11111111
        </div>

        <div class="m-3 p-3">
          2023/04/23/13 16:22
        </div>

      </div>

      <div class="col d-flex justify-content-center">

        <div class="m-3 p-3">
          白菜キムチ
        </div>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('user') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg mt-5 d-flex justify-content-center align-items-center text-center fw-bold" style="width:250px; color:white;">戻る</a>
      </div>
    </div>
  </div>
</div>
  @endsection