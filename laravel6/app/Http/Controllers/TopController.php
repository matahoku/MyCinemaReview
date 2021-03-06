<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\User;
use App\Http\Requests\StoreRequest;


class TopController extends Controller
{
    public function index()
    {
      $reviews = Review::where('status',2)->orderBy('create_at', 'DESC')->paginate(9);
      return view('index', compact('reviews'));
    }

    public function publicShow($id)
    {
      $review = Review::where('id', $id)->first();
      return view('publicShow', compact('review'));
    }

    public function privateShow($id)
    {
      $review = Review::where('id', $id)->first();
      return view('privateShow', compact('review'));
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
          $data = ['user_id'=> \Auth::id(), 'public_nickname'=>$post['nickname'], 'title'=>$post['title'],
                   'genre'=>$post['genre'], 'story'=>$post['story'], 'body'=>$post['body'],
                   'rating'=>$post['rating'], 'image'=>$request->file('image')->hashName()];
        } else {
          $data = ['user_id'=> \Auth::id(),'public_nickname'=>$post['nickname'], 'title'=>$post['title'],
                   'genre'=>$post['genre'], 'story'=>$post['story'], 'body'=>$post['body'], 'rating'=>$post['rating']];
        }
        Review::insert($data);
        return redirect('/home');
    }

    public function edit($id)
    {
      $review = Review::findOrFail($id);
      return view('edit', ['form'=> $review ] );
    }

    public function update(StoreRequest $request)
    {
      $review = Review::findOrFail($request->id);
      $form = $request->all();
      unset($form['_token']);
      if($request->hasFile('image')){
        $deleteimage = Review::findOrFail($request->id);
        $deletename = $deleteimage->image;
        $delpath = storage_path() . '/app/public/images/' . $deletename;
        \File::delete($delpath);
        $request->file('image')->store('/public/images');
        $form = [ 'title'=>$form['title'], 'genre'=>$form['genre'], 'story'=>$form['story'], 'body'=>$form['body'],
                 'rating'=>$form['rating'], 'image'=>$request->file('image')->hashName()];
        $review->fill($form)->save();
      }else{
        $review->fill($form)->save();
      }
      return redirect('/home');
    }

    public function delete(StoreRequest $request)
    {
      $review = Review::findOrFail($request->id);
      if(isset($review->image)){
        $deleteimage = Review::findOrFail($request->id);
        $deletename = $deleteimage->image;
        $delpath = storage_path() . '/app/public/images/' . $deletename;
        \File::delete($delpath);
        $review->delete();
      } else {
        $review->delete();
      }
      return redirect('/home');
    }

    public function indexSearch(Request $request)
    {
      $item = Review::where('title', 'like', '%'. $request->input .'%')->orderBy('create_at', 'DESC')->get();
      $param = ['input' =>$request->input ,'item' => $item];
      return view('indexSearch', $param);
    }

    public function homeSearch(Request $request)
    {
      $item = Review::where('title', 'like', '%'. $request->input .'%')->where('user_id', Auth::id())->orderBy('create_at', 'DESC')->get();
      $param = ['input' =>$request->input ,'item' => $item];
      return view('homeSearch', $param);
    }

    public function public(Request $request)
    {
      $review = Review::findOrFail($request->id);
      $review->increment('status',1);
      $review->save();
      return back();
    }

    public function private(Request $request)
    {
      $review = Review::findOrFail($request->id);
      $review->decrement('status',1);
      $review->save();
      return back();
    }

    public function description()
    {
      return view('description');
    }


}
