<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('data_di_partenza', now()->toDateString())->get();
        return view('home', compact('trains'));
    }
}
