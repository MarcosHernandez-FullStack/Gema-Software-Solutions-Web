<?php

namespace App\Http\Livewire\Contacto;

use App\Mail\MiCorreo;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class CorreoComponent extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.contacto.correo-component');
    }

    public function cargarData(){

        $contact['nombre'] = 'Cliente';
        $contact['email'] = $this->email;
        $contact['telefono'] = '+51 999 999 999';
        $contact['asunto'] = 'Nuevo cliente';
        $contact['mensaje'] = 'Nuevo cliente';
        Mail::to('guevaredo03@gmail.com')->send(new MiCorreo($contact));
        $this->email = '';
        
    }

    public function save(){
        $contact['email'] = $this->email;
        try {
            $response = Http::post((env('API_URL').'postSaveContacto/'),['contacto'=>$contact]);

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
