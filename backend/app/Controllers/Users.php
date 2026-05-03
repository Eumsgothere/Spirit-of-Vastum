<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }

    public function FAQ()
    {
        return view('user/FAQ');
    }

    public function devlog()
    {
        return view('user/devlog'); // fixed typo
    }

    public function ContactUS()
    {
        return view('user/ContactUS');
    }

    public function About()
    {
        return view('user/about');
    }
}
