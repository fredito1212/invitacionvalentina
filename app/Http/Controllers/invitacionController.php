<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\invitacion;

class invitacionController extends Controller
{
    public function index(){
        return view('index');
    }

    public function invitaciones(Request $request){
        $datos = invitacion::all();
        $confirmados = invitacion::where('confirmacion', 1)->count();
        $invitados = invitacion::all()->count();
        $total = 0;
        foreach($datos as $d){
            $total += $d->invitados;
        }
        return view('listadoInvitacion', ['datos' => $datos, 'invitados' => $invitados, 'confirmados' => $confirmados, 'total' => $total]);
    }

    public function confirmacion($codigo){
        if(invitacion::where('codigo', $codigo)->exists()){
            $datos = invitacion::where('codigo', $codigo)->first();
            return view('index', ['codigo' => True, 'datos' => $datos]);
        }
        return view('index', ['codigo' => False]);
    }

    public function confirmar(Request $request, $codigo){
        $reg = invitacion::where('codigo', $codigo)->first();
        $reg->confirmacion = true;
        $reg->save();
        return redirect()->route('confirmar', ['codigo' => $codigo])->with('success','Registro de invitado correcto!');
    }

    public function registrar(Request $request){
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $invitados = $request->input('invitados');
        $registrar = new invitacion();
        $registrar->nombre = $nombre;
        $registrar->telefono = $telefono;
        $registrar->invitados = $invitados;
        $registrar->codigo = $this->generarCodigo();
        $registrar->save();


        return redirect()->route('invitaciones')->with('success','Registro de invitado correcto!');
    }

    public function actualizar(Request $request){
        $id = $request->input('idmod');
        $nombre = $request->input('nombremod');
        $telefono = $request->input('telefonomod');
        $invitados = $request->input('invitadosmod');
        $modificar = invitacion::find($id);
        $modificar->nombre = $nombre;
        $modificar->telefono = $telefono;
        $modificar->invitados = $invitados;
        $modificar->invEnviada = 0;
        $modificar->confirmacion = 0;
        $modificar->save();
        return redirect()->route('invitaciones')->with('success','Actualización de invitado correcta!');
    }

    public function eliminar(Request $request){
        $eliminar = invitacion::find($request->iddel);
        $eliminar->delete();
        return redirect()->route('invitaciones')->with('success','Invitado eliminado correctamente!');
    }

    public function generarCodigo(){
        while (True) {
            $codigo = Str::random(10);
            if(invitacion::where('codigo', $codigo)->count() == 0){
                break;
            }
        }
        return $codigo;
    }

}
