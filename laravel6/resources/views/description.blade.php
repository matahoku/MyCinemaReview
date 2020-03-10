@extends('layouts.app')

@section('switch')
<a href="{{ route('/') }}" class="btn-gradient-3d-orange" style="text-decoration:none; margin-right:30px;">公開ページへ</a>
<a href="{{ route('home')}}" class="btn-gradient-3d-simple" style="text-decoration:none;">マイページへ</a>
@endsection

@section('content')
<div class="container">
  <h1 style="margin-bottom:15px;">Myシネマレビューとは？</h1>

  <h3>Myシネマレビューとは？</h3>
  <p>
  会員ページ（マイページ）で自分だけが閲覧できる映画記録を無料で作成できます。<br>
  お気に入りの映画記録は他の人が閲覧可能なページ（公開ページ）に掲載可能です。<br>
  ※レビューにサムネイル画像を設定している場合、著作権法の観点から公開ページでは画像を設定しなかった場合と同一の初期画像が表示されるようになっています。
  </p>
  <h3>注意</h3>
  <p>
  公開ページのレビューにはネタバレが含まれている可能性があります。<br>
  閲覧は自己責任でお願いします。<br>
  また、公開ページで不適切な投稿（映画と無関係なレビュー等)を発見した際は、投稿を削除しますのでご容赦下さい。
  </p>
  <h3>使用素材</h3>
  <a href="https://pixabay.com/ja/users/OpenClipart-Vectors-30363/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=152088">OpenClipart-Vectors</a>様による<a href="https://pixabay.com/ja/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=152088">Pixabay</a>からの画像
  <p>ロゴは <a href="https://www.designevo.com/jp/logo-maker/" title="無料オンラインロゴメーカー">DesignEvo</a> でロゴメーカーを利用</p>
  <h3>管理人</h3>
  <p>
  こんにちは!<br>
  管理人のmatamuraです。<br>
  このWebページはエンジニア転職のポートフォリオとして作成しました。<br>
  「映画が好きだから記録を付けたいな。でも手書きは面倒だし..。インターネットのレビューサイトは公開前提で嫌だな...。」<br>
  そんな思いから、自分だけが閲覧できるレビューサイトを作ろう！と、Myシネマレビューを作成しました。<br>
  現状、シンプル イズ ベストな構成になっていますが、今後良いアイデアが浮かんだら拡張していくかもしれません...。
  </p>
  <h3>お問い合わせ</h3>
  <p>ご意見・ご要望などがございましたら、お気軽にお問い合わせください。<br>
  ※お返事にはお時間をいただく場合がございます。予めご了承いただきますようお願いいたします。<br>
  ※メールアドレスは間違いのないようご記入下さい。間違っていた場合は回答することが困難になります。</p>
    <form  action="{{ route('contact') }}" method="post">
      @csrf
      <div class="card"  id='contact'>
        <div class="card-body">
          @if ($errors->any())
                <div class="alert alert-danger">
                  <h4 style="font-size:18px; padding-left:20px;">入力エラーです。下記の項目を確認して下さい。</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
          @endif
          @if (session('flash_message'))
            <div class="flash_message alert alert-success text-center py-3 my-0 mb30">
                {{ session('flash_message') }}
            </div>
          @endif
          <div class="form-group">
            <label>お名前</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
         </div>
         <div class="form-group">
           <label>メールアドレス</label>
           <input type="text" name="email" class="form-control" value="{{ old('email') }}">
         </div>
         <div class="form-group">
           <label>お問い合わせ内容</label>
           <textarea name="body" rows="8" cols="80" class="form-control" value="{{ old('body') }}"></textarea>
         </div>
         <p>内容をご確認のうえ送信ボタンをクリックしてください</p>
         <input type="submit" class="btn btn-primary">
       </div>
      </div>
    </form>
</div>





@endsection
