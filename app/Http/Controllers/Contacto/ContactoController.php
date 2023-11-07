<?php

namespace App\Http\Controllers\Contacto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactoController extends Controller
{
    public function render() {
        $servicios = [];
        try{
            $data = $this->getHome();

            $servicios = $data['servicios'];

            return view('layouts.contacto',compact('servicios'));
        }catch(\Exception $e){
            //retornamos solamente la vista en caso de errores al obtener los datos
            return view('layouts.contacto',compact('servicios'));
        }

    }

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
}
