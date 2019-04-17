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

        $pp = DB::table('parqueos')
        ->join('puestos', 'parqueos.idpuesto', '=', 'puestos.id')
        ->where('puestos.idtipovehiculo',$id)
        ->select('puestos.*','parqueos.*')
        ->get();


        return view('puestos')->with('puestos', $puestos)->with('pp', $pp);
    
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

    public function buscar_placa($id)
    {
        return DB::table('parqueos')
        ->where('idpuesto',$id)
        ->select('placavehiculo','id')
        ->get();
    
    }

    public function cobrar(request $request)
    {

        DB::select("UPDATE parqueos SET placavehiculo = '".$request->placa."' WHERE id=$request->parqueo");

        $x=DB::select('SELECT * FROM pro_cobratarifa('.$request->puesto.')');
        

        $fs= DB::table('facturas')
        ->where('id',$x[0]->v_idfactura)
        ->get();

        return view('factura')->with('fs', $fs);

    
    }

    public function informe()
    {
        $datos=0;
        return view('informe')->with('datos', $datos);

    
    }

    public function r_informe(request $request)
    {

        $sql="SELECT to_date(to_char(f.fecha,'DD/MM/YYYY'),'DD/MM/YYYY') FECHAS,tv.desctipovehiculo,sum(f.valortotal) valortotal FROM public.facturas f,tipovehiculos tv
        where  f.idestado=1 and f.idtipovehiculo=tv.id and to_date(to_char(f.fecha,'DD/MM/YYYY'),'DD/MM/YYYY') between '".$request->fi."' and '".$request->ff."' group by to_date(to_char(f.fecha,'DD/MM/YYYY'),'DD/MM/YYYY'),tv.desctipovehiculo order by to_date(to_char(f.fecha,'DD/MM/YYYY'),'DD/MM/YYYY');";

        $datos=DB::select($sql);  

        $sql2="SELECT f.fecha,f.id,f.idestado,f.idparqueo,f.idtarifa,f.idtipovehiculo,
        tv.desctipovehiculo,f.numerohoras,f.placa,f.valortotal FROM   facturas f,tipovehiculos tv  WHERE  f.idestado = 1 AND f.idtipovehiculo = tv.id AND To_date(To_char(f.fecha, 'DD/MM/YYYY'),'DD/MM/YYYY') between '".$request->fi."' and '".$request->ff."' ORDER  BY To_date(To_char(f.fecha, 'DD/MM/YYYY'), 'DD/MM/YYYY');";

        $datos2=DB::select($sql2);

        return view('r_informe')->with('datos', $datos)->with('datos2', $datos2);
    
    }



}
