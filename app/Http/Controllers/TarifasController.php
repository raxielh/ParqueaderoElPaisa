<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTarifasRequest;
use App\Http\Requests\UpdateTarifasRequest;
use App\Repositories\TarifasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Tarifas;
use App\Models\DetalleTarifas;
use Illuminate\Support\Facades\DB;

class TarifasController extends AppBaseController
{
    /** @var  TarifasRepository */
    private $tarifasRepository;

    public function __construct(TarifasRepository $tarifasRepo)
    {
        $this->tarifasRepository = $tarifasRepo;
    }

    /**
     * Display a listing of the Tarifas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tarifasRepository->pushCriteria(new RequestCriteria($request));
        $tarifas = $this->tarifasRepository->all();

        return view('tarifas.index')
            ->with('tarifas', $tarifas);
    }

    /**
     * Show the form for creating a new Tarifas.
     *
     * @return Response
     */
    public function create()
    {
        return view('tarifas.create');
    }

    /**
     * Store a newly created Tarifas in storage.
     *
     * @param CreateTarifasRequest $request
     *
     * @return Response
     */
    public function store(CreateTarifasRequest $request)
    {
        $input = $request->all();

        $tarifas = $this->tarifasRepository->create($input);

        Flash::success('Tarifas saved successfully.');

        return redirect(route('tarifas.index'));
    }

    /**
     * Display the specified Tarifas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tarifas = $this->tarifasRepository->findWithoutFail($id);

        $detalleTarifas = DB::table('detalle_tarifas')->get();

        if (empty($tarifas)) {
            Flash::error('Tarifas not found');

            return redirect(route('tarifas.index'));
        }

        return view('tarifas.show')->with('tarifas', $tarifas)->with('detalleTarifas', $detalleTarifas);
    }

    /**
     * Show the form for editing the specified Tarifas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tarifas = $this->tarifasRepository->findWithoutFail($id);

        if (empty($tarifas)) {
            Flash::error('Tarifas not found');

            return redirect(route('tarifas.index'));
        }

        return view('tarifas.edit')->with('tarifas', $tarifas);
    }

    /**
     * Update the specified Tarifas in storage.
     *
     * @param  int              $id
     * @param UpdateTarifasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTarifasRequest $request)
    {
        $tarifas = $this->tarifasRepository->findWithoutFail($id);

        if (empty($tarifas)) {
            Flash::error('Tarifas not found');

            return redirect(route('tarifas.index'));
        }

        $tarifas = $this->tarifasRepository->update($request->all(), $id);

        Flash::success('Tarifas updated successfully.');

        return redirect(route('tarifas.index'));
    }

    /**
     * Remove the specified Tarifas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tarifas = $this->tarifasRepository->findWithoutFail($id);

        if (empty($tarifas)) {
            Flash::error('Tarifas not found');

            return redirect(route('tarifas.index'));
        }

        $this->tarifasRepository->delete($id);

        Flash::success('Tarifas deleted successfully.');

        return redirect(route('tarifas.index'));
    }
}
