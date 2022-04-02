<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailBukuController extends Controller
{
    public function index()
    {
        return view('pages.details-book');
    }
}
