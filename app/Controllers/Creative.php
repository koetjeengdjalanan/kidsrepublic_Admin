<?php

namespace App\Controllers;

class Creative extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard";
        return view('creative/index', $data);
    }

    public function Banner()
    {
        # code...
        $data['title'] = "Banner";
        return view('creative/banner', $data);
    }
}
