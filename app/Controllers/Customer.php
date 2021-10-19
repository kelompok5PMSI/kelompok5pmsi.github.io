<?php

namespace App\Controllers;

class Customer extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'PT. Andalan Darma Mulia'
        ];
        return view('page_customer/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('page_customer/about', $data);
    }

    public function pesan()
    {
        $data = [
            'title' => 'Buat Pesanan'
        ];
        return view('page_customer/pesan', $data);
    }

    public function pesanan()
    {
        $data = [
            'title' => 'Pesanan'
        ];
        return view('page_customer/pesanan', $data);
    }
}
