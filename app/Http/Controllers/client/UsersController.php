<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Session;
use App\User;
use App\Companies;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Storage;

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

        return 'istifadechi profili';

      }elseif (Auth::user()->user_role == '1') {
        //shirket profili
        if (Auth::user()->user_status == '1') {
          return view('client.cProfile.edit',compact(''));
        }elseif(Auth::user()->user_status == '2') {
          $cProfile =  User::with('company')->findOrFail($id);
          // dd(Storage::disk('local')->url('CompanieLogo/71bd6c73444ec93d73e0841312d8305e.jpeg'));
          return view('client.cProfile.index',compact('cProfile'));
        }else{
          return 'Hesab deaktivdir!';
        }

      }elseif (Auth::user()->user_role == '2') {
        //admin panele gonder
        return  Redirect::to('/dash');
      }

    }

    public function companyCreate(Request $request)
    {
        $this->validate($request, [
          'c_name' => 'required',
          'c_desc' => 'required',
          'c_voen' => 'required',
          'c_number' => 'required',
          'c_official_mail' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $id = Auth::user()->id;

        $comp = Companies::where('c_user_id', $id)->first();

        if ( ! $comp)
        {
          $path = $request->file('image')->store('CompanieLogo');
          Companies::create([
              'c_name' => $request['c_name'],
              'c_logo_image' => $path,
              'c_desc' => $request['c_desc'],
              'c_voen' => $request['c_voen'],
              'c_number' => $request['c_number'],
              'c_official_mail' => $request['c_official_mail'],
              'c_user_id' => $id
          ]);

          $user = User::findOrFail($id);
          $user->user_status = '2';
          $user->save();
        }



        Session::flash('mesaj', 'Təbriklər şirkət məlumatları göndərildi! Yoxlanışdan sonra aktivləşdiriləcək.');
        return back();

    }
}
