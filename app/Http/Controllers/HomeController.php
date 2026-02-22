<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Libro;

class HomeController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('home.index', compact('libros'));
    }
}
