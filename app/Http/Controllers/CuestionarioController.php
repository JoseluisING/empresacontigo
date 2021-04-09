<?php

namespace App\Http\Controllers;

use App\Models\cuestionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $seccion_uno = DB::table('survey_1')->where('seccion', 1)->get();

        $seccion_dos = DB::table('survey_1')->where('seccion', 2)->get();

        $seccion_tres = DB::table('survey_1')->where('seccion', 3)->get();

        $seccion_cuatro = DB::table('survey_1')->where('seccion', 4)->get();

        //Validación

        $user = Auth::id();

        $contesto = DB::table('results')->where('user_id', $user)->count();

        if($contesto >= 1){
            $s1 = DB::select('select * from results where user_id='.$user);
            $resultado_s1 = ($s1) ? $s1[0]->result_survey_1:null;
        }else{
            $resultado_s1 = 0;
        }

        return view('livewire/cuestionario_uno', compact('seccion_uno', 'seccion_dos', 'seccion_tres', 'seccion_cuatro','resultado_s1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function show(cuestionario $cuestionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function edit(cuestionario $cuestionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuestionario $cuestionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cuestionario  $cuestionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuestionario $cuestionario)
    {
        //
    }

    public function resultados1(Request $request)
    {
        if($request->get(1)==="1" || $request->get(2)==="1" ||  $request->get(3)==="1" ||$request->get(4)==="1" ||$request->get(5)==="1" || $request->get(6)==="1" ) {

            $user = Auth::id();

            DB::table('results')->insert([
            'user_id' => $user,
            'result_survey_1' => '3',
            'result_survey_2' => '6'
            ]);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));

        }else{
            $user = Auth::id();

            DB::table('results')->insert([
            'user_id' => $user,
            'result_survey_1' => '1',
            'result_survey_2' => '6'
            ]);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));
        }
    }

    public function resultados2(Request $request)
    {
        $user = Auth::id();

        if($request->get(7)==="1" || $request->get(8)==="1") {

            DB::table('results')->where('user_id',$user)->update(['result_survey_1' => '2']);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));
        }else{

            DB::table('results')->where('user_id',$user)->update(['result_survey_1' => '4']);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));
        }
    }

    public function resultados3(Request $request)
    {
        $numeros = 0;
        for($i=9; $i<=15; $i++){
            $valor = $request->get($i);
            $numeros += $valor;
        }
        echo $numeros;
        $user = Auth::id();

        if($numeros >= 3) {

            DB::table('results')->where('user_id',$user)->update(['result_survey_1' => '2']);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));
        }else{

            DB::table('results')->where('user_id',$user)->update(['result_survey_1' => '5']);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));
        }
    }

    public function resultados4(Request $request)
    {
        $numeros = 0;
        for($i=16; $i<=20; $i++){
            $valor = $request->get($i);
            $numeros += $valor;
        }
        echo $numeros;
        $user = Auth::id();

        if($numeros >= 2) {

            DB::table('results')->where('user_id',$user)->update(['result_survey_1' => '2']);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));
        }else{

            DB::table('results')->where('user_id',$user)->update(['result_survey_1' => '1']);

            return $Resultado_1 = redirect(url('/cuestionario/uno'));
        }
    }
}