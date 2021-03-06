<?php

namespace App\Http\Livewire;


use App\Models\InfoClinica;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InformacionClinica extends Component
{
    public $informacionC;

    protected $rules = [
        'informacionC.alergias' => 'required|min:2',
        'informacionC.user_id' => 'numeric',
        'informacionC.discapacidades' => 'required|min:2',
        'informacionC.seguro' => 'required|min:2',
        'informacionC.nss' => 'required|min:2',
    ];

    public function mount()
    {
        $id_user = Auth::user()->id;

        //Traer un solo valor
        //$vacio = $this->informacionC = InfoClinica::select('seguro')->where('user_id','=',$id_user)->first();
        $vacio = $this->informacionC = InfoClinica::where('user_id', '=', $id_user)->first();

        if (is_null($vacio)) {
            $this->informacionC = new InfoClinica();
        } else {
            $this->informacionC = InfoClinica::where('user_id', '=', $id_user)->first();
        }
    }


    public function render()
    {
        return view('livewire.informacion-clinica');
    }

    public function save()
    {
        $this->validate();
        $this->informacionC->user_id = Auth::user()->id;
        $this->informacionC->estatus = '1';
        $this->informacionC->save();
        return redirect('dashboard');
    }
}
