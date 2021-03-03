<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\companies;
use Illuminate\Support\Facades\Auth;

class RegistrerCompanies extends Component
{
    public $name, $rfc_company, $cp, $telefono;
    
    public function render()
    {
        return view('livewire.registrer-companies');
    }
    public function store()
    {
        $id= Auth::user()->id;
    	$this->validate(['name'    => 'required']);

    	companies::create([
            'user_id' => $id,
            'rfc_company' => $this->rfc_company,
    	    'name' => $this->name,
    	    'cp' => $this->cp,
    	    'telefono' => $this->telefono,
    	]);
    }
}
