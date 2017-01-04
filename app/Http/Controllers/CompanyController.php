<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'user_role' => $tip,
            'password' => bcrypt($request['password']),
        ]);
      return  Redirect::to('/')->with('message', 'Siz qeydiyyatdan keçdiniz,adminstrasiya tərəfindən yoxlanışdan sonra sizə bildiri. gelecek');
    }

}
