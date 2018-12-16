<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Parqueo;
use Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    
    }

    public function puestos($id)
    {
        $puestos = DB::table('puestos')
        ->where('idtipovehiculo',$id)
        ->orderBy('numero', 'asc')
        ->get();
        return view('puestos')->with('puestos', $puestos);
    
    }

    public function parqueo(request $request)
    {

        $parqueo = new Parqueo;
        $parqueo->placavehiculo = $request->placa;
        $parqueo->idpuesto = $request->puesto;
        $parqueo->entrada = date('Y/m/d H:i:s');
//        $parqueo->salida = 0;
//        $parqueo->valorpagar = 0;

        //dd($parqueo);

        $puesto=\App\Models\Puesto::find($request->puesto);
        
        $puesto->idestado=2;


        Flash::success('Parqueo Guardado exitosamente.');

        $parqueo->save();
        $puesto->save();

    	return redirect(route('home'));
    
    }



}
