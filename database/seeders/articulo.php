<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articulo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'referencia' =>'01',
                'nombre' =>'tenis',
                'descripcion' =>'descripcion tenis',
                'color' =>'rojo',
                'precioUnitario' =>'200000',
                'observacion' =>'observacion tenis',
                'foto' =>'foto tenis',
                'marca' =>'10',
            ],
            [
                'referencia' =>'02',
                'nombre' =>'buso',
                'descripcion' =>'descripcion buso',
                'color' =>'negro',
                'precioUnitario' =>'15000',
                'observacion' =>'observacion buso',
                'foto' =>'foto buso',
                'marca' =>'20',
            ],
            [
                'referencia' =>'03',
                'nombre' =>'camiseta',
                'descripcion' =>'descripcion camiseta',
                'color' =>'amarillo',
                'precioUnitario' =>'100000',
                'observacion' =>'observacion camiseta',
                'foto' =>'foto camis',
                'marca' =>'30',
            ],
            [
                'referencia' =>'04',
                'nombre' =>'Gorra',
                'descripcion' =>'descripcion Gorra',
                'color' =>'verde',
                'precioUnitario' =>'120000',
                'observacion' =>'observacion Gorra',
                'foto' =>'fotoGorra',
                'marca' =>'40',
            ],
            [
                'referencia' =>'05',
                'nombre' =>'guante',
                'descripcion' =>'descripcion guante',
                'color' =>'gris',
                'precioUnitario' =>'80000',
                'observacion' =>'observacion guante',
                'foto' =>'foto guant',
                'marca' =>'50',
            ]
        ];
        DB::table('articulo')->insert($datos);
    }
}
