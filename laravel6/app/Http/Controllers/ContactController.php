<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
      $to = 'mycinemareview.matamura@gmail.com';
      $input = $request->all();
      Contact::create($request->all());
      Mail::to($to)->send(new ContactSendmail($input));
      $request->session()->regenerateToken();
      return Redirect::route('description', ['#contact'])->with('flash_message', 'お問い合わせを受け付けました。');
    }


}
