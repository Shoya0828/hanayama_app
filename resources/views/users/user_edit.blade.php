@extends('layout')
@section('title','アカウントページ')
@section('content')

<div class="container">
  <div>
    <div class="row mx-5">
      <div class="col"></div>
      <div class="col-8 m-5 fs-4 d-flex justify-content-center align-items-center">
        アカウント情報編集
      </div>
      <div class="col"></div>
    </div>
    <form method="POST" action="{{route('user.update')}}">
      @csrf
      <!-- 氏名 -->
      <div class="mx-5 row">
        <label for="inputName" class="col-sm-2 col-form-label">氏名</label>
        <div class="col-sm-4">
          <input name="name_sei" id="name_sei" type="text" class="form-control mb-5" value="{{ Auth::user()->name_sei }}">
        </div>

        <div class="col-sm-4">
          <input name="name_mei" id="name_mei" type="text" class="form-control mb-5" value="{{ Auth::user()->name_mei }}">
        </div>
      </div>

      <!-- 郵便番号 -->

      <div class="mx-5 mb-5 row">
        <label for="inputPost" class="col-sm-2 col-form-label">郵便番号</label>
        <div class="col-sm-2">
          <input name="post" id="post" type="text" class="form-control" value="{{ Auth::user()->post }}">
        </div>
      </div>

      <!-- 都道府県 -->

      <div class="mx-5 mb-5 row">
        <label for="inputPrefecture" class="col-sm-2 col-form-label">都道府県</label>
        <div class="col-sm-2">
          <select name="prefecture" id="prefecture" class="form-select" aria-label="Disabled select example" value="{{ Auth::user()->prefecture }}">
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select>
        </div>
      </div>

      <!-- 市区町村 -->

      <div class="mx-5 mb-5 row">
        <label for="inputCity" class="col-sm-2 col-form-label">市区町村</label>
        <div class="col-sm-8">
          <input name="city" id="city" type="text" class="form-control" value="{{ Auth::user()->city }}">
        </div>
      </div>

      <!-- 番地以降 -->

      <div class="mx-5 mb-5 row">
        <label for="inputOthers" class="col-sm-2 col-form-label">番地以降</label>
        <div class="col-sm-8">
          <input name="others" id="others" type="text" class="form-control" value="{{ Auth::user()->others }}">
        </div>
      </div>

      <!-- 電話番号 -->

      <div class="mx-5 mb-5 row">
        <label for="inputTell" class="col-sm-2 col-form-label">電話番号</label>
        <div class="col-sm-4">
          <input name="tell" id="tell" type="text" class="form-control" value="{{ Auth::user()->tell }}">
        </div>
      </div>

      <!-- メールアドレス -->

      <div class="mx-5 mb-5 row">
        <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
        <div class="col-sm-8">
          <input name="email" id="email" type="email" class="form-control" value="{{ Auth::user()->email }}">
        </div>
      </div>

      <!-- リンクボタン -->
      <div class="container my-5">
        <div class="container mt-5 px-5">
          <div class="row">
            <div class="col"></div>
            <div class="col text-center">
              <a href="{{ route('user_account') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg" style="width:120px">戻る</a>
            </div>
            <div class="col text-center">
              <button type="submit" id="button" class="form-control btn btn-primary btn-lg" style="width:120px">変更する</a>
            </div>
            <div class="col"></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection