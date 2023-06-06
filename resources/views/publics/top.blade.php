@extends('layout')
@section('title','TOP一覧')
@section('content')



<div class="container mx-5">
  <div class="row">
    <div class="side_menu col-3">
      @include('publics.side_menu')
    </div>
    <div class="col-9 justify-content-center d-flex align-items-center">
      <div class="col-sm-10">
        <div class="album py-5">
          <div class="container">

            <div class="row my-3">

              <!-- 商品おすすめTOP２ -->
              <div class="col g-3">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                  </svg>

                  <div class="card-body">
                    <a class="card-text" href="">キムチ</a>
                    <div class="d-flex justify-content-between align-items-center">

                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col g-3">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                  </svg>

                  <div class="card-body">
                    <a class="card-text" href="">キムチ</a>
                    <div class="d-flex justify-content-between align-items-center">

                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>



              <!-- 商品一覧 -->

              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($items as $item)
                <div class="col">
                  <div class="card shadow-sm">
                    <div class="bd-placeholder-img card-img-top">
                      <img src="{{ asset('storage/item_images/' . $item->img) }}" alt="商品画像" style="align-items:center; width:100%;">
                    </div>

                    <div class="card-body">
                      <a class="card-text d-flex justify-content-center text-align-center" style="text-decoration: none; color:black; font-weight:bold;" href="/view/{{ $item->id }}">{{  $item->name  }}</a>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection