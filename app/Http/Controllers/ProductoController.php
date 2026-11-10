<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::latest()->get();
        return view('index', compact('productos'));
    }

    // Almacena un nuevo producto con validación
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'      => 'required|string|max:255',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'descripcion' => 'nullable|string',
        ]);

        Producto::create($data);

        return redirect('/productos')->with('exito', 'Producto creado exitosamente');
    }
}
