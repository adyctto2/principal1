<?php

use Illuminate\Database\Seeder;
use App\Servicios;
class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicios::create([
            'nombre' => 'MEDICIÓN COMPLETA DEL CAMPO',
            'descripcion' => 'Comprende el analisis completo de los 10 dedos con sus ocho parametros. Dura una hora, se hace el  análisis y  devolución verbal de los resultados. El  informe completo se entrega  via mail. ',
            'costo' => '200.00',
            'imagen' => '1.jpg',
        ]);
        Servicios::create([
            'nombre' => 'MEDICIÓN DEL ESTRÉS',
            'descripcion' => 'Puedes conocer tu nivel de estrés en una medición rápida (media hora) de solo dos dedos, que dará como resultado tu nivel de estrés. Se hace el análisis y devolución verbal. El informe completo  se entrega via mail.',
            'costo' => '200.00',
            'imagen' => '2.jpg',
        ]);
        Servicios::create([
            'nombre' => 'TRABAJOS DE AUTOCONOCIMIENTO',
            'descripcion' => 'Nuestro programa de Autoconocimiento comprende trabajos biográficos, relajación profunda y visualizaciones relacionadas con pasado, presente y futuro. Tiene un seguimiento trimestral y se realiza  on line. Solo para inscriptos en el programa. ',
            'costo' => '200.00',
            'imagen' => '3.jpg',
        ]);
    }
}
