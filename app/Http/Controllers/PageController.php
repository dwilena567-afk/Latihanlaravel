<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Hi! Selamat Datang di Website Laravel';
    }

    public function about()
    {
        return 'NIM: 2241720000 | Nama: Nama Anda | Kelas: TI-2A';
    }

    public function articles($id)
    {
        return 'Ini adalah halaman Artikel dengan ID: ' . $id;
    }
}
