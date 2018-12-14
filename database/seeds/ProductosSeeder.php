<?php

use Illuminate\Database\Seeder;

use App\Productos;
class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::Create([
            'nombre' => 'Bio-Well',
            'costo' => '200',
            'descripcion' => 'La última generación de la cámara Bio-Well GDV, la 2.0, proporciona una funcionalidad mejorada y un funcionamiento más rápido para la mejor experiencia de usuario. La tecnología mejorada del 2.0 permite una estabilidad mejorada y un mayor nivel de reproducibilidad, así como la ventilación del dispositivo controlada manualmente y el acceso exclusivo a las nuevas funciones que se están desarrollando actualmente para futuras versiones del software Bio-Well.',
            'tecnologia' => 'Using the powerful technology of ElectroPhotonic Imaging (EPI) (also known as Gas Discharge Visualization (GDV)), Bio-Well illustrates the state of person’s stress level. When a scan is taken, high intensity electrical field stimulates emission of photons and electrons from human skin; imaging technology captures photon emissions given off by the finger.<br>Bio-Well utilizes a weak, completely painless electrical current applied to the fingertips for less than a millisecond. The body’s response to this stimulus is the formation of a variation of an “electron cloud” composed of light energy photons. The electronic “glow” of this discharge is captured by an optical CCD camera system and then translated into a digital computer file.',
            'caracteristicas' => '
            <li>El proceso de escaneo es rápido, fácil y no intrusivo ... ¡hazlo todos los días para obtener los mejores resultados!</li>
            <li>Obtenga retroalimentación en tiempo real sobre qué factores, positivos y negativos, afectan su nivel de estrés y estado de energía</li>
            <li>El sistema proporciona representaciones gráficas instantáneas de los datos para proporcionar una referencia e interpretación fáciles.</li>
            <li>Muestra datos en un formato fácil de entender usando representaciones gráficas.</li>
            <li>Guarde o imprima un informe que contenga todos los puntos de datos de cada escaneo</li>
            <li>Guarda o imprime tus resultados con un solo click</li>
            <li>¡Con el Sputnik, mide el ambiente y el efecto de los objetos en tu energía, también!</li>',
            'beneficios' => '
                <li>Cámara de última generación que no requiere una fuente de alimentación. Simplemente se conecta a su computadora con el cable USB incluido</li>
                <li>Realice exploraciones, vea resultados y acceda a exploraciones anteriores a través del sofisticado software Bio-Well</li>
                <li>Controle su estado de energía y niveles de estrés a lo largo del tiempo para rastrear sus respuestas a los ejercicios físicos y mentales, la respuesta a los cambios climáticos y otros estímulos.</li>
                <li>Monitorea el historial energético de tu familia y amigos.</li>
                <li>Almacene el historial de exploración en nuestra base de datos en la nube durante el tiempo que sea un suscriptor</li>
            ',
            'especificaciones' => '
                <li>Contenido del producto: dispositivo Bio-Well, cable USB, inserción de dedo, paño de limpieza de lentes, unidad de calibración y cable de calibración</li>
                <li>Dimensiones del dispositivo: 4.5” l x 4.75”w x 4.5”h</li>
                <li>Peso del dispositivo: Bio-Well: 2.25 lbs, Unidad de calibración: .12 lbs</li>
            ',
            'soporte' => '',
            'imagen' => '1.jpg',
        ]);
        Productos::Create([
            'nombre' => 'Sensor Sputnik',
            'costo' => '200',
            'descripcion' => 'Sputnik es un sistema de sensores y accesorios que se adhiere al dispositivo Bio-Well, lo que permite leer la energía de un entorno. Por ejemplo, pruebe la energía de una habitación antes, durante y después de meditar para ver cómo cambian los niveles de energía.<br>El dispositivo Bio-Well se vende por separado.',
            'tecnologia' => 'El sensor Sputnik está conectado a la unidad de calibración insertada en la lente Bio-Well, creando contornos de resonancia conectados. La corriente de polarización en la cadena eléctrica de este contorno depende de la capacitancia del espacio entre la antena Sputnik y los sujetos con conexión a tierra ambiental y electroconductor. Tanto los parámetros geofísicos del entorno particular como los campos y construcciones electromagnéticos artificiales influirían en esta capacidad. Las emociones están relacionadas con la actividad de la parte parasimpática del sistema nervioso autónomo, que cambia la microcirculación sanguínea, la transpiración, la microcirculación sanguínea, la transpiración, la sudoración y otras funciones del cuerpo, lo que resulta en cambios en la conductividad general del cuerpo y Conductividad de los puntos de acupuntura en particular. Por lo tanto, La presencia cerca del instrumento de las personas emocionales puede cambiar la conductividad del espacio y, por lo tanto, las señales del sensor. Esto puede estar relacionado con la formación de áreas de disminución de la entropía en el espacio o, como afirma el Prof. Tiller, "asociado con la acumulación de una carga magnética negativa que se manifiesta en el medio ambiente" También pueden estar involucrados algunos efectos cuánticos.',
            'caracteristicas' => '
                <li>Las salidas primarias del dispositivo Bio-Well conectado al sensor Sputnik son los parámetros de energía del espacio, que permiten evaluar zonas geo-activas, tanto positivas como negativas.</li>
                <li>Las mediciones no tienen limitaciones de tiempo.</li>
                <li>Los resultados se presentan en forma de gráficos de dinámica de tiempo.</li>
                <li>Las potentes matemáticas integradas permiten el procesamiento estadístico de datos con parámetros de procesamiento flexibles</li>
                <li>Todos los datos se pueden guardar para su posterior procesamiento e interpretación.</li>
                <li>Poderosa herramienta de investigación.</li>
            ',
            'beneficios' => '
                <li>Medir la energía de diferentes lugares de interés durante los viajes.</li>
                <li>Le permite ver la influencia de las fases lunares, las tormentas solares y las condiciones ambientales en el espacio y, por lo tanto, en su bienestar.</li>
                <li>Sputnik te permite encontrar la mejor posición de una cama en tu dormitorio.</li>
                <li>Medir la respuesta a las emociones humanas, meditaciones, oraciones, tanto individuales como colectivas dentro de un entorno.</li>
                <li>Sputnik puede detectar la influencia de la música en la audiencia.</li>
            ',
            'especificaciones' => '
                <li>Contenido del producto: Sensor Sputnik con cable de conexión.</li>
                <li>Dimensiones:</li>
                <li>Sensor Sputnik: 2.13 "wx 6.25" h</li>
                <li>Peso: 1 libra.</li>
            ',
            'soporte' => '',
            'imagen' => '2.jpg',
        ]);
        Productos::Create([
            'nombre' => 'Unidad de calibracion',
            'costo' => '200',
            'descripcion' => 'La unidad de calibración Bio-Well es un accesorio necesario para calibrar el dispositivo.<br>INCLUIDO CON LA COMPRA DEL DISPOSITIVO BIO-WELL. PUEDE SER VENDIDO POR SEPARADO COMO UN REEMPLAZO.',
            'tecnologia' => '
                <li>Necesario para calibrar el dispositivo Bio-Well al entorno local para producir datos más precisos.</li>
                <li>Pruebas metrológicas del dispositivo Bio-Well.</li>
            ',
            'caracteristicas' => '
                <li>Presentación gráfica de los datos.</li>
                <li>Todos los datos se pueden guardar para su posterior procesamiento y revisión.</li>
            ',
            'beneficios' => '
                <li>Asegura los resultados más precisos posibles desde el dispositivo Bio-Well.</li>
            ',
            'especificaciones' => '
                <li>Contenido del producto: Unidad de calibración con cable de calibración</li>
                <li>Dimensiones:</li>
                <li>Unidad de calibración: 2 "lx 2.5" wx 2.5 "h</li>
                <li>Cable de calibración: 29.5 "lx .13" wx .13 "h</li>
                <li>Peso: .12 lb.</li>
            ',
            'soporte' => '',
            'imagen' => '3.jpg',
        ]);
    }
}
