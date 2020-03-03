@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('starability-minified/starability-all.min.css') }}">
@endsection

@section('search')
<form class="form-inline" action="{{ route('indexSearch') }}" method="post">
  @csrf
  <input class="form-control mr-sm-1" name="input" type="search" placeholder="キーワード検索" style="width:270px;">
  <button class="btn btn-primary" type="submit">検索</button>
</form>
@endsection

@section('switch')
<a href="{{ route('home')}}" class="btn-gradient-3d-simple" style="text-decoration:none;">マイページへ</a>
@endsection

@section('content')
<div class="container">
  <h1 class="pagetitle">レビュー詳細ページ</h1>
    <div class="card">
      <div class="card-body d-flex">
        <section class="review-main">
          <h3>タイトル</h2>
          <p class="space">{{ $review->title }}</p>
          <h3>ジャンル</h2>
          <p>{{ $review->genre }}</p>
          <h3>ストーリー</h2>
          <p class="space">{{ $review->story }}</p>
          <h3>レビュー本文</h2>
          <p class="space">{{ $review->body }}</p>
          <h3 id="rated-element">総合評価</h2>
          <div class="starability-result" data-rating="{{ $review->rating }}" aria-description="rated-element"></div>
        </section>
        <aside class="review-image">
            <img class="movie-image" src="{{ asset('images/dummy.png') }}">
        </aside>
      </div>
      <div class="card-button">
        <a href="{{ route('home') }}" class="btn btn-info btn-back mb20">一覧へ戻る</a>
      </div>
    </div>
  </div>
</div>




@endsection
