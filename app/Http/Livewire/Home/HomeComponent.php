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
        /* $servicios = $this->getServicioAll(); */

        $data = $this->getHome();

        $servicios = $data['servicios'];
        $ultimosProyectos  = $data['ultimosProyectos'];

        return view('livewire.home.home-component', compact('servicios', 'ultimosProyectos'))
            ->extends('layouts.principal')
            ->section('content');
    }

    public function getServicioAll()
    {
        $client = new Client();
        $response = $client->post('http://127.0.0.1:8000/api/getServicioAll');
        // Verificar si la solicitud fue exitosa
        if ($response->getStatusCode() == 200) {
            $this->collecionServicios = new Collection();
            // Obtener el contenido de la respuesta
            $data = $response->getBody()->getContents();
            // Decodificar el contenido si es JSON
            $responseData = json_decode($data, true);
            foreach ($responseData["servicios"] as $key => $value) {
                $this->collecionServicios->push(new Servicio($value));
            }
            return $this->collecionServicios;
        } else {
            // Manejar errores
            dd("La solicitud a la API ha fallado.");
        }
    }

    public function boton()
    {
        $client = new Client();
        $response = $client->post('http://127.0.0.1:8000/api/getServicioAll');
        // Verificar si la solicitud fue exitosa
        if ($response->getStatusCode() == 200) {
            $this->collecionServicios = new Collection();
            // Obtener el contenido de la respuesta
            $data = $response->getBody()->getContents();
            // Decodificar el contenido si es JSON
            $responseData = json_decode($data, true);
            foreach ($responseData["servicios"] as $key => $value) {
                $this->collecionServicios->push(new Servicio($value));
            }
            return dd($this->collecionServicios);
        } else {
            // Manejar errores
            dd("La solicitud a la API ha fallado.");
        }
    }


    /* Alternativa */
    public function getHome()
    {

        $response = Http::get('http://127.0.0.1:8000/api/getHome/');

        if ($response->successful()) {
            $data = $response->json();
            return $data;
        }
    }
}
