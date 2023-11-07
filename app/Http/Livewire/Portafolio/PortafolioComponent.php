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
        $servicios = [];
        $servicio = [];
        $listaServicios  = [];
        $ultimosProyectos  = [];
        /*  $servicio = Servicio::find($this->servicio_id); */
        try{
        $data = $this->getServicioPorId($this->servicio_id);

        $servicio = $data['servicio'];
        $listaServicios  = $data['listaServicios'];
        $servicios = $data['listaServicios'];
        $ultimosProyectos  = $data['ultimosProyectos'];


        return view('livewire.portafolio.portafolio-component', compact('servicio','listaServicios', 'ultimosProyectos'))
            ->extends('layouts.principal', compact('servicios'))
            ->section('content');
        }catch(\Exception $e){
            return view('livewire.portafolio.portafolio-component', compact('servicio','listaServicios', 'ultimosProyectos'))
            ->extends('layouts.principal', compact('servicios'))
            ->section('content');
        }
    }

    public function getServicioPorId($id)
    {
        $response = Http::get(env('API_URL').'getServicioPorId/' . $id);

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        }
        else{
            return [];
        }
    }

    public function cambioServicioId($servicio_id_actual){
        $this->servicio_id=$servicio_id_actual;
        /* dd($servicio_id_actual); */
    }
}
