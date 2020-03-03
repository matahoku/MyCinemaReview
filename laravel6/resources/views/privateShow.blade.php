@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('starability-minified/starability-all.min.css') }}">
@endsection

@section('search')
<form class="form-inline" action="{{ route('homeSearch') }}" method="post">
  @csrf
  <input class="form-control mr-sm-1" name="input" type="search" placeholder="キーワード検索" style="width:270px;">
  <button class="btn btn-primary" type="submit">検索</button>
</form>
@endsection

@section('switch')
<a href="{{ route('/') }}" class="btn-gradient-3d-orange" style="text-decoration:none;">公開ページへ</a>
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
          @if(!empty($review->image))
            <img class="movie-image" src="{{ asset('storage/images/'.$review->image) }}" >
          @else
            <img class="movie-image" src="{{ asset('images/dummy.png') }}">
          @endif
        </aside>
      </div>
      <div class="card-button">
        <a href="{{ route('home') }}" class="btn btn-info btn-back mb20">一覧へ戻る</a>
        <a href="{{ route('edit', ['id' => $review->id ]) }}" class="btn btn-info btn-back mb20"  >編集</a>
        @if($review->status == 1)
          <form  action="{{ route('public') }}" method="post" style="display:inline-block;">
            @csrf
            <input type="hidden" name="status" value="{{ $review->status }}">
            <input type="hidden" name="id" value="{{ $review->id }}">
            <input  class="btn btn-success btn-back mb20" value="公開する" type="submit">
          </form>
        @elseif($review->status == 2)
          <form  action="{{ route('private') }}" method="post" style="display:inline-block;">
            @csrf
            <input type="hidden" name="status" value="{{ $review->status }}">
            <input type="hidden" name="id" value="{{ $review->id }}">
            <input class="btn btn-success btn-back mb20" value="公開をやめる" type="submit">
          </form>
        @endif
      </div>
    </div>
  </div>
</div>




@endsection
