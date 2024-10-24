<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Método para almacenar el nuevo producto
    public function productosagregar(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer', // Asegúrate de que el stock sea un campo requerido
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
        ]);

        // Creación del nuevo producto
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        // Manejo de la imagen (opcional)
        if ($request->hasFile('imagen')) {
            // Cambia la ruta de almacenamiento a public/productos
            $imagenPath = $request->file('imagen')->store('productos', 'public');
            $producto->imagen = $imagenPath;
        }

        // Guardar en la base de datos
        $producto->save();

        // Redirigir a una página con un mensaje de éxito
        return redirect()->route('productosadmin')->with('success', 'Producto creado con éxito.');
    }
    
    public function mostrarProductos()
    {
        $productos = Producto::all(); // Obtén todos los productos desde la base de datos
        return view('productosadmin', compact('productos'));
    }
    
    

}
