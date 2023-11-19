<?php

namespace App\Http\Livewire\Contacto;

use App\Mail\MiCorreo;
use Illuminate\Contracts\Mail\Mailable;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;



class ContactoComponent extends Component
{
    /* Lógica Formulario Contacto */

    public $nombre;
    public $email;
    public $telefono;
    public $asunto;
    public $mensaje;

    protected $rules = [
        'nombre' => 'required',
        'email' => 'required|email',
        'telefono' => 'required',
        'asunto' => 'required',
        'mensaje' => 'required|max:500',
    ];

    protected $messages = [
        'nombre.required' => 'La nombre es obligatorio',
        'email.required' => 'El correo es obligatorio.',
        'email.email' => 'Los datos deben tener un formato de correo.',
        'telefono.required' => 'El teléfono es obligatorio.',
        'asunto.required' => 'El asunto es obligatorio.',
        'mensaje.required' => 'El mensaje es obligatorio.',
        'mensaje.max' => 'El mensaje debe tener 500 caracteres como máximo.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetError()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.contacto.contacto-component');
    }

    public function cargarData()
    {
        $this->validate();

        $contact['nombre'] = $this->nombre;
        $contact['email'] = $this->email;
        $contact['telefono'] = $this->telefono;
        $contact['asunto'] = $this->asunto;
        $contact['mensaje'] = $this->mensaje;

        Mail::to('guevaredo03@gmail.com')->send(new MiCorreo($contact));

        $this->nombre = '';
        $this->email = '';
        $this->telefono = '';
        $this->asunto = '';
        $this->mensaje = '';
    }

    public function save()
    {
        $this->validate();
        $contact['nombre'] = $this->nombre;
        $contact['email'] = $this->email;
        $contact['telefono'] = $this->telefono;
        $contact['asunto'] = $this->asunto;
        $contact['mensaje'] = $this->mensaje;
        try {
            $response = Http::post((env('API_URL') . 'postSaveContacto/'), ['contacto' => $contact]);

            if ($response->successful()) {
                $this->dispatchBrowserEvent('contacto', ['mensaje' => 'Estar atento a su correo y teléfono, en breve lo contactaremos!']);
                $data = $response->json();
                // Reinicializar las variables después de enviar el formulario
                $this->nombre = '';
                $this->email = '';
                $this->telefono = '';
                $this->asunto = '';
                $this->mensaje = '';

                return $data;
            } else {
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
