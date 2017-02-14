<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Session;

class ContactController extends Controller
{
    public function index()
    {
      return view('client.contact');
    }

    public function mail(Request $request)
    {
      $this->validate($request, [
        'email' => 'required',
        'name' => 'required',
        'message' => 'required',
      ]);
      $to_mail = config('app.email');
      $data = array('mesaj' => $request['message'], 'ad' => $request['name'], 'poct' => $request['email'], 'movzu' => $request['title']);
      Mail::send('email.message', $data, function($message) use ($request){
          $message->to($to_mail)->from($request['email'])
              ->subject('Gotender. Yeni mesaj');
      });

      Session::flash('mesaj', 'Mesajınız bizə çatdı, təşəkkürlər!');
      return  Redirect::to('/');
    }
}
