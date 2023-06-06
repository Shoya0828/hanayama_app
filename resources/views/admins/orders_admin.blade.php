@extends('admins.layout_admin')
@section('title','管理者商品一覧')
@section('content')

<div class="container mt-4">
  <div class="row py-4">
    <div class="col bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:50px; color:white;">
      オーダー
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="row py-4">
    <div class="col"></div>
    <a href="#" class="col-4 bg-warning d-flex justify-content-center align-items-center fw-bold fs-4" style="height:60px; color:white; border-radius:10px; text-decoration:none;">
      未完了の受注一覧
    </a>
    <div class="col"></div>
  </div>

  <div class="row py-4">
    <div class="col"></div>
    <a href="#" class="col-4 bg-primary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:60px; color:white; border-radius:10px; text-decoration:none;">
      完了の受注一覧
    </a>
    <div class="col"></div>
  </div>

  <div class="row">
    <div class="d-flex justify-content-center my-5 p-3">
      <a href="{{ route('admin.top') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width: auto">戻る</a>
    </div>
  </div>

</div>

@endsection