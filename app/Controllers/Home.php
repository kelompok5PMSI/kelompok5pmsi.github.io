<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('login/hal_login');
        return view('page_customer/home');
    }
}
