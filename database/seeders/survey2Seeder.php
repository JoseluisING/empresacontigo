<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class survey2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1-17
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi trabajo me exige hacer mucho esfuerzo físico',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Me preocupa sufrir un accidente en mi trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Considero que las actividades que realizo son peligrosas',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Por la cantidad de trabajo que tengo debo trabajar sin parar',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Considero que es necesario mantener un ritmo de trabajo acelerado',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi trabajo exige que esté muy concentrado',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi trabajo requiere que memorice mucha información',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi trabajo exige que atienda varios asuntos al mismo tiempo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'En mi trabajo soy responsable de cosas de mucho valor',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Respondo ante mi jefe por los resultados de toda mi área de trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'En mi trabajo me dan órdenes contradictorias',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);DB::table('survey_2')->insert([
            'pregunta' => 'Considero que en mi trabajo me piden hacer cosas innecesarias',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Trabajo horas extras más de tres veces a la semana',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi trabajo me exige laborar en días de descanso, festivos o fines de semana',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Pienso en las actividades familiares o personales cuando estoy en mi trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);

        //18-33
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi trabajo permite que desarrolle nuevas habilidades',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'En mi trabajo puedo aspirar a un mejor presupuesto',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Durante mi jornada de trabajo puedo tomar pausas cuando las necesito',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Puedo cambiar el orden de las actividades que realizo en mi trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Me informan con claridad cuáles son mis funciones',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Me explican claramente los resultados que debo obtener en mi trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Me informan con quién puedo resolver problemas o asuntos de trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Me permiten asistir a capacitaciones relacionadas con mi trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Recibo capacitación útil para hacer mi trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi jefe tiene en cuenta mis puntos de vista y opiniones',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Puedo confiar en mis compañeros de trabajo',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Cuando tenemos que realizar trabajo de equipo los compañeros colaboran',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mis compañeros de trabajo me ayudan cuando tengo dificultades',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'En mi trabajo puedo expresarme libremente sin interrupciones',
            'valor_siempre' => '0',
            'valor_casi_siempre' => '1',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '3',
            'valor_nunca' => '4',
        ]);

        //34-46
        DB::table('survey_2')->insert([
            'pregunta' => 'Recibo críticas constantes a mi persona y/o trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'He presenciado actos de violencia en mi centro de trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Atiendo clientes o usuarios muy enojados',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Para hacer mi trabajo debo demostrar sentimientos distintos a los míos',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Comunican tarde los asuntos de trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Dificultan el logro de los resultados del trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
        DB::table('survey_2')->insert([
            'pregunta' => 'Ignoran las sugerencias para mejorar su trabajo',
            'valor_siempre' => '4',
            'valor_casi_siempre' => '3',
            'valor_algunas_veces' => '2',
            'valor_casi_nunca' => '1',
            'valor_nunca' => '0',
        ]);
    }
}
