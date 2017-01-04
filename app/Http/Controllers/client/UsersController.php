<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Session;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Auth;

class UsersController extends Controller
{
    protected function addUser(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6|confirmed',
        ]);


        if($request['tip']=='user'){
          $tip = "0";
        }elseif ($request['tip']=='comp') {
          $tip = "1";
        }else{
          $tip = "null";
        }

        $confirmation_code = str_random(30);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'user_role' => $tip,
            'confirmation_code' => $confirmation_code,
            'password' => bcrypt($request['password']),
        ]);
        $data = array('kod' => $confirmation_code);
        Mail::send('email.verify', $data, function($message) use ($request){
            $message->to($request['email'], $request['name'])
                ->subject('E-poçt təsdiqi');
        });

        Session::flash('mesaj', 'Qeydiyyat tamamlandı. Zəhmət olmasa qeyd etdiyiniz e-poçt ünvanından hesabınızı təsdiqləyin.');
        return  Redirect::to('/');
    }

    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::where('confirmation_code', $confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->user_status = 1;
        $user->confirmation_code = null;
        $user->save();

        Session::flash('mesaj', 'Hesabınız təsdiqləndi! Digər məlumatlarınızı daxil etmək üçün hesabınıza daxil olun.');
        return  Redirect::to('/');

    }

    public function profile()
    {
      $id = Auth::user()->id;
      if (Auth::user()->user_role == '0') {
        # user...
      }elseif (Auth::user()->user_role == '1') {
        if (Auth::user()->user_status == '1') {
          return "edit";
        }else {
          $cProfile =  User::with('company')->findOrFail($id);
          return view('client.cProfile.index',compact('cProfile'));
        }

      }elseif (Auth::user()->user_role == '2') {
        # adminseneee...
      }

    }
}
