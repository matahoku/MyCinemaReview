@extends('layouts.app')

@section('css')
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('search')
<form class="form-inline" action="{{ route('indexSearch') }}" method="post">
  @csrf
  <input class="form-control mr-sm-1" name="input" type="search" placeholder="タイトル検索" style="width:270px;">
  <button class="btn btn-primary" type="submit">検索</button>
</form>
@endsection

@section('switch')
<p class="current-page"> 現在：公開ページ</p>
<a href="{{ route('home')}}" class="btn-gradient-3d-simple" style="text-decoration:none;">マイページへ</a>
@endsection

@section('content')
<div class="row justify-content-center container ">
  @foreach ($reviews as $review)
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body">
              <div class="image-wrapper"><img src="{{ asset('images/dummy.png') }}" class="movie-image" ></div>
              <h3 class="movie-title">{{ $review->title }}</h3>
              <p class="description">{{ $review->body }}</p>
              <p>投稿者：{{ $review->public_nickname }}さん</p>
              <a href="{{ route('publicShow', ['id' => $review->id ]) }}" class="btn btn-secondary detail-btn">詳細を読む</a>
            </div>
        </div>
    </div>
  @endforeach
</div>
{{ $reviews->links() }}
@endsection
