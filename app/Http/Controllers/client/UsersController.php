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
use File;
use App\Persons;
use App\Categories;
use App\CompaynCategories;

class UsersController extends Controller
{
    protected function addUser(Request $request)
    {
        $this->validate($request, [
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:5|confirmed',
        ]);


        if($request['tip']=='user'){
          $tip = "0";
        }elseif ($request['tip']=='comp') {
          $tip = "1";
        }else{
          $tip = NULL;
        }

        $confirmation_code = str_random(30);

        $user_last = User::create([
            'email' => $request['email'],
            'user_role' => $tip,
            'confirmation_code' => $confirmation_code,
            'password' => bcrypt($request['password']),
        ])->id;
        if($request['tip']=='user'){
          Persons::create([
            'u_user_id' => $user_last,
          ]);
        }
        $data = array('kod' => $confirmation_code);
        Mail::send('email.verify', $data, function($message) use ($request){
            $message->to($request['email'])
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
        //user profile
        if (Auth::user()->user_status == '1') {
          return redirect('/profile-edit');
        }elseif(Auth::user()->user_status == '2') {
          $uProfile =  User::with('person')->findOrFail($id);
          return view('client.uProfile.index',compact('uProfile'));
        }else{
          Session::flash('mesaj', 'Hesab deaktivdir!');
          return back();
        }

      }elseif (Auth::user()->user_role == '1') {
        //shirket profili
        if (Auth::user()->user_status == '1') {
          $cat = Categories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
          return view('client.cProfile.create',compact('cat'));
        }elseif(Auth::user()->user_status == '2') {
          $cProfile =  User::with('company','tender')->findOrFail($id);
          return view('client.cProfile.index',compact('cProfile'));
        }else{
          Session::flash('mesaj', 'Hesab deaktivdir!');
          return back();
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
          'cat' => 'required',
          'c_official_mail' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($request['cat']);
        $id = Auth::user()->id;

        $comp = Companies::where('c_user_id', $id)->first();

        if ( ! $comp)
        {
          $path = $request->file('image')->store('CompaniesLogo','public');
          $comp = Companies::create([
              'c_name' => $request['c_name'],
              'c_logo_image' => $path,
              'c_desc' => $request['c_desc'],
              'c_voen' => $request['c_voen'],
              'c_number' => $request['c_number'],
              'c_official_mail' => $request['c_official_mail'],
              'c_user_id' => $id
          ])->c_id;
          foreach ($request['cat'] as $cat) {
            CompaynCategories::create([
              'cc_cat_id' => $cat,
              'cc_company_id' => $comp
            ]);
          }
          $user = User::findOrFail($id);
          $user->user_status = '2';
          $user->save();
        }

        Session::flash('mesaj', 'Təbriklər şirkət məlumatları göndərildi! Yoxlanışdan sonra aktivləşdiriləcək.');
        return back();

    }

    public function profileEdit()
    {
      $id = Auth::user()->id;
      if(Auth::user()->user_role == '0'){
        // user profile edit
        $uProfile =  User::with('person')->findOrFail($id);
        return view('client.uProfile.edit',compact('uProfile'));
      }elseif (Auth::user()->user_role == '1') {
        //company profile edit
        $cat = Categories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
        $cProfile =  User::with('company')->findOrFail($id);
        return view('client.cProfile.edit',compact('cProfile','cat'));
      }

    }

    public function profileUpdate(Request $request)
    {
      $id = Auth::user()->id;
      if(Auth::user()->user_role == '0'){
        // user profile edit
        $this->validate($request, [
          'u_name' => 'required',
          'u_birth' => 'required',
          'u_phone' => 'required',
          'u_gender' => 'required',

        ]);

        $person = Persons::where('u_user_id', $id)->first();
        $person->u_name = $request['u_name'];
        $person->u_birth = $request['u_birth'];
        $person->u_phone = $request['u_phone'];
        $person->u_gender = $request['u_gender'];
        $person->save();

        $user = User::findOrFail($id);
        $user->user_status = '2';
        $user->save();

        Session::flash('mesaj', 'Təbriklər. Məlumatlar uğurla yeniləndi!');
        return back();

      }elseif(Auth::user()->user_role == '1'){
        // company profile edit
        $this->validate($request, [
          'c_name' => 'required',
          'c_number' => 'required',
          'c_official_mail' => 'required',
          'c_desc' => 'required',
          'cc_cat_id' => 'required',
          'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $c = Companies::with('categories')->where('c_user_id',$id)->first();
        $c->c_name = $request['c_name'];
        $c->c_number = $request['c_number'];
        $c->c_official_mail = $request['c_official_mail'];
        $c->c_desc = $request['c_desc'];

        $del = public_path('uploads').'/images/'.$c->c_logo_image;

        if ($request->file('image')) {
          $path = $request->file('image')->store('CompaniesLogo','public');
          File::delete($del);
          $c->c_logo_image = $path;
        }
        $c->save();
        $c->categories()->sync($request['cc_cat_id']);
        Session::flash('mesaj', 'Təbriklər. Məlumatlar uğurla yeniləndi!');
        return back();
      }
    }

    public function companyPage($id)
    {
      $company = Companies::with('categories')->where('c_id', $id)->where('c_confirmed', '1')->first();
      return view('client.Pages.company',compact('company'));
    }

    public function userNotifications()
    {
      $notifications = Auth::user()->unreadNotifications;
      return view('client.Pages.notifications',compact('notifications'));
    }
}
