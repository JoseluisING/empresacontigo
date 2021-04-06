<?php

namespace App\Http\Livewire;

use App\Models\mailbox;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RegistraMailbox extends Component
{
    public $lisMailbox;
    public $search;
    public $ordenanaBy = 'id';
    public $direction = 'asc';
    protected $listeners = ['refresca' => 'render'];

    public function render()
    {
        $this->lisMailbox = mailbox::where('tema', 'like', '%' . $this->search . '%')
            ->where('user_id', '=', Auth::user()->id)
            ->orderBy($this->ordenanaBy, $this->direction)
            ->get();

        return view('livewire.registra-mailbox');
    }

    public function ordenar($ordenaBy)
    {
        if ($this->ordenanaBy == $ordenaBy) {
            if ($this->direction == 'asc') {
                $this->direction = "desc";
            } else {
                $this->direction = "asc";
            }
        } else {
            $this->ordenanaBy = $ordenaBy;
            $this->direction = "asc";
        }
    }
}
