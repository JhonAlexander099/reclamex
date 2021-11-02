<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    public function crear()
    {
        if(Auth::check()){
            return view("cliente.crear");
        } else {
            return redirect(route('login'));
        }
    }

    public function mostrar(){
        $resultado =
            DB::select('Select c.codigo, c.nombres, c.direccion
                              c.email, c.calificacion from clientes');
            dd($resultado);
    }
}
