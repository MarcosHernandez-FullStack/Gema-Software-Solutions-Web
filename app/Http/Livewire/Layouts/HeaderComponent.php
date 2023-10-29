<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class HeaderComponent extends Component
{
    public function getHome()
    {
        try {
            $response = Http::get(env('API_URL').'getHome/');

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

    public function render()
    {
        $servicios = [];
        try{
            $data = $this->getHome();
 
         $servicios = $data['servicios'];
 
        return view('livewire.layouts.header-component', compact('servicios'));
        }catch(\Exception $e){
            //retornamos solamente la vista en caso de errores al obtener los datos
            return view('livewire.layouts.header-component', compact('servicios'));
        }
    }
}
