<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Página de Inicio
    public function index()
    {
        return view('welcome'); // Vista para el inicio
    }

    // Página de Productos
    public function products()
    {
        return view('productos'); // Vista para los productos
    }

    // Página de Servicios
    public function services()
    {
        return view('servicios'); // Vista para los servicios
    }


    // Página de Contacto
    public function contact()
    {
        return view('contacto'); // Vista para el contacto
    }
    public function login(){
        return view('login');
    }
}
