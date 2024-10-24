<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

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

    public function eliminarProducto($id)
    {
        // Encontrar el producto por su ID
        $producto = Producto::findOrFail($id);
        
        // Verificar si el producto tiene una imagen asociada
        if ($producto->imagen) {
            // Eliminar la imagen de la carpeta 'public/productos'
            Storage::disk('public')->delete($producto->imagen);
        }

        // Eliminar el producto de la base de datos
        $producto->delete();

        // Obtener la lista actualizada de productos
        $productos = Producto::all();

        // Retornar la respuesta JSON con la lista actualizada y un mensaje de éxito
        return response()->json([
            'success' => true,
            'message' => 'Producto eliminado con éxito.',
            'productos' => $productos,
        ]);
    }
    public function mostrarProductoscliente()
    {
        // Obtiene todos los productos disponibles en stock, paginados
        $productos = Producto::where('stock', '>', 0)->paginate(10);
        
        // Retorna la vista con los productos
        return view('productos', compact('productos'));
    }
    
}
