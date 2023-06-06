<!-- メニューバー -->
<nav class="header-top navbar navbar-expand-lg" style="height: 200px;">
  <!-- ヘッダーロゴ -->
  <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('top') }}" style="margin: 0 auto"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;"></a>

  <!-- ヘッダーメニュー -->
  <div class="container-fluid">
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @guest
        <!-- ログインしていない場合の表示 -->
        <li class="nav-item m-4">
          <a class="btn btn-primary" aria-current="page" href="{{ route('register') }}">会員登録</a>
        </li>
        <li class="nav-item m-4">
          <a href="{{ route('login') }}" class="btn btn-primary">ログイン</a>
        </li>
        @else
        <!-- ログインしている場合の表示 -->
        <li class="nav-item m-4">
          @if(session('user'))
          <a href="{{route('user')}}" class="btn btn-primary">{{ session('user')->name_sei }}{{ session('user')->name_mei }}さんのアカウント情報</a>
          @endif
        </li>
        @endguest

        <li class="nav-item m-4 mt-3">
          <a href="{{ route('cart') }}"><img src="/img/cart.png" alt="カート内確認"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<!-- 臨時
        <li class="nav-item m-4">
          <a class="btn btn-primary" aria-current="page" href="{{ route('forget_input') }}">パスワード再設定</a>
        </li>

        <li class="nav-item m-4">
          <a class="btn btn-primary" aria-current="page" href="{{ route('admin') }}">管理者画面</a>
        </li> -->