@extends('layouts.app')

@section('css')
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
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
<div class="row justify-content-center container ">
  @foreach ($reviews as $review)
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body">
              @if(!empty($review->image))
              <div class="image-wrapper"><img class="movie-image" src="{{ asset('storage/images/'.$review->image) }}"></div>
              @else
              <div class="image-wrapper"><img src="{{ asset('images/dummy.png') }}" class="movie-image" ></div>
              @endif
              <h3 class="movie-title">{{ $review->title }}</h3>
              <p class="description">{{ $review->body }}</p>
              <a href="{{ route('privateShow', ['id' => $review->id ]) }}" class="btn btn-secondary detail-btn">詳細を読む</a>
            </div>
        </div>
    </div>
  @endforeach
</div>
{{ $reviews->links() }}
@endsection
