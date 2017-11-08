<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('/home');
    }
    public function postLogin(Request $request){
    	$rules = [
    		'username' => 'required|username',
    		'password' => 'required|min:8'
    	];
    	$validator = Validator::make($request->all(), $rules);
        dd($validator);
    	// if( $validator->fails()){
    	// 	return redirect()->back()->withErrors($validator);
    	// } else {

    	// }
    }
}
