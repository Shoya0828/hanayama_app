@extends('admins.layout_admin')
@section('title','商品追加')
@section('content')


<div class="container mt-4">
  <div class="row border-bottom py-4">
    <div class="col"></div>
    <div class="col-4 bg-secondary d-flex justify-content-center align-items-center fw-bold fs-4" style="height:60px; color:white; border-radius:10px;">
      商品追加
    </div>
    <div class="col"></div>
  </div>
</div>

<form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit ()" enctype="multipart/form-data">
  @csrf
  <div class="container">

    <!-- 画像 -->
    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        イメージ
      </div>
      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="img" value="{{ old('img') }}" type="file" class="form-control mb-2" id="inputImg" required>
            <!-- @if ($errors->has('img'))
            {{ @errors->first('img') }}
            @endif -->
          </div>
        </div>
      </div>
    </div>

    <!-- 商品名 -->
    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        商品名
      </div>
      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="name" value="{{ old('name') }}" type="text" class="form-control mb-2" id="inputName" placeholder="商品名" required>
            <!-- @if ($errors->has('name'))
            {{ @errors->first('name') }}
            @endif -->
          </div>

          <!-- 商品名（カタカナ） -->
          <div class="row">
            <input name="kana" value="{{ old('kana') }}" type="text" class="form-control" id="inputKana" placeholder="ショウヒンメイ" required>
            <!-- @if ($errors->has('kana'))
            {{ @errors->first('kana') }}
            @endif -->
          </div>
        </div>
      </div>
    </div>

    <!-- 商品詳細 -->
    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        商品詳細
      </div>
      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="detail" value="{{ old('detail') }}" type="text" class="form-control mb-2" id="inputName" placeholder="商品概要">
            <!-- @if ($errors->has('detail'))
            {{ @errors->first('detail') }}
            @endif -->
          </div>
        </div>
      </div>
    </div>

    <!-- 価格 -->
    <!-- <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        価格
      </div>
      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="price" value="{{ old('price') }}" type="number" class="form-control mb-2" id="inputName" placeholder="￥価格">
            @if ($errors->has('price'))
            {{ @errors->first('price') }}
            @endif
          </div>
        </div>
      </div>
    </div> -->


    <!-- <div>
      <label>価格設定</label>
      <div>
        <button type="button" onclick="addPriceField()">価格追加</button>
      </div>
      <div id="priceFieldsContainer">


        初期表示の価格入力フィールド
        <div>
          <label for="weights[]">重量</label>
          <input type="text" name="prices[0][weight]" required>
          <label for="prices[]">価格</label>
          <input type="text" name="prices[0][price]" required>
        </div>
      </div>
    </div> -->


    <!-- 重量・価格 -->
    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        重量・価格
      </div>
      <div class="col-7">
        <div class="container" id="priceFieldsContainer">
          <div class="row d-flex justify-content-center align-items-center">

            <div class="col-5">
              <input name="prices[0][weight]" type="text" class="form-control mb-2" id="inputCategory_id" placeholder="重量" required>
            </div>
            <div class="col-5">
              <input name="prices[0][price]" type="text" class="form-control mb-2" id="inputCategory_id" placeholder="価格" required>
            </div>

            <div class="col-2">
              <button type="button" onclick="addPriceField()">価格追加</button>
            </div>

          </div>
        </div>
      </div>
    </div>



    <!-- カテゴリ -->
    <div class="row border-bottom py-4">
      <div class="col-3 ms-5 fw-bold d-flex justify-content-center align-items-center">
        カテゴリ
      </div>
      <div class="col-7">
        <div class="container">
          <div class="row">
            <input name="category_id" value="{{ old('category_id') }}" type="text" class="form-control mb-2" id="inputCategory_id" placeholder="カテゴリ" required>
            <!-- @if ($errors->has('category_id'))
            {{ @errors->first('category_id') }}
            @endif -->
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
          <a href="{{ route('items_admin') }}" id="button" name="back" class="form-control btn btn-danger btn-lg" style="width:120px">戻る</a>
        </div>
        <div class="col text-center">
          <button type="submit" id="button" name="confirm" class="form-control btn btn-primary btn-lg" style="width:120px">追加する</button>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
</form>

<script>
  let priceFieldIndex = 1;

  function addPriceField() {
    const container = document.getElementById('priceFieldsContainer');

    const priceField = document.createElement('div');
    priceField.innerHTML = `
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-5">
        <input name="prices[${priceFieldIndex}][weight]" type="text" class="form-control mb-2" id="inputCategory_id" placeholder="重量" required>
      </div>
      <div class="col-5">
        <input name="prices[${priceFieldIndex}][price]" type="text" class="form-control mb-2" id="inputCategory_id" placeholder="価格" required>
      </div>
      <div class="col-2"></div>
    </div>
    `;

    container.appendChild(priceField);
    priceFieldIndex++;
  }
</script>


@endsection