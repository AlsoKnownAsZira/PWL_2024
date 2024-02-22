<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//mwmbuat controller poin f
class PageController extends Controller
{
    public function index()
    {
        return "Selamat datang gais!";
    }

    public function about()
    {
        return "Nama: Brilyan Satria Wahyuda - NIM:2241720019";
    }
    public function articles($id)
    {
        return "Halaman artikel dengan ID " . $id;
    }
}
