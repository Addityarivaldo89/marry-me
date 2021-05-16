<?php

namespace App\Controllers;

class Tema extends BaseController
{
	public function etnic()
	{
		return view('/tema/template_etnic_home');
	}

	public function rustic()
	{
		return view('/tema/template_rustic_home');
	}

	public function astronomy()
	{
		return view('tema/template_astronomy_home');
	}

	public function green()
	{
		return view('tema/template_fall_home');
	}

	public function rose()
	{
		return view('tema/template_rose_home');
	}
}
