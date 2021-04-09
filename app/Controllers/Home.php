<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('tema/home');
	}

	public function register()
	{
		return view('auth/register');
	}

	public function user()
	{
		return view('user/index');
	}

	public function beranda()
	{
		return view('invitation/dashboard');
	}
}
