<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Requests\StoreRequest;

class TopController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function create()
    {
      return view('review');
    }

    public function store(StoreRequest $request)
    {
      $post = $request->all();
      $validated = $request->validated();

      if ($request->hasFile('image')) {
          $request->file('image')->store('/public/images');
          $data = ['user_id'=> \Auth::id(), 'title'=>$post['title'], 'genre'=>$post['genre'],
                   'story'=>$post['story'], 'body'=>$post['body'], 'rating'=>$post['rating'],
                   'image'=>$request->file('image')->hashName()];
        } else {
          $data = ['user_id'=> \Auth::id(), 'title'=>$post['title'], 'genre'=>$post['genre'],
                  'story'=>$post['story'], 'body'=>$post['body'], 'rating'=>$post['rating']];
        }
        Review::insert($data);
        return redirect('/home');
      }

}
