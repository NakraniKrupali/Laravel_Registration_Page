<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index()
    {
       return view('displayusers');
    }
    public function displayUser(Request $request)
    {
        $data=DB::table('user_master')->get();
        return view('displayusers',['data'=>$data]);
    }
    public function insertdata(Request $request)
    {  
         $validatedData = $request->validate([
            'txtfname' => ['required'],
            'txtemail' => ['required'],
            'txtpswd' => ['required'],
            'txtcpswd' => ['same:txtpswd'],
            'bod' => ['required'],
            'hobby' => ['required'],
            'gender' => ['required'],
        ],
        [
            'txtfname.required' => 'Please Enter Your name',
            'txtemail.required' => 'Please Enter Your Email id',
            'txtpswd.required' => 'Please Enter Your password',
            'txtcpswd.same' => 'Password does not matched',
            'bod.required' => 'Please select your BirthDate',
            'hobby.required' => 'Please select at least one hobby',
            'gender.required' => 'Please select Gender',

        ]);
        DB::table('user_master')->insert([
            'uname' => $request->txtfname,
            'email' => $request->txtemail,
            'password' =>$request->txtpswd,
            'bday' => $request->bod,
            'hobby' => implode(',', $request->hobby),
            'gender' => $request->gender,
            'city' => $request->city,

        ]);
        return redirect('users');

    }
}
