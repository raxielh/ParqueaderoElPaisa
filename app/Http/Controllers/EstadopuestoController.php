<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstadopuestoRequest;
use App\Http\Requests\UpdateEstadopuestoRequest;
use App\Repositories\EstadopuestoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstadopuestoController extends AppBaseController
{
    /** @var  EstadopuestoRepository */
    private $estadopuestoRepository;

    public function __construct(EstadopuestoRepository $estadopuestoRepo)
    {
        $this->estadopuestoRepository = $estadopuestoRepo;
    }

    /**
     * Display a listing of the Estadopuesto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estadopuestoRepository->pushCriteria(new RequestCriteria($request));
        $estadopuestos = $this->estadopuestoRepository->all();

        return view('estadopuestos.index')
            ->with('estadopuestos', $estadopuestos);
    }

    /**
     * Show the form for creating a new Estadopuesto.
     *
     * @return Response
     */
    public function create()
    {
        return view('estadopuestos.create');
    }

    /**
     * Store a newly created Estadopuesto in storage.
     *
     * @param CreateEstadopuestoRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadopuestoRequest $request)
    {
        $input = $request->all();

        $estadopuesto = $this->estadopuestoRepository->create($input);

        Flash::success('Estadopuesto saved successfully.');

        return redirect(route('estadopuestos.index'));
    }

    /**
     * Display the specified Estadopuesto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estadopuesto = $this->estadopuestoRepository->findWithoutFail($id);

        if (empty($estadopuesto)) {
            Flash::error('Estadopuesto not found');

            return redirect(route('estadopuestos.index'));
        }

        return view('estadopuestos.show')->with('estadopuesto', $estadopuesto);
    }

    /**
     * Show the form for editing the specified Estadopuesto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estadopuesto = $this->estadopuestoRepository->findWithoutFail($id);

        if (empty($estadopuesto)) {
            Flash::error('Estadopuesto not found');

            return redirect(route('estadopuestos.index'));
        }

        return view('estadopuestos.edit')->with('estadopuesto', $estadopuesto);
    }

    /**
     * Update the specified Estadopuesto in storage.
     *
     * @param  int              $id
     * @param UpdateEstadopuestoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadopuestoRequest $request)
    {
        $estadopuesto = $this->estadopuestoRepository->findWithoutFail($id);

        if (empty($estadopuesto)) {
            Flash::error('Estadopuesto not found');

            return redirect(route('estadopuestos.index'));
        }

        $estadopuesto = $this->estadopuestoRepository->update($request->all(), $id);

        Flash::success('Estadopuesto updated successfully.');

        return redirect(route('estadopuestos.index'));
    }

    /**
     * Remove the specified Estadopuesto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estadopuesto = $this->estadopuestoRepository->findWithoutFail($id);

        if (empty($estadopuesto)) {
            Flash::error('Estadopuesto not found');

            return redirect(route('estadopuestos.index'));
        }

        $this->estadopuestoRepository->delete($id);

        Flash::success('Estadopuesto deleted successfully.');

        return redirect(route('estadopuestos.index'));
    }
}
