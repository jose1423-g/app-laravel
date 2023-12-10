<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class authenticatedSessionController extends Controller
{

    public function store (Request $request)
    {
        //nos muestra los datos especificados que vienen el request
        // dd($request->boolean('remember'));

        $data = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);


        //el metodo attmpt retorna un boolean
        //recibe dos parametros uno indica si las credenciales seran recordadas en la siguiente session
        if (!Auth::attempt($data, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
                'password' => ''
            ]);
        }

        //genera un session para el usuario
        $request->session()->regenerate();

        //te retorna a la vista que intentaste acceder previamente
        return redirect()->intended()->with('status', 'Usted se ha logueado');

    }

    public function destroy(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return to_route('login')->with('status', 'Session cerrada');

    }
}
