<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Libro;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->user_type === 'admin') {
            return view('home.index');
        } else {
            return view('home.index_user');
        }

        return view('home.index');
    }
}
