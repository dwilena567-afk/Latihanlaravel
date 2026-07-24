<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home()
    {
        return 'Halaman Utama Educa Studio';
    }

    // Products
    public function marbelEdu()
    {
        return 'Halaman Produk: Marbel Edu Games';
    }

    public function marbelAndFriends()
    {
        return 'Halaman Produk: Marbel & Friends Kids Games';
    }

    public function ririBooks()
    {
        return 'Halaman Produk: Riri Story Books';
    }

    public function kolakSongs()
    {
        return 'Halaman Produk: Kolak Kids Songs';
    }

    // News
    public function news($title = null)
    {
        if ($title) {
            return 'Menampilkan Berita: ' . str_replace('-', ' ', $title);
        }
        return 'Menampilkan Seluruh Berita Educa Studio';
    }

    // Program
    public function karir()
    {
        return 'Halaman Program: Karir';
    }

    public function magang()
    {
        return 'Halaman Program: Magang';
    }

    public function kunjungan()
    {
        return 'Halaman Program: Kunjungan Industri';
    }

    // About Us
    public function aboutUs()
    {
        return 'Halaman About Us Educa Studio';
    }
}
