<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamo;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


class UsuarioController extends Controller
{
    public function crear()
    {
        if(Auth::check()){
            return view("usuario.crear");
        } else {
            return redirect(route('login'));
        }
    }

    public function eliminar()
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Usuario eliminado";
    }
}
