<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class solutions2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solutions_2')->insert([
            'nivel' => 'Muy alto',
            'descripcion' => 'Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas 1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.',
        ]);
        DB::table('solutions_2')->insert([
            'nivel' => 'Alto',
            'descripcion' => 'Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica 1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.',
        ]);
        DB::table('solutions_2')->insert([
            'nivel' => 'Medio',
            'descripcion' => 'Se requiere revisar la política de prevención riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión mediante un Programa de intervención.',
        ]);
        DB::table('solutions_2')->insert([
            'nivel' => 'Bajo',
            'descripcion' => 'Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.',
        ]);
        DB::table('solutions_2')->insert([
            'nivel' => 'Nulo',
            'descripcion' => 'El riesgo resulta despreciable por lo que no se requiere medidas adicionales.',
        ]);
    }
}
