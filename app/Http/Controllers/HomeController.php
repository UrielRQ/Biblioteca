<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Libro;
use App\models\User;
use App\models\Prestamo;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->user_type === 'admin') {
            $libros = Libro::with('categoria')->paginate(5);
            $total_libros = $libros->total();
            $libros_prestados = Libro::where('estatus', 1)->count();
            $total_usuarios = User::count();
            $devoluciones_pendientes = Prestamo::where('estado', 'pendiente')->count();

            // $prestamos = Prestamo::with('libro', 'usuario') -> latest()->take(5)->get();
            return view('home.index', compact('libros', 'total_libros', 'libros_prestados', 'total_usuarios', 'devoluciones_pendientes'));
        } else {
            return view('home.index_user');
        }

        return view('home.index');
    }
}
