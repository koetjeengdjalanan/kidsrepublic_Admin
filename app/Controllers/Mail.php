<?php

namespace App\Controllers;

class Mail extends BaseController
{
    public function Annotations()
    {
        $data['title'] = "Mail Annotations";
        return view('mail/annotations', $data);
    }
}
