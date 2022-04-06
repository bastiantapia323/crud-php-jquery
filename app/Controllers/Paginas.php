<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Formulario;
class Paginas extends Controller{
    

    public function index(){
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        return view('paginas/jumbo', $datos);
    }
    public function buscar(){
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        return view('paginas/jumbo', $datos);

    }
}
    
