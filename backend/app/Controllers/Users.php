<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    public function faq()
    {
        return view('user/faq');
    }

    public function devlog()
    {
        return view('user/devlog');
    }

    public function contactus()
    {
        return view('user/contactus');
    }

    public function about()
    {
        return view('user/about');
    }
}
