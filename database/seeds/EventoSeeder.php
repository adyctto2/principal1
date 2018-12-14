<?php

use Illuminate\Database\Seeder;
use App\Evento;
class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'nombre' => 'Charla 1 un poco largo el texto para verificar',
            'descripcion' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio incidunt quo dignissimos perferendis, quaerat vel voluptate libero omnis provident amet repudiandae accusantium ratione totam quod numquam iure dolore eius doloremque. ',
            'fecha_curso' => '2018-11-01',
            'fecha_inscripcion' => '2018-11-01',
            'costo' => '0',
            'direccion' => 'Direcion 1, la paz bolivia',
            'imagen' => '1.jpg'
        ]);
        Evento::create([
            'nombre' => 'Charla 2 un poco largo el texto para verificar',
            'descripcion' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio incidunt quo dignissimos perferendis, quaerat vel voluptate libero omnis provident amet repudiandae accusantium ratione totam quod numquam iure dolore eius doloremque. ',
            'fecha_curso' => '2018-11-04',
            'fecha_inscripcion' => '2018-11-03',
            'costo' => '0',
            'direccion' => 'Direcion 1, la paz bolivia',
            'imagen' => '2.jpg'
        ]);
        Evento::create([
            'nombre' => 'Charla 3 un poco largo el texto para verificar',
            'descripcion' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio incidunt quo dignissimos perferendis, quaerat vel voluptate libero omnis provident amet repudiandae accusantium ratione totam quod numquam iure dolore eius doloremque. ',
            'fecha_curso' => '2018-11-03',
            'fecha_inscripcion' => '2018-11-01',
            'costo' => '0',
            'direccion' => 'Direcion 1, la paz bolivia',
            'imagen' => '3.jpg'
        ]);
    }
}
