@extends('layouts.app')

@section('css')
  <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('switch')
 <a href="{{ route('home')}}" class="btn-gradient-3d-simple" style="text-decoration:none;">マイページへ</a>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body">
              <div class="image-wrapper"><img src="{{ asset('images/dummy.png') }}" class= ></div>
              <h3 class="movie-title">タイトル</h3>
              <p class="description">レビュー本文</p>
              <a href="" class="btn btn-secondary detail-btn">詳細を読む</a>
            </div>
        </div>
    </div>
</div>
{{ $reviews->links() }}
@endsection
