<?php

namespace App\Http\Livewire\Nosotros;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class NosotrosComponent extends Component
{
    public function render()
    {
        //inicializamos las variables
        $servicios = [];
        try{
            $data = $this->getServicioAll();

            $servicios = $data['servicios'];

            return view('livewire.nosotros.nosotros-component',compact('servicios'))
            ->extends('layouts.principal',compact('servicios'))
            ->section('content');
        }catch(\Exception $e){
            //retornamos solamente la vista en caso de errores al obtener los datos
            return view('livewire.nosotros.nosotros-component',compact('servicios'))
            ->extends('layouts.principal',compact('servicios'))
            ->section('content');
        }

    }

    public function getServicioAll()
    {
        try {
            $response = Http::get(env('API_URL').'getServicioAll');

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
}
