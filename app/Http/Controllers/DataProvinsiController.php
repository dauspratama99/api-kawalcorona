<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataProvinsiController extends Controller
{
    //
    public function index()
    {
        return view('provinsi');
    }

    public function getDataProvinsi()
    {
        return Http::get("https://api.kawalcorona.com/indonesia/provinsi")->json();
    }
}
