<?php

// app/Http/Controllers/menuadmin.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuadmin extends Controller
{
    public function productosadmin(){
        return view("productosadmin");
    }
    
    public function servicios(){
        return view("serviciosadmin");
    }
    
    public function ventas(){
        return view("ventasadmin");
    }
    
    public function index()
    {
        return view('home'); // Asegúrate de que la vista 'home' exista en resources/views/home.blade.php
    }
}

