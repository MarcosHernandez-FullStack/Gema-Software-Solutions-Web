<?php

namespace App\Http\Livewire\Nosotros;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class NosotrosComponent extends Component
{   
    public function render()
    {  
        
        return view('livewire.nosotros.nosotros-component')
            ->extends('layouts.principal')
            ->section('content');
    }
}
