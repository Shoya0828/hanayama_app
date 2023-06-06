@extends('admins.layout_admin')
@section('title','TOP一覧')
@section('content')


<div class="container mt-4">
  <div class="row border-bottom py-4">
    <div class="col"></div>
    <div class="col-4 bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:60px; color:white; border-radius:10px;">
      商品編集
    </div>
    <div class="col"></div>
  </div>
</div>

<form action="{{ route('items_update') }}" method="POST">
  @csrf
  <div class="container">
    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        イメージ
      </div>

      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="img" type="file" accept="image/jpg, image/png" class="form-control mb-2" value="{{ $item()->img }}">
          </div>
        </div>
      </div>
    </div>

    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        商品名
      </div>

      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="name" type="text" class="form-control mb-2" id="inputName" value="{{ $item()->name }}">
          </div>
          <div class="row">
            <input name="kana" type="text" class="form-control" id="inputName" value="{{ $item()->kana }}">
          </div>
        </div>
      </div>
    </div>

    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        商品詳細
      </div>

      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="detail" type="text" class="form-control mb-2" value="{{ $item()->detail }}">
          </div>
        </div>
      </div>
    </div>

    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        カテゴリ番号
      </div>

      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="category" type="text" class="form-control mb-2" value="{{ $item()->category}}">
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container my-5">
    <div class="container mt-5 px-5">
      <div class="row">
        <div class="col"></div>
        <div class="col text-center">
          <a href="{{ route('items_admin') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width:120px">戻る</a>
        </div>
        <div class="col text-center">
          <button type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg" style="width:180px">変更を完了する</a>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
</form>

@endsection