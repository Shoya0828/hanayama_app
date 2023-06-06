<nav class="header-top navbar navbar-expand-lg" style="height: 200px;">

  <!-- ヘッダーロゴ -->
  <a class="header_logo position-absolute top-50 start-50 translate-middle" href="{{ route('admin.top') }}" style="margin: 0 auto"><img src="/img/hanayama_logo.jpg" alt="ホームへ" style="height:150px; width:150px;"></a>
  <!-- ヘッダーメニュー -->
  <div class="container-fluid">
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item m-4">
          <a class="btn btn-danger" aria-current="page" href="/admin/logout">ログアウト</a>
        </li>

      </ul>
    </div>
  </div>
</nav>