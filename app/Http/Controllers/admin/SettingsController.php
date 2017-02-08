<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use Session;
use Cache;

class SettingsController extends Controller
{
    public function index()
    {
      $set = Settings::first();

      return view('admin.Settings.index',compact('set'));
    }

    public function save(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'desc' => 'required',
        'keywords' => 'required',
        'email' => 'required',
      ]);

      $set = Settings::first();
      $set->fill($request->all())->save();;

      Cache::forget('settings');

      Session::flash('mesaj', 'Dəyişikliklər yadda saxlanıldı!');
      return redirect()->to('/dash/settings');
    }
}
