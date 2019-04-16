<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalleTarifaRequest;
use App\Http\Requests\UpdateDetalleTarifaRequest;
use App\Repositories\DetalleTarifaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Tarifas;
use Illuminate\Support\Facades\DB;

class DetalleTarifaController extends AppBaseController
{
    /** @var  DetalleTarifaRepository */
    private $detalleTarifaRepository;

    public function __construct(DetalleTarifaRepository $detalleTarifaRepo)
    {
        $this->detalleTarifaRepository = $detalleTarifaRepo;
    }

    /**
     * Display a listing of the DetalleTarifa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->detalleTarifaRepository->pushCriteria(new RequestCriteria($request));
        $detalleTarifas = $this->detalleTarifaRepository->all();

        return view('detalle_tarifas.index')
            ->with('detalleTarifas', $detalleTarifas);
    }

    /**
     * Show the form for creating a new DetalleTarifa.
     *
     * @return Response
     */
    public function create()
    {
        $Tarifas = Tarifas::all()->pluck('descripcion','id');
        return view('detalle_tarifas.create')->with('Tarifas', $Tarifas);
    }

    /**
     * Store a newly created DetalleTarifa in storage.
     *
     * @param CreateDetalleTarifaRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalleTarifaRequest $request)
    {
        $input = $request->all();

        $detalleTarifa = $this->detalleTarifaRepository->create($input);

        Flash::success('Detalle Tarifa saved successfully.');

        //return redirect(route('detalleTarifas.index'));
        return back();
    }

    /**
     * Display the specified DetalleTarifa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleTarifa = $this->detalleTarifaRepository->findWithoutFail($id);

        if (empty($detalleTarifa)) {
            Flash::error('Detalle Tarifa not found');

            return redirect(route('detalleTarifas.index'));
        }

        return view('detalle_tarifas.show')->with('detalleTarifa', $detalleTarifa);
    }

    /**
     * Show the form for editing the specified DetalleTarifa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleTarifa = $this->detalleTarifaRepository->findWithoutFail($id);
        $tarifas = DB::table('tarifas')->where('id',$id)->get();

        if (empty($detalleTarifa)) {
            Flash::error('Detalle Tarifa not found');

            return redirect(route('detalleTarifas.index'));
        }

        return view('detalle_tarifas.edit')->with('detalleTarifa', $detalleTarifa)->with('tarifas', $tarifas[0]);
    }

    /**
     * Update the specified DetalleTarifa in storage.
     *
     * @param  int              $id
     * @param UpdateDetalleTarifaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalleTarifaRequest $request)
    {
        $detalleTarifa = $this->detalleTarifaRepository->findWithoutFail($id);

        if (empty($detalleTarifa)) {
            Flash::error('Detalle Tarifa not found');

            return redirect(route('detalleTarifas.index'));
        }

        $detalleTarifa = $this->detalleTarifaRepository->update($request->all(), $id);

        Flash::success('Detalle Tarifa updated successfully.');

        //return redirect(route('detalleTarifas.index'));
        return back()->withInput();
    }

    /**
     * Remove the specified DetalleTarifa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        DB::table('detalle_tarifas')->where('id',$id)
        ->delete();

        Flash::success('Detalle Tarifa deleted successfully.');

        //return redirect(route('detalleTarifas.index'));
        return back()->withInput();
    }
}
