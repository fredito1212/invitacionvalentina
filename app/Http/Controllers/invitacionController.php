<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\invitacion;
use App\Models\fotografias;

class invitacionController extends Controller
{
    public function index(){
        if ((date("d/m/Y") == '18/03/2023' || date("d/m/Y") == '19/03/2023' || date("d/m/Y") == '20/03/2023' || date("d/m/Y") == '21/03/2023')) {
            $invitados = invitacion::select('nombre', 'codigo')->orderBy('nombre')->get();
            $listado = array();
            foreach($invitados as $invitado){
                $total = fotografias::where('codigo', $invitado->codigo)->count();
                if($total > 0){
                    $foto = fotografias::where('codigo', $invitado->codigo)->first();
                    $total = fotografias::where('codigo', $invitado->codigo)->count();
                    array_push($listado, array("nombre" => $invitado->nombre,
                                                "codigo" => $invitado->codigo,
                                                "foto" => $foto->archivo,
                                                "total" => $total));
                }
            }

            return view('index', ['listado' => $listado]);
        } else {
            return view('index');
        }
    }

    public function confirmacion($codigo){
        if(invitacion::where('codigo', $codigo)->exists()){
            if ((date("d/m/Y") == '18/03/2023' || date("d/m/Y") == '19/03/2023' || date("d/m/Y") == '20/03/2023' || date("d/m/Y") == '21/03/2023')) {
                $invitados = invitacion::select('nombre', 'codigo')->orderBy('nombre')->get();
                $listado = array();
                foreach($invitados as $invitado){
                    $total = fotografias::where('codigo', $invitado->codigo)->count();
                    if($total > 0){
                        $foto = fotografias::where('codigo', $invitado->codigo)->first();
                        $total = fotografias::where('codigo', $invitado->codigo)->count();
                        array_push($listado, array("nombre" => $invitado->nombre,
                                                    "codigo" => $invitado->codigo,
                                                    "foto" => $foto->archivo,
                                                    "total" => $total));
                    }
                }
            }
            $datos = invitacion::where('codigo', $codigo)->first();
            return view('index', ['codigo' => True, 'datos' => $datos, 'listado' => $listado]);
        }
        return view('index', ['codigo' => False]);
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

    public function confirmar(Request $request, $codigo){
        $reg = invitacion::where('codigo', $codigo)->first();
        $reg->confirmacion = true;
        $reg->save();
        return redirect()->route('confirmar', ['codigo' => $codigo])->with('success','Invitación confirmada!');
    }

    public function cargaFotos(Request $request, $codigo){
        if($request->hasfile('archivos'))
        {
            foreach($request->file('archivos') as $file)
            {
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $name = Str::of($name)->basename('.'.$extension).'_'.time().'.'.$extension;
                $file->move(public_path().'/fotografias/'.$codigo.'/', $name);
                $store = new fotografias();
                $store->codigo = $codigo;
                $store->archivo = '/fotografias/'.$codigo.'/'.$name;
                $store->save();
            }
            return redirect()->route('confirmar', ['codigo' => $codigo])->with('success', 'Fotos cargadas correctamente!');
        }
        return redirect()->route('confirmar', ['codigo' => $codigo]);
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

    public function fotos(){
        $invitados = invitacion::select('nombre', 'codigo')->orderBy('nombre')->get();

        $listado = array();

        foreach($invitados as $invitado){
            $total = fotografias::where('codigo', $invitado->codigo)->count();
            if($total > 0){
                $fotos = fotografias::where('codigo', $invitado->codigo)->get();
                $pendientes = fotografias::where('codigo', $invitado->codigo)->where('visible', 0)->count();
                $aceptadas = fotografias::where('codigo', $invitado->codigo)->where('visible', 1)->count();
                array_push($listado, array("nombre" => $invitado->nombre,
                                            'codigo' => $invitado->codigo,
                                            'pendientes' => $pendientes,
                                            'aceptadas' => $aceptadas,
                                            "fotos" => $fotos));
            }
        }

        return view('listadofotografias')->with('listado', $listado);
    }

    public function fotosSeleccion(Request $request, $codigo){
        $fotos = fotografias::where('codigo', $codigo)->get();
        $datos = invitacion::where('codigo', $codigo)->first();
        return view('listadofotoscodigo')->with(['fotos' => $fotos, 'datos' => $datos]);
    }

    public function fotosEstado(Request $request){
        $foto = fotografias::where('id', $request->id)->first();
        $foto->visible = $request->estado;
        if($foto->save()){
            return true;
        }else{
            return false;
        }
    }

    public function fotosBorrar(Request $request){
        $foto = fotografias::where('id', $request->idborrar)->first();
        $codigo = $foto->codigo;
        $foto->delete();
        return redirect()->route('fotoscodigo', ['codigo' => $codigo] )->with('success','Foto borrada correctamente!');
    }

    public function listadoFotos(Request $request){
        $fotos = fotografias::select('archivo')->where('visible', 1)->where('codigo', $request->codigo)->get();
        return $fotos->toJson();
    }
}
