<?php

namespace App\Http\Livewire\Contacto;

use App\Mail\MiCorreo;
use Illuminate\Contracts\Mail\Mailable;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;



class ContactoComponent extends Component
{
    public function render()
    {
        //inicializamos las variables
        $servicios = [];

        try{
            $data = $this->getHome();

            $servicios = $data['servicios'];


             return view('livewire.contacto.contacto-component',compact('servicios'));
        }catch(\Exception $e){
            //retornamos solamente la vista en caso de errores al obtener los datos
            return view('livewire.contacto.contacto-component',compact('servicios'));
        }
    }


    public function getHome()
    {
        try {
            $response = Http::get('http://127.0.0.1:8000/api/getHome/');

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
    /*public function render()
    {
        return view('livewire.contacto.contacto-component');
    }*/


    /* Lógica Formulario Contacto */

    public $nombre;
    public $email;
    public $telefono;
    public $asunto;
    public $mensaje;

    public function cargarData(){

        $contact['nombre'] = $this->nombre;
        $contact['email'] = $this->email;
        $contact['telefono'] = $this->telefono;
        $contact['asunto'] = $this->asunto;
        $contact['mensaje'] = $this->mensaje;

        Mail::to('guevaredo03@gmail.com')->send(new MiCorreo($contact));
    }
}
