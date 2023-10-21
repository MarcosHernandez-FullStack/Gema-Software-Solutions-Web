<?php

namespace App\Http\Controllers\Portafolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function render() {
        return view('layouts.portafolio');
    }
}
