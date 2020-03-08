<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendmail;


class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
      $to = 'mycinemareview.matamura@gmail.com';
      $input = $request->all();
      Contact::create($request->all());
      Mail::to($to)->send(new ContactSendmail($input));
      $request->session()->regenerateToken();
      return back();
    }


}
