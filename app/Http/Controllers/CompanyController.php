<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Session;
use App\User;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{


    protected function addUser(Request $request)
    {
        $validator = validator($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:user',
            'password' => 'required|min:6',
            'password_confirmation' => 'min:6|same:password'
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

}
