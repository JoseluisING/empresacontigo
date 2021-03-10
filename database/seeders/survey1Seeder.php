<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class survey1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('survey_1')->insert([
            'pregunta' => 'Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave',
            'seccion' => '1',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => 'Asaltos',
            'seccion' => '1',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => 'Actos violentos que derivaron en lesiones graves',
            'seccion' => '1',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => 'Secuestro',
            'seccion' => '1',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => 'Amenazas',
            'seccion' => '1',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => 'Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas',
            'seccion' => '1',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha tenido recuerdo recurrentes sobre el acontecimiento que le provocan malestares?',
            'seccion' => '2',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?',
            'seccion' => '2',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?',
            'seccion' => '3',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?',
            'seccion' => '3',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha tenido dificultad para recordar alguna parte importante del evento?',
            'seccion' => '3',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha disminuido su interés en sus actividades cotidianas?',
            'seccion' => '3',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Se ha sentido usted alejado o distante de los demás?',
            'seccion' => '3',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha notado que tiene dificultad para expresar sus sentimientos?',
            'seccion' => '3',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tenia un futuro limitado?',
            'seccion' => '3',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha tenido usted dificultades para dormir?',
            'seccion' => '4',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha estado particularmente irritable o le han dado arranques de coraje?',
            'seccion' => '4',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha tenido dificultad para concentrarse?',
            'seccion' => '4',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Ha estado nervioso o constantemente en alerta?',
            'seccion' => '4',
        ]);
        DB::table('survey_1')->insert([
            'pregunta' => '¿Se ha sobresalido  fácilmente por cualquier cosa?',
            'seccion' => '4',
        ]);
    }
}
