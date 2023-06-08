<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PrecioUnidadDeMedida;

class PrecioUnidadDeMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear registros de precios de unidades de medida
        PrecioUnidadDeMedida::create([
            'codigo_barra_producto' => '750894641833',
            'id_unidad_de_medida' => 1,
            'cantidad_producto' => 3,
            'precio_unidad_medida_producto' => 3.00
        ]);

        PrecioUnidadDeMedida::create([
            'codigo_barra_producto' => '750894641833',
            'id_unidad_de_medida' => 2,
            'cantidad_producto' => 18,
            'precio_unidad_medida_producto' => 17.00
        ]);

        PrecioUnidadDeMedida::create([
            'codigo_barra_producto' => '7411001800903',
            'id_unidad_de_medida' => 2,
            'cantidad_producto' => 6,
            'precio_unidad_medida_producto' => 10.90
        ]);

        PrecioUnidadDeMedida::create([
            'codigo_barra_producto' => '7411001802341',
            'id_unidad_de_medida' => 2,
            'cantidad_producto' => 12,
            'precio_unidad_medida_producto' => 12.80
        ]);

        PrecioUnidadDeMedida::create([
            'codigo_barra_producto' => '7413100033053',
            'id_unidad_de_medida' => 2,
            'cantidad_producto' => 20,
            'precio_unidad_medida_producto' => 39.00
        ]);
    }
}
