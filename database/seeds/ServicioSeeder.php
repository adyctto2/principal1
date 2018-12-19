<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('servicios')->insert([
            'titulo' => 'Coaching con PNL (Richard Bandler)',
            'descripcion' => '¿Qué le pides a la vida? ¿Qué es importante para ti? ¿Tienes ahora mismo lo que te mereces? ¿Cuánto más puedes conseguir?',
            'img' => 'PNL.png',
        ]);
        DB::table('servicios')->insert([
              'titulo' => 'Sanacion Reconectiva (Eric Pearl)',
              'descripcion' => 'La sanación reconectiva es una terapia energética descubierta por el Dr. Eric Pearl que sirve para tratar cualquier problema de salud.',
              'img' => 'TR.jpg',
          ]);
          DB::table('servicios')->insert([
                'titulo' => 'Midiendo el Campo Energético Humano',
                'descripcion' => 'Bio-Well es un sistema revolucionario, no invasivo para medir el campo de energía humano a través de una cámara especializada y un sistema de software.',
                'img' => 'BIO.png',
            ]);
            DB::table('servicios')->insert([
                  'titulo' => 'Terapia Cognitiva Conductual con Hipnosis (NGH)',
                  'descripcion' => 'La Hipnosis es considerada una de las técnicas más antiguas utilizadas para provocar cambios en los procesos cognitivos, conductuales...',
                  'img' => 'NGH.png',
              ]);

                DB::table('servicios')->insert([
                      'titulo' => 'Sanacion y Salud Bio-Energetica con NES Provision',
                      'descripcion' => 'Descifrando el campo del cuerpo humano para llegar a la causa raíz y restaurar su energía para la vida.',
                      'img' => 'NES.png',
                  ]);

        }

}
