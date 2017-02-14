<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      $users =  User::orderBy('id','desc')->get();
      return view('admin.SiteUsers.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::with('company','person')->findOrFail($id);
      if($user->user_role == 0){
        //istifadeci
        return view('admin.SiteUsers.uEdit',compact('user'));
      }elseif ($user->user_role == 1) {
        //sirket
        return view('admin.SiteUsers.cEdit',compact('user'));
      }elseif ($user->user_role == 2) {
        //admin
        return view('admin.SiteUsers.uEdit',compact('user'));
      }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


      $user = User::with('person')->where('id', $id)->first();

      if($user->user_role == 0){
        //istifadeci
        $this->validate($request, [
          'person_name' => 'required',
          'email' => 'required|email',
          'u_phone' => 'required',
          'u_birth' => 'required'
        ]);

      $user->person->u_name = $request['person_name'];
      $user->person->u_phone = $request['u_phone'];
      $user->person->u_birth = $request['u_birth'];
      $user->person->u_gender = $request['u_gender'];
      $user->email = $request['email'];
      $user->user_status = $request['user_status'];
      $user->password = bcrypt($request['password']);
      $user->save();
      $user->person->save();
      }elseif ($user->user_role == 1) {
        //sirket
        $this->validate($request, [
          'c_name' => 'required',
          'c_desc' => 'required',
          'c_official_mail' => 'required',
          'user_status' => 'required',
          'c_voen' => 'required'
        ]);
        $user->user_status = $request['user_status'];
        $user->company->c_confirmed = $request['c_confirmed'];
        $user->company->c_voen = $request['c_voen'];
        $user->company->c_number = $request['c_number'];
        $user->company->c_official_mail = $request['c_official_mail'];
        $user->company->c_desc = $request['c_desc'];
        $user->company->c_name = $request['c_name'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $user->company->save();
      }elseif ($user->user_role == 2) {
        //admin
        $this->validate($request, [
          'person_name' => 'required',
          'email' => 'required|email',
          'u_phone' => 'required',
          'u_birth' => 'required'
        ]);
        $user->person->u_name = $request['person_name'];
        $user->person->u_phone = $request['u_phone'];
        $user->person->u_birth = $request['u_birth'];
        $user->person->u_gender = $request['u_gender'];
        $user->email = $request['email'];
        $user->user_status = $request['user_status'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $user->person->save();
      }

      Session::flash('mesaj', 'Redaktə edildi!');
      return redirect()->route('istifadechiler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
