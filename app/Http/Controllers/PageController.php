<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "Nama: Muhammad Syahrul Gunawan <br> NIM: 2341720002";
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID $id";
    }
}
