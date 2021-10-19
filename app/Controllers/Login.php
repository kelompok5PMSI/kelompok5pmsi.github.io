<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function masuk()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login/hal_login', $data);
    }
}
