<?php

namespace App\Http\Livewire\Contacto;

use Livewire\Component;

class CorreoComponent extends Component
{
    public function render()
    {
        return view('livewire.contacto.correo-component');
    }

    public $email;

    public function cargarData(){

        $contact['nombre'] = 'Cliente';
        $contact['email'] = $this->email;
        $contact['telefono'] = '+51 999 999 999';
        $contact['asunto'] = 'Nuevo cliente';
        $contact['mensaje'] = 'Nuevo cliente';

        Mail::to('guevaredo03@gmail.com')->send(new MiCorreo($contact));
    }
}
