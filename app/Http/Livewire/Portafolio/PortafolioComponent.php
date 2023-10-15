<?php

namespace App\Http\Livewire\Portafolio;

use Livewire\Component;
use App\Models\Servicio;

class PortafolioComponent extends Component
{
    public $servicio_id;

    public function mount($servicio_id){
        $this->servicio_id=$servicio_id;

    }

    public function render()
    {
        $servicio=Servicio::find($this->servicio_id);
        return view('livewire.portafolio.portafolio-component', compact('servicio'))
                ->extends('layouts.principal')
                ->section('content');
    }
}
