<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Inventario de Productos</h1>

        <!-- Formulario para agregar producto (AQUÍ VA EL FORM) -->
        <form action="/productos" method="POST" class="mb-8 bg-gray-50 p-4 rounded border">
            @csrf
            <h2 class="text-lg font-bold mb-4 text-gray-700">Agregar Nuevo Producto</h2>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Nombre</label>
                    <input type="text" name="nombre" required class="w-full p-2 border rounded">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Precio</label>
                    <input type="number" step="0.01" name="precio" required class="w-full p-2 border rounded">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Stock</label>
                    <input type="number" name="stock" required class="w-full p-2 border rounded">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Descripción</label>
                    <input type="text" name="descripcion" class="w-full p-2 border rounded">
                </div>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Guardar Producto
            </button>
        </form>

        <!-- Tabla existente -->
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">Nombre</th>
                    <th class="p-3 border">Precio</th>
                    <th class="p-3 border">Stock</th>
                    <th class="p-3 border">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                    <tr class="hover:bg-gray-50 border-b">
                        <td class="p-3 border">{{ $producto->id }}</td>
                        <td class="p-3 border font-semibold">{{ $producto->nombre }}</td>
                        <td class="p-3 border">${{ number_format($producto->precio, 2) }}</td>
                        <td class="p-3 border">{{ $producto->stock }}</td>
                        <td class="p-3 border text-gray-600">{{ $producto->descripcion ?? 'Sin descripción' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center text-gray-500">No hay productos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
