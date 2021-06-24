<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('index');
		if (in_groups('admin')) {
			return redirect()->to(base_url('admin'));
		} else if (in_groups('finance')) {
			return redirect()->to(base_url('finance'));
		} else if (in_groups('admission')) {
			return redirect()->to(base_url('admission'));
		} else if (in_groups('teacher')) {
			return redirect()->to(base_url('teacher'));
		} else if (in_groups('executiveteacher')) {
			return redirect()->to(base_url('teacher/principal'));
		}
	}
}
