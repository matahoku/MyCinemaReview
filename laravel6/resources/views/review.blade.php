@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('starability-minified/starability-all.min.css') }}">
@endsection

@section('content')
<h1 class='pagetitle'>レビュー投稿ページ</h1>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row justify-content-center container">
    <div class="col-md-10">
      <form method='POST' action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">

              <div class="form-group">
                <label>映画のタイトル</label>
                <input type='text' class='form-control' name='title' value="{{ old('title') }}" placeholder='タイトルを入力'>
              </div>

              <div class="form-group">
                <label>ジャンル</label>
                <select class="form-control" value="{{ old('genre') }}" name="genre" required>
                  <option value="">--選択して下さい--</option>
                  <option value="アクション" selected @if( old('genre')=='アクション') selected @endif>アクション</option>
                  <option value="アドベンチャー"  @if( old('genre')=='アドベンチャー') selected @endif>アドベンチャー</option>
                  <option value="SF" @if( old('genre')=='SF') selected @endif>SF</option>
                  <option value="ファンタジー" @if( old('genre')=='ファンタジー') selected @endif>ファンタジー</option>
                  <option value="ホラー" @if( old('genre')=='ホラー') selected @endif>ホラー</option>
                  <option value="サスペンス" @if( old('genre')=='サスペンス') selected @endif>サスペンス</option>
                  <option value="コメディ" @if( old('genre')=='コメディ') selected @endif>コメディ</option>
                  <option value="ロマンス" @if( old('genre')=='ロマンス') selected @endif>ロマンス</option>
                  <option value="ファミリー" @if( old('genre')=='ファミリー') selected @endif>ファミリー</option>
                  <option value="アニメ" @if( old('genre')=='アニメ') selected @endif>アニメ</option>
                  <option value="ドキュメンタリー" @if( old('genre')=='ドキュメンタリー') selected @endif>ドキュメンタリー</option>
                  <option value="ドラマ" @if( old('genre')=='ドラマ') selected @endif>ドラマ</option>
                  <option value="ミュージカル" @if( old('genre')=='ミュージカル') selected @endif>ミュージカル</option>
                  <option value="西部劇" @if( old('genre')=='西部劇') selected @endif>西部劇</option>
                  <option value="時代劇" @if( old('genre')=='時代劇') selected @endif>時代劇</option>
                  <option value="戦争" @if( old('genre')=='戦争') selected @endif>戦争</option>
                  <option value="その他ジャンル" @if( old('genre')=='その他ジャンル') selected @endif>その他ジャンル</option>
                </select>
              </div>

              <div class="form-group">
                <label>ストーリー</label>
                <textarea type='text' class='form-control' name='story' placeholder='ストーリーを入力'>{{ old('story') }}</textarea>
              </div>

              <div class="form-group">
              <label>レビュー本文</label>
                <textarea class='description form-control' name='body'  placeholder='本文を入力'>{{ old('body') }}</textarea>
              </div>

              <fieldset class="starability-slot">
                <legend style="margin-bottom:0;">総合評価</legend>
                  <!-- value５が星１つ、value１が星５つ -->
                  <input type="radio" id="first-rate5" name="rating" value="5" />
                  <label for="first-rate5" title="Amazing">5 stars</label>

                  <input type="radio" id="first-rate4" name="rating" value="4" />
                  <label for="first-rate4" title="Very good">4 stars</label>

                  <input type="radio" id="first-rate3" name="rating" value="3" />
                  <label for="first-rate3" title="Average">3 stars</label>

                  <input type="radio" id="first-rate2" name="rating" value="2" />
                  <label for="first-rate2" title="Not good">2 stars</label>

                  <input type="radio" id="first-rate1" name="rating" value="1" checked="checked"/>
                  <label for="first-rate1" title="Terrible">1 stars</label>
              </fieldset>

              <div class="form-group">
                <label for="file1" style="margin-top:10px;">映画のサムネイル</label>
                <input type="file" id="file1" name='image' class="form-control-file">
              </div>

              <input type='submit' class='btn btn-primary' value='レビューを登録'>
              <input type="button" class="btn btn-primary" onclick="history.back()" value="編集をやめる">
            </div>
        </div>
      </form>
    </div>
</div>
@endsection
