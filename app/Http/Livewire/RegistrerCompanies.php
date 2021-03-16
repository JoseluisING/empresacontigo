<?php

namespace App\Http\Livewire;


use App\Models\companies;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegistrerCompanies extends Component
{
    public $informacionC;

    protected $rules = [
        'informacionC.name' => 'required|min:2',
        'informacionC.rfc_company' => 'required|min:2',
        'informacionC.cp' => 'required|min:2',
        'informacionC.telefono' => 'required|min:2',
    ];

    public function mount()
    {
        $id_user = Auth::user()->id;

        //Traer un solo valor
        //$vacio = $this->informacionC = InfoClinica::select('seguro')->where('user_id','=',$id_user)->first();
        $vacio = $this->informacionC = companies::where('user_id', '=', $id_user)->first();

        if (is_null($vacio)) {
            $this->informacionC = new companies();
        } else {
            $this->informacionC = companies::where('user_id', '=', $id_user)->first();
        }
    }


    public function render()
    {
        return view('livewire.registrer-companies');
    }

    public function save()
    {
        $this->validate();
        $this->informacionC->user_id = Auth::user()->id;
        $this->informacionC->save();
        //Alerta sweet
        session()->flash('btnCrear', 'ok');
        return redirect(route('registraCompañia'));
    }
}
