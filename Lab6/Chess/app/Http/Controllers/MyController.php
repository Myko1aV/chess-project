<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function validateForm(Request $request)
    {
      $valid = $this->validate($request, [
      'login' => 'required|min:6|max:30|regex:/(^[a-zA-Z\d\.\-\_]+@[a-z]+\.[a-z]+$)/u',
      'password' => 'required|min:6|max:20|regex:/(^[a-zA-Z\d]+$)/u',
      'userDescribe' => 'required|min:40|max:400',
      'country' => 'required|regex:/(^[a-zA-Z\d\.\-\_]+$)/u']);

       $playerData = new Player();
       $playerData->login = $request->input('login');
       $playerData->password = $request->input('password');
       $playerData->level = $request->input('level');
       $playerData->userDescribe = $request->input('userDescribe');
       $playerData->country = $request->input('country');

       $playerData->save();

       return view('register', ['playerData' => $playerData->all()]);
    }
}
