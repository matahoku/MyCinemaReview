@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('starability-minified/starability-all.min.css') }}">
@endsection

@section('content')
<h1 class='pagetitle'>レビュー投稿ページ</h1>
<div class="row justify-content-center container">
    <div class="col-md-10">
      <form method='POST' action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">

              <div class="form-group">
                <label>映画のタイトル</label>
                <input type='text' class='form-control' name='title' placeholder='タイトルを入力'>
              </div>

              <div class="form-group">
                <label>ジャンル</label>
                <select class="form-control" name="genre" required>
                  <option value="">--選択して下さい--</option>
                  <option>アクション</option>
                  <option>アドベンチャー</option>
                  <option>SF</option>
                  <option>ファンタジー</option>
                  <option>ホラー</option>
                  <option>サスペンス</option>
                  <option>コメディ</option>
                  <option>ロマンス</option>
                  <option>ファミリー</option>
                  <option>アニメ</option>
                  <option>ドキュメンタリー</option>
                  <option>ドラマ</option>
                  <option>ミュージカル</option>
                  <option>西部劇</option>
                  <option>時代劇</option>
                  <option>戦争</option>
                  <option>その他ジャンル</option>
                </select>
              </div>

              <div class="form-group">
                <label>ストーリー</label>
                <textarea type='text' class='form-control' name='story' placeholder='ストーリーを入力'></textarea>
              </div>

              <div class="form-group">
              <label>レビュー本文</label>
                <textarea class='description form-control' name='body' placeholder='本文を入力'></textarea>
              </div>

              <fieldset class="starability-slot">
                <legend style="margin-bottom:0;">総合評価</legend>

                <input type="radio" id="rate5" name="rating" value="5">
                <label for="rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>

                <input type="radio" id="rate4" name="rating" value="4">
                <label for="rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>

                <input type="radio" id="rate3" name="rating" value="3">
                <label for="rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>

                <input type="radio" id="rate2" name="rating" value="2">
                <label for="rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>

                <input type="radio" id="rate1" name="rating" value="1">
                <label for="rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
              </fieldset>

              <div class="form-group">
                <label for="file1" style="margin-top:10px;">映画のサムネイル</label>
                <input type="file" id="file1" name='image' class="form-control-file">
              </div>

              <input type='submit' class='btn btn-primary' value='レビューを登録'>
              <!-- 編集破棄の確認モーダルを追加する -->
              <input type="button" class="btn btn-primary" onclick="history.back()" value="編集をやめる">
            </div>
        </div>
      </form>
    </div>
</div>
@endsection
