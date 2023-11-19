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
            $response = Http::post((env('API_URL').'postSaveContacto'),['contacto'=>$contact]);

            if ($response->successful()) {
                $this->dispatchBrowserEvent('contacto', ['mensaje' => 'Estar atento a su correo, en breve lo contactaremos!']);
                $data = $response->json();
                return $data;
            }else{
                $this->dispatchBrowserEvent('error', ['mensaje' => 'No se logró enviar sus datos!']);
                //si la respuesta no es correcta, entonces devuelve vacio
                return [];
            }

        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['mensaje' => 'No se logró enviar sus datos!']);
            //captura el error y devuelve vacio
            return [];
        }
    }
}
