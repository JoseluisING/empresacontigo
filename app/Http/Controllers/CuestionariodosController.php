<?php

namespace App\Http\Controllers;

use App\Models\Cuestionariodos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CuestionariodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $seccion_uno = DB::table('survey_2')->where('id','<=',9)->get();
        $seccion_dos = DB::table('survey_2')->where('id','>',9)->where('id','<=',13)->get();
        $seccion_tres = DB::table('survey_2')->where('id', '>',13)->where('id','<=',17)->get();
        $seccion_cuatro = DB::table('survey_2')->where('id', '>',17)->where('id','<=',22)->get();
        $seccion_cinco = DB::table('survey_2')->where('id', '>',22)->where('id','<=',27)->get();
        $seccion_seis = DB::table('survey_2')->where('id', '>',27)->where('id','<=',40)->get();
        $opcion_uno = DB::table('survey_2')->where('id', '>',40)->where('id','<=',43)->get();
        $opcion_dos = DB::table('survey_2')->where('id', '>',43)->where('id','<=',46)->get();

        $user = Auth::id();

        $contesto = DB::table('results')->where('user_id', $user)->count();

        if($contesto >= 1){
            $s1 = DB::select('select * from results where user_id='.$user);
            $resultado_c1 = ($s1) ? $s1[0]->result_survey_1:null;
            $resultado_c2 = ($s1) ? $s1[0]->result_survey_2:null;
        }else{
            $resultado_c1 = 0;
            $resultado_c2 = 0;
        }

        return view('livewire/cuestionario_dos', compact('seccion_uno','seccion_dos','seccion_tres','seccion_cuatro','seccion_cinco','seccion_seis','opcion_uno','opcion_dos','resultado_c1','resultado_c2'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuestionariodos  $cuestionariodos
     * @return \Illuminate\Http\Response
     */
    public function show(Cuestionariodos $cuestionariodos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuestionariodos  $cuestionariodos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuestionariodos $cuestionariodos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuestionariodos  $cuestionariodos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuestionariodos $cuestionariodos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuestionariodos  $cuestionariodos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuestionariodos $cuestionariodos)
    {
        //
    }

    public function resultados1(Request $request)
    {
        $s=0;
        for($i=1; $i<=9; $i++){
            $valor = $request->get($i);
            $s += $valor;
        }

        for($i=10; $i<=17; $i++){
            $valor = $request->get($i);
            $s += $valor;
        }

        for($i=18; $i<=27; $i++){
            $valor = $request->get($i);
            $s += $valor;
        }

        for($i=28; $i<=46; $i++){
            $valor = $request->get($i);
            $s += $valor;
        }

        $user = Auth::id();
        if($s < 20) {
            DB::table('results')->update([
            'user_id' => $user,
            'result_survey_2' => '5'
            ]);
            return $Resultado_1 = redirect(url('/cuestionario/dos'));
        }else if($s >= 20 && $s < 45){
            DB::table('results')->update([
            'user_id' => $user,
            'result_survey_2' => '4'
            ]);
            return $Resultado_1 = redirect(url('/cuestionario/dos'));
        }else if($s >= 45 && $s < 70){
            DB::table('results')->update([
            'user_id' => $user,
            'result_survey_2' => '3'
            ]);
            return $Resultado_1 = redirect(url('/cuestionario/dos'));
        }else if($s >= 70 && $s < 90){
            DB::table('results')->update([
            'user_id' => $user,
            'result_survey_2' => '2'
            ]);
            return $Resultado_1 = redirect(url('/cuestionario/dos'));
        }else if($s >= 90){
            DB::table('results')->update([
            'user_id' => $user,
            'result_survey_2' => '1'
            ]);
            return $Resultado_1 = redirect(url('/cuestionario/dos'));
        }
    }
}