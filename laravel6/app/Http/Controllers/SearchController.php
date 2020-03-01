<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Requests\StoreRequest;

class SearchController extends Controller
{
    public function search(Request $request)
    {
      $item = Review::where('name', $request->input)->get();
      $param = ['item' => $item];
      return redirect('home')
    }
}
