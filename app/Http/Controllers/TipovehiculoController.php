<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateTipovehiculoRequest;
use App\Http\Requests\UpdateTipovehiculoRequest;
use App\Repositories\TipovehiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Tarifatipoveiculo;

class TipovehiculoController extends AppBaseController
{
    /** @var  TipovehiculoRepository */
    private $tipovehiculoRepository;

    public function __construct(TipovehiculoRepository $tipovehiculoRepo)
    {
        $this->tipovehiculoRepository = $tipovehiculoRepo;
    }

    /**
     * Display a listing of the Tipovehiculo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipovehiculoRepository->pushCriteria(new RequestCriteria($request));
        $tipovehiculos = $this->tipovehiculoRepository->all();

        $tipovehiculos = DB::table('tipovehiculos')
        ->get();

        return view('tipovehiculos.index')
            ->with('tipovehiculos', $tipovehiculos);
    }

    /**
     * Show the form for creating a new Tipovehiculo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipovehiculos.create');
    }

    /**
     * Store a newly created Tipovehiculo in storage.
     *
     * @param CreateTipovehiculoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipovehiculoRequest $request)
    {
        $input = $request->all();

        $tipovehiculo = $this->tipovehiculoRepository->create($input);

        Flash::success('Tipovehiculo saved successfully.');

        return redirect(route('tipovehiculos.index'));
    }

    /**
     * Display the specified Tipovehiculo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipovehiculo = $this->tipovehiculoRepository->findWithoutFail($id);

        if (empty($tipovehiculo)) {
            Flash::error('Tipovehiculo not found');

            return redirect(route('tipovehiculos.index'));
        }

        return view('tipovehiculos.show')->with('tipovehiculo', $tipovehiculo);
    }

    /**
     * Show the form for editing the specified Tipovehiculo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipovehiculo = $this->tipovehiculoRepository->findWithoutFail($id);

        if (empty($tipovehiculo)) {
            Flash::error('Tipovehiculo not found');

            return redirect(route('tipovehiculos.index'));
        }

        return view('tipovehiculos.edit')->with('tipovehiculo', $tipovehiculo);
    }

    /**
     * Update the specified Tipovehiculo in storage.
     *
     * @param  int              $id
     * @param UpdateTipovehiculoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipovehiculoRequest $request)
    {
        $tipovehiculo = $this->tipovehiculoRepository->findWithoutFail($id);

        if (empty($tipovehiculo)) {
            Flash::error('Tipovehiculo not found');

            return redirect(route('tipovehiculos.index'));
        }

        $tipovehiculo = $this->tipovehiculoRepository->update($request->all(), $id);

        Flash::success('Tipovehiculo updated successfully.');

        return redirect(route('tipovehiculos.index'));
    }

    /**
     * Remove the specified Tipovehiculo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipovehiculo = $this->tipovehiculoRepository->findWithoutFail($id);

        if (empty($tipovehiculo)) {
            Flash::error('Tipovehiculo not found');

            return redirect(route('tipovehiculos.index'));
        }

        $this->tipovehiculoRepository->delete($id);

        Flash::success('Tipovehiculo deleted successfully.');

        return redirect(route('tipovehiculos.index'));
    }
}
