<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            ['nombre' => 'Mouse Inalámbrico', 'precio' => 350.00, 'stock' => 25, 'descripcion' => 'Mouse ergonómico 2.4GHz'],
            ['nombre' => 'Monitor 24 IPS', 'precio' => 2800.00, 'stock' => 10, 'descripcion' => 'Full HD 75Hz'],
            ['nombre' => 'Auriculares Gaming', 'precio' => 750.50, 'stock' => 18, 'descripcion' => 'Sonido surround 7.1'],
            ['nombre' => 'Memoria RAM 16GB', 'precio' => 1200.00, 'stock' => 30, 'descripcion' => 'DDR4 3200MHz'],
            ['nombre' => 'Disco SSD 1TB', 'precio' => 1450.00, 'stock' => 12, 'descripcion' => 'NVMe M.2 de alta velocidad'],
            ['nombre' => 'Silla Gamer', 'precio' => 3200.00, 'stock' => 5, 'descripcion' => 'Reclinable con soporte lumbar'],
            ['nombre' => 'Cámara Web 1080p', 'precio' => 620.00, 'stock' => 15, 'descripcion' => 'Con micrófono integrado'],
            ['nombre' => 'Teclado Membrana', 'precio' => 290.00, 'stock' => 40, 'descripcion' => 'Retroiluminado RGB'],
            ['nombre' => 'Hub USB-C 5 en 1', 'precio' => 410.00, 'stock' => 22, 'descripcion' => 'Con salida HDMI y puertos USB 3.0'],
            ['nombre' => 'Alfombrilla XL', 'precio' => 180.00, 'stock' => 50, 'descripcion' => 'Superficie antideslizante 90x40cm'],
        ];

        foreach ($productos as $prod) {
            Producto::create($prod);
        }
    }
}
