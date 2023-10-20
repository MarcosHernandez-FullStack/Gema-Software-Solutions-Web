<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Servicio;
use Illuminate\Support\Facades\Http;


class HomeComponent extends Component
{
    public $collecionServicios;

    public function mount()
    {
        $this->collecionServicios = new Collection();
    }

    public function render()
    {
        $servicios = [];
        $ultimosProyectos  = [];
        try{
            /* $servicios = $this->getServicioAll(); */
            $data = $this->getHome();

            $servicios = $data['servicios'];
            $ultimosProyectos  = $data['ultimosProyectos'];

            return view('livewire.home.home-component', compact('servicios', 'ultimosProyectos'))
                ->extends('layouts.principal')
                ->section('content');
        }catch(\Exception $e){
            return view('livewire.home.home-component', compact('servicios', 'ultimosProyectos'))
                ->extends('layouts.principal')
                ->section('content');
        }
        
    }
    

    public function getHome()
    {
        try {
            $response = Http::get('http://127.0.0.1:8000/api/getHome/');

            if ($response->successful()) {
                $data = $response->json();
                return $data;
            }
        } catch (\Exception $e) {
            return [];
        }
    }
}
