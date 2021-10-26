<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamo;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


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
}
