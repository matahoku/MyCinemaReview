@extends('layouts.app')

@section('content')
<h1 class='pagetitle'>レビュー投稿ページ</h1>
<div class="row justify-content-center container">
    <div class="col-md-10">
      <form method='POST' action="" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>映画のタイトル</label>
                <input type='text' class='form-control' name='title' placeholder='タイトルを入力'>
              </div>
              <div class="form-group">
              <!-- ジャンルをドロップリストに変更する。 -->
                <label>ジャンル</label>
                <input type="text" class="form-control" name="" placeholder="ジャンルを入力" >
              </div>
              <div class="form-group">
                <label>ストーリー</label>
                <input type='text' class='form-control' name='' placeholder='ストーリーを入力'>
              </div>
              <div class="form-group">
              <label>レビュー本文</label>
                <textarea class='description form-control' name='body' placeholder='本文を入力'></textarea>
              </div>
              <!-- vueで星評価を追加する。 -->
              <div class="form-group">
                <label for="file1">映画のサムネイル</label>
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
