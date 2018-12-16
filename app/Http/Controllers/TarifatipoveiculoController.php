<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTarifatipoveiculoRequest;
use App\Http\Requests\UpdateTarifatipoveiculoRequest;
use App\Repositories\TarifatipoveiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TarifatipoveiculoController extends AppBaseController
{
    /** @var  TarifatipoveiculoRepository */
    private $tarifatipoveiculoRepository;

    public function __construct(TarifatipoveiculoRepository $tarifatipoveiculoRepo)
    {
        $this->tarifatipoveiculoRepository = $tarifatipoveiculoRepo;
    }

    /**
     * Display a listing of the Tarifatipoveiculo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tarifatipoveiculoRepository->pushCriteria(new RequestCriteria($request));
        $tarifatipoveiculos = $this->tarifatipoveiculoRepository->all();

        return view('tarifatipoveiculos.index')
            ->with('tarifatipoveiculos', $tarifatipoveiculos);
    }

    /**
     * Show the form for creating a new Tarifatipoveiculo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tarifatipoveiculos.create');
    }

    /**
     * Store a newly created Tarifatipoveiculo in storage.
     *
     * @param CreateTarifatipoveiculoRequest $request
     *
     * @return Response
     */
    public function store(CreateTarifatipoveiculoRequest $request)
    {
        $input = $request->all();

        $tarifatipoveiculo = $this->tarifatipoveiculoRepository->create($input);

        Flash::success('Tarifatipoveiculo saved successfully.');

        return redirect(route('tarifatipoveiculos.index'));
    }

    /**
     * Display the specified Tarifatipoveiculo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tarifatipoveiculo = $this->tarifatipoveiculoRepository->findWithoutFail($id);

        if (empty($tarifatipoveiculo)) {
            Flash::error('Tarifatipoveiculo not found');

            return redirect(route('tarifatipoveiculos.index'));
        }

        return view('tarifatipoveiculos.show')->with('tarifatipoveiculo', $tarifatipoveiculo);
    }

    /**
     * Show the form for editing the specified Tarifatipoveiculo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tarifatipoveiculo = $this->tarifatipoveiculoRepository->findWithoutFail($id);

        if (empty($tarifatipoveiculo)) {
            Flash::error('Tarifatipoveiculo not found');

            return redirect(route('tarifatipoveiculos.index'));
        }

        return view('tarifatipoveiculos.edit')->with('tarifatipoveiculo', $tarifatipoveiculo);
    }

    /**
     * Update the specified Tarifatipoveiculo in storage.
     *
     * @param  int              $id
     * @param UpdateTarifatipoveiculoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTarifatipoveiculoRequest $request)
    {
        $tarifatipoveiculo = $this->tarifatipoveiculoRepository->findWithoutFail($id);

        if (empty($tarifatipoveiculo)) {
            Flash::error('Tarifatipoveiculo not found');

            return redirect(route('tarifatipoveiculos.index'));
        }

        $tarifatipoveiculo = $this->tarifatipoveiculoRepository->update($request->all(), $id);

        Flash::success('Tarifatipoveiculo updated successfully.');

        return redirect(route('tarifatipoveiculos.index'));
    }

    /**
     * Remove the specified Tarifatipoveiculo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tarifatipoveiculo = $this->tarifatipoveiculoRepository->findWithoutFail($id);

        if (empty($tarifatipoveiculo)) {
            Flash::error('Tarifatipoveiculo not found');

            return redirect(route('tarifatipoveiculos.index'));
        }

        $this->tarifatipoveiculoRepository->delete($id);

        Flash::success('Tarifatipoveiculo deleted successfully.');

        return redirect(route('tarifatipoveiculos.index'));
    }
}
