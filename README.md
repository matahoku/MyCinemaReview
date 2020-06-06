# Myシネマレビュー
会員ページ（マイページ）で自分だけが閲覧できる映画記録を無料で作成できます。　<br>
お気に入りの映画記録は他の人が閲覧可能なページ（公開ページ）に掲載可能です。 <br>

## デモ
![demo](https://raw.github.com/wiki/matahoku/MyCinemaReview/images/MyCinemaReview.gif)

## 概要
「映画が好きだから記録を付けたいな。でも手書きは面倒だし..。インターネットにあるレビューサイトは公開前提で嫌だな...。」 <br>
そんな思いから、自分だけが閲覧できるレビューサイトを作ろう！と、Myシネマレビューを作成しました。 <br>
作成したレビューは会員ページのみに表示される為、他の人からどう見られるか気にせず自由なレビューを記入できます。<br>
お気に入りのレビューがある際は、任意で他の人が閲覧できるよう公開することができます。<br>
※レビューにサムネイル画像を設定している場合、著作権法の観点から公開ページでは画像を設定しなかった場合と同一の初期画像が表示されるようになっています。<br>

## 構成
言語・フレームワーク　<br>
PHP 7.4.2 <br>
Laravel 6.16.0 <br>
Bootstrap <br>
Html&Css <br>

データベース<br>
Mysql 8.0.19 <br>

環境構築 <br>
docker(laradock) <br>

インフラ　<br>
aws(EC2) <br>

ライブラリ　<br>
starability.css　https://github.com/LunarLogic/starability <br>

## 実装機能
ログイン/会員登録機能 <br>
レビュー投稿機能（投稿・詳細・編集・削除・画像アップロード） <br>
レビュー公開機能（通常は非公開。公開にするかは任意） <br>
レビュー検索機能（タイトル検索） <br>
お問い合わせフォーム（投稿内容はGメールで受信） <br>
ペジネーション<br>

## リリース
Myシネマレビューへのリンク　→　http://my-cinema-review.com<br>
会員ページ体験用仮ログイン　アドレス：dummyuser@aaa　パスワード：dummyuser

　　　　





