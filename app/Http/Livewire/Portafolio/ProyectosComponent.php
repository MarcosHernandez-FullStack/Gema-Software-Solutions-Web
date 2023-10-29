<?php

namespace App\Http\Livewire\Portafolio;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProyectosComponent extends Component
{
    public $pagina = 1;

    public function render()
    {
        //inicializamos las variables
        
        $proyectos  = [];
        $paginacion = [];
        try{
            $data = $this->getProyectos($this->pagina);

            $proyectos  = $data['proyectos'];
            $paginacion = $data['paginacion'];
            return view('livewire.portafolio.proyectos-component', compact('paginacion','proyectos'))
            ->extends('layouts.principal')
            ->section('content');
            
        }catch(\Exception $e){
            //retornamos solamente la vista en caso de errores al obtener los datos
            return view('livewire.portafolio.proyectos-component', compact('paginacion','proyectos'))
            ->extends('layouts.principal')
            ->section('content');
        }
    }
    

    public function getProyectos($pagina)
    {
        try {
            $response = Http::get(env('API_URL').'getProyectos', [
                'pagina' => $pagina,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return $data;
            }else{
                //si la respuesta no es correcta, entonces devuelve vacio
                return [];
            }
        } catch (\Exception $e) {
            //captura el error y devuelve vacio
            return [];
        }
    }

    public function cambioPagina($pagina){
        $this->pagina = $pagina;
    }
    
}
