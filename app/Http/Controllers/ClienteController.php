<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


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
}
