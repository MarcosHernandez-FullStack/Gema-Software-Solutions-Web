<?php

namespace App\Http\Livewire\Portafolio;

use Livewire\Component;
use App\Models\Servicio;
use Illuminate\Support\Facades\Http;


class PortafolioComponent extends Component
{
    public $servicio_id;

    public function mount($servicio_id)
    {
        $this->servicio_id = $servicio_id;
    }

    public function render()
    {
        /*  $servicio = Servicio::find($this->servicio_id); */

        $data = $this->getServicioPorId($this->servicio_id);

        $servicio = $data['servicio'];
        $listaServicios  = $data['listaServicios'];
        $ultimosProyectos  = $data['ultimosProyectos'];


        return view('livewire.portafolio.portafolio-component', compact('servicio','listaServicios', 'ultimosProyectos'))
            ->extends('layouts.principal')
            ->section('content');
    }

    public function getServicioPorId($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/getServicioPorId/' . $id);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        }
    }

    public function cambioServicioId($servicio_id_actual){
        $this->servicio_id=$servicio_id_actual;
        /* dd($servicio_id_actual); */
    }
}
