<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Laravel\Jetstream\Jetstream;

class EmpleadosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('livewire.registro-empleado');
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
       Validator::make($request->all(),[
            'name' => ['required','regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)', 'string'],
            'ap_p' => ['required','regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)', 'string'],
            'ap_m' => ['required','regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)', 'string'],
            'cedula' => ['required', 'string', 'max:8', 'min:7', 'unique:users'],
            'rfc' => ['required', 'string', 'max:13', 'min:10', 'unique:users'],
            'curp' => ['required', 'string', 'max:18', 'min:18', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/', 'unique:users'],
            'fecha_nacimiento' => ['string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

            $id = Auth::user()->id;

           $Empleado = Empleado::create([
            'name' => $request->name,
            'ap_p' => $request->ap_p,
            'ap_m' => $request->ap_m,
            'email' => $request->email,
            'cedula' => $request->cedula,
            'rfc' => $request->rfc,
            'user_id' => $id,
            'curp' => $request->curp,
            'id_rol' => 2,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'password' => Hash::make($request['password']),
        ]);

            //Alerta sweet
            session()->flash('btnCrear', 'ok');
            return $Empleado = redirect(url('registro/empleado'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
