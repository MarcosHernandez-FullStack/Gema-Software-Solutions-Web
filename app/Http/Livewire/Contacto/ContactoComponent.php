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
        return view('livewire.contacto.contacto-component');
    }


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
