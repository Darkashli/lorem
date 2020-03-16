<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		return view('pages.dashboard');  	
	}
 
	public function notification()
	{
		$messages = Message::all;
		return view('subviews.notification', compact('messages'));
	}
}
