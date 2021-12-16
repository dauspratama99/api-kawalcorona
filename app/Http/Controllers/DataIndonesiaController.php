<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataIndonesiaController extends Controller
{
    //
    public function index()
    {
        return view('indonesia');
    }

    public function getDataIndonesia()
    {
        return Http::get("https://api.kawalcorona.com/indonesia")->json();
    }
}
