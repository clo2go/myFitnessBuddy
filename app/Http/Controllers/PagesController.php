<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
	public function home()

	{
		$people = ['Jen', 'Mike', 'Juan'];

	     return view('welcome', compact('people'));

	}

	public function about ()
	{

		return view('about');

	}

	public function another ()
	{

		return view('another');

	}
}