@extends('layouts.app')

@section('css')
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('search')
<form class="form-inline" action="{{ route('homeSearch') }}" method="post">
  @csrf
  <input class="form-control mr-sm-1" name="input" type="search" placeholder="タイトル検索" style="width:270px;">
  <button class="btn btn-primary" type="submit">検索</button>
</form>
@endsection

@section('switch')
<p class="current-page"> 現在：マイページ</p>
<a href="{{ route('/') }}" class="btn-gradient-3d-orange" style="text-decoration:none;">公開ページへ</a>
@endsection

@section('content')
<h2 class='container'>「{{$input}}」の検索結果</h2>
<div class="row justify-content-center container ">
  @foreach ($item as $item)
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body">
              @if(!empty($item->image))
              <div class="image-wrapper"><img class="movie-image" src="{{ asset('storage/images/'.$item->image) }}"></div>
              @else
              <div class="image-wrapper"><img src="{{ asset('images/dummy.png') }}" class="movie-image" ></div>
              @endif
              <h3 class="movie-title">{{ $item->title }}</h3>
              <p class="description">{{ $item->body }}</p>
              <a href="{{ route('privateShow', ['id' => $item->id ]) }}" class="btn btn-secondary detail-btn">詳細を読む</a>
            </div>
        </div>
    </div>
  @endforeach
</div>
@endsection
