<?php

use Illuminate\Database\Seeder;
use App\PImagenes;
class PimagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PImagenes::create([
            'nombre' => '1jpg',
            'id_producto' => '1'
        ]);
        PImagenes::create([
            'nombre' => '2.jpg',
            'id_producto' => '1'
        ]);
        PImagenes::create([
            'nombre' => '3.jpg',
            'id_producto' => '1'
        ]);PImagenes::create([
            'nombre' => '4.jpg',
            'id_producto' => '1'
        ]);
    }
}
