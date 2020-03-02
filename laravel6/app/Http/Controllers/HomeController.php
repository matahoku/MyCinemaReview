<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Review;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Review::where('user_id', Auth::id())->orderBy('create_at', 'DESC')->paginate(9);
        return view('home', compact('reviews'));
    }
}
