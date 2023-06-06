@extends('layout')
@section('title','退会')
@section('content')


<div class="container pt-5 mt-5">
  <div class="row m-5 text-center">
    <div class="fs-3">退会手続きが完了しました。</div>
  </div>
</div>

<div class="d-flex justify-content-center m-4">
  <a href="{{ route('top') }}" type="submit" id="button" name="confirm" class="form-control btn btn-danger btn-lg mt-5" style="width:250px">TOPへ戻る</a>
</div>


@endsection