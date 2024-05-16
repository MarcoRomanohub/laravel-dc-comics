<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comic;

class PageController extends Controller
{
    public function index()
    {
        $num_products = comic::count();
        return view('home', compact('num_products'));
    }

    public function nuovaPagina()
    {
        return view('nuova-pagina');
    }
}
