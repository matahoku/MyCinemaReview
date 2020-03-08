<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
      Contact::create($request->all());
      $request->session()->regenerateToken();
      return back();
    }


}
