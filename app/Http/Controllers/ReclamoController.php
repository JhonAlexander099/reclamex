<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamo;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ReclamoController extends Controller
{
    public function crear()
    {
        if(Auth::check()){
            return view("reclamo.crear");
        } else {
            return redirect(route('login'));
        }
    }

    public function eliminar()
    {
        $reclamo = Reclamo::find($id);
        $reclamo->delete();
        return "Reclamo eliminado";
    }

    public function mostrar(){
        $resultado =
            DB::select('Select r.motivo, r.fecha_recepcion from reclamos');
            dd($resultado);
    }
}
