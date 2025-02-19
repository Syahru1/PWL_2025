<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return "Nama: Muhammad Syahrul Gunawan <br> NIM: 2341720002";
    }
}
