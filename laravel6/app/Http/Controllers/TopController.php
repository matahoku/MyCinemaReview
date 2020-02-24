<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class TopController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function create()
    {
      return view('reviews');
    }

    public function store(StoreRequest $request)
    {



      $request->file('image')->store('/public/images');
    }



}
