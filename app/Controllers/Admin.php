<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('/page_admin/dashboard', $data);
    }

    public function barang()
    {
        $data = [
            'title' => 'List Barang'
        ];
        return view('page_admin/barang', $data);
    }

    public function pemesanan()
    {
        $data = [
            'title' => 'Pemesanan Pelanggan'
        ];
        return view('page_admin/pemesanan', $data);
    }

    public function laporan()
    {
        $data = [
            'title' => 'Cetak Laporan'
        ];
        return view('page_admin/laporan', $data);
    }
}
