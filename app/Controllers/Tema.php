<?php

namespace App\Controllers;

class Tema extends BaseController
{
	public function etnic()
	{
        return view('tema/etnic');
	}

	public function rustic()
	{
        return view('tema/rustic');
	}

	public function astronomy()
	{
        return view('tema/template-astronomy');
	}

	public function green()
	{
        return view('tema/fall');
	}

    public function rose()
    {
        return view('tema/rose');
    }
}
