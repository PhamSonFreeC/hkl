<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HacklikeController extends Controller
{
    public function index(){
    	return view('/home');
    }
    public function contact()
	{
		return view('/contact');
	}
	public function aboutus()
	{
		return view('/aboutus');
	}
	public function pricelist()
	{
		return view('/pricelist');
	}
	public function news()
	{
		return view('/news');
	}

}