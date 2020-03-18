<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\User;

class PerfilController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function perfil()
    {
        $usuarioLogueado = Auth::user();
        $vac = compact('usuarioLogueado');
        return view('perfil', $vac);
    } 

    public function mostrarBusqueda(){
        $usuarios = []; 
        $vac = compact('usuarios');
        return view('busqueda',$vac);
    } 

    public function buscarUsuario(Request $req){ 
        $usuarioLogueado = Auth::user(); 
        $usuarios = User::where('usuario','like',$req['buscar'].'%') ->simplePaginate(10); 
        $vac = compact('usuarios'); 
        return view('busqueda',$vac);
    } 

    public function mostrarUser(Request $req) {
        $usuario = User::find($req['id']);  
        $usuarioLogueado = Auth::user(); 

      if ($usuario['id'] == $usuarioLogueado['id']) {
          return redirect()->to('perfil');
      }

        $bandera = false;
        foreach ($usuarioLogueado->seguidos as $seguido) {
            if ($seguido['id']==$usuario['id']) {
                $bandera = true; 
            break;
            }
        }
        $vac = compact('usuario','bandera'); 
        return view('perfilUser',$vac); 
    } 

    public function agregarUsuario(Request $req) { 
        $user = Auth::user();
        $user -> seguidos() ->attach($req['id']); 
        return redirect('users/' . $req['id']);
    } 
    
    public function dejarUsuario(Request $req) { 
        $user = Auth::user();
        $user -> seguidos() ->detach($req['id']); 
        return redirect('users/' . $req['id']);
    } 
}
