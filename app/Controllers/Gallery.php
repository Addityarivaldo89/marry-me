<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Gallery extends Controller
{
	public function index()
	{
		return view('tema/home');
	}

    public function create()
    {
        return view('invitation/uploadgallery');
    }

}
