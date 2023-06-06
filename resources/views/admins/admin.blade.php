@extends('admins.layout_admin')
@section('title','TOP一覧')
@section('content')


<div class="container">
  <div class="row">
    <div class="col bg-danger d-flex justify-content-center align-items-center fs-4" style="width: 100%; height:80px; color:white;">
      管理者メニュー
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col-6 py-5">
      <ul class="list-group my-5">
        <li class="list-group-item p-4 text-center fw-bold fs-5 bg-secondary" style="color:white;"><a href="{{ route('items_admin') }}" style="color:white; text-decoration:none;">商品管理</a></li>
        <li class="list-group-item p-4 text-center fw-bold fs-5"><a href="{{ route('orders_admin') }}" style="color:black; text-decoration:none;">オーダー管理</a></li>
        <!-- <li class="list-group-item p-4 text-center fw-bold fs-5 bg-secondary" style="color:white;"><a href="{{ route('users_detail') }}" style="color:white; text-decoration:none;">会員管理</a></li>
        <li class="list-group-item p-4 text-center fw-bold fs-5"><a href="{{ route('coupon_admin') }}" style="color:black; text-decoration:none;">クーポン管理</a></li> -->
      </ul>
    </div>
    <div class="col"></div>
  </div>
</div>
@endsection