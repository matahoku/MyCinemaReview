<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Requests\StoreRequest;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Review::where('status',1)->orderBy('create_at', 'DESC')->paginate(9);
        return view('home', compact('reviews'));
    }
}
