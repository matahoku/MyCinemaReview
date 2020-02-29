@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('starability-minified/starability-all.min.css') }}">
@endsection

@section('content')
<div class="container">
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
      <h1 class='pagetitl' >レビュー編集ページ</h1>
      <form method='POST' action="{{ route('update') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">

              <div class="form-group">
                <input type="hidden" name="id" value="{{ $form->id }}">

                <label>映画のタイトル</label>
                <input type='text' class='form-control' name='title' value="{{ $form->title }}" placeholder='タイトルを入力'>
              </div>

              <div class="form-group">
                <label>ジャンル</label>
                <select class="form-control" value="{{ $form->genre }}" name="genre" required>
                  <option value="">--選択して下さい--</option>
                  <option value="アクション"  @if( $form->genre =='アクション') selected @endif>アクション</option>
                  <option value="アドベンチャー"  @if( $form->genre =='アドベンチャー') selected @endif>アドベンチャー</option>
                  <option value="SF" @if( $form->genre =='SF') selected @endif>SF</option>
                  <option value="ファンタジー" @if($form->genre =='ファンタジー') selected @endif>ファンタジー</option>
                  <option value="ホラー" @if($form->genre =='ホラー') selected @endif>ホラー</option>
                  <option value="サスペンス" @if($form->genre =='サスペンス') selected @endif>サスペンス</option>
                  <option value="コメディ" @if($form->genre =='コメディ') selected @endif>コメディ</option>
                  <option value="ロマンス" @if($form->genre =='ロマンス') selected @endif>ロマンス</option>
                  <option value="ファミリー" @if($form->genre =='ファミリー') selected @endif>ファミリー</option>
                  <option value="アニメ" @if($form->genre =='アニメ') selected @endif>アニメ</option>
                  <option value="ドキュメンタリー" @if($form->genre =='ドキュメンタリー') selected @endif>ドキュメンタリー</option>
                  <option value="ドラマ" @if($form->genre =='ドラマ') selected @endif>ドラマ</option>
                  <option value="ミュージカル" @if($form->genre =='ミュージカル') selected @endif>ミュージカル</option>
                  <option value="西部劇" @if($form->genre =='西部劇') selected @endif>西部劇</option>
                  <option value="時代劇" @if($form->genre =='時代劇') selected @endif>時代劇</option>
                  <option value="戦争" @if($form->genre =='戦争') selected @endif>戦争</option>
                  <option value="その他ジャンル" @if($form->genre =='その他ジャンル') selected @endif>その他ジャンル</option>
                </select>
              </div>

              <div class="form-group">
                <label>ストーリー</label>
                <textarea type='text' class='form-control' name='story' placeholder='ストーリーを入力'>{{ $form->story }}</textarea>
              </div>

              <div class="form-group">
              <label>レビュー本文</label>
                <textarea class='description form-control' name='body'  placeholder='レビューを入力'>{{ $form->body }}</textarea>
              </div>

              <fieldset class="starability-slot">
                <legend style="margin-bottom:0;">総合評価</legend>
                  <input checked="checked" @if($form->rating == 1) checked="checked" @endif type="radio" id="first-rate1" name="rating" value="1" />
                  <label for="first-rate1" title="Terrible">1 stars</label>

                  <input @if($form->rating == 2) checked="checked" @endif type="radio" id="first-rate2" name="rating" value="2" />
                  <label for="first-rate2" title="Not good">2 stars</label>

                  <input @if($form->rating == 3) checked="checked" @endif type="radio" id="first-rate3" name="rating" value="3" />
                  <label for="first-rate3" title="Average">3 stars</label>

                  <input @if($form->rating == 4) checked="checked" @endif type="radio" id="first-rate4" name="rating" value="4" />
                  <label for="first-rate4" title="Very good">4 stars</label>

                  <input @if($form->rating == 5) checked="checked" @endif type="radio" id="first-rate5" name="rating" value="5" />
                  <label for="first-rate5" title="Amazing">5 stars</label>
              </fieldset>

              <div class="form-group">
                <label for="file1" style="margin-top:10px;">映画のサムネイル（※サムネイルは再設定して下さい。）</label>
                <input type="file" id="file1" name='image' class="form-control-file">
              </div>

              <input type='submit' class='btn btn-primary' value='レビューを更新'>
              <input type="button" class="btn btn-primary" onclick="history.back()" value="編集をやめる">
              <input type="submit" class="btn btn-primary" formaction="{{ route('delete')  }}"  value="レビューを削除" style="margin-left:30px;">
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
