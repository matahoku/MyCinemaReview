<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
      return true;
    }

    public function rules()
    {
        return [
          'user_id' => 'required',
          'title' => 'required',
          'genre' => 'required',
          'story' => 'required',
          'body' => 'required',
          'rating' => 'required',
          'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
          'title.required' => 'タイトルを入力して下さい。',
          'genre.required' => 'ジャンルを選択して下さい。',
          'story.required' => 'ストーリーを入力して下さい。',
          'body.required' => 'レビューを入力して下さい。',
          'rating.required' => '総合評価を選択して下さい。',
          'image.mimes' => 'サムネイル画像にはjpeg,png,jpg,gif,svgタイプが使用できます。',
          'image.max' => 'ファイルサイズは２Mまで使用できます。',
        ];
    }
}
