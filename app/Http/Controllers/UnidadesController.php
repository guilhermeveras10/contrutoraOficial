<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUnidadesRequest;
use App\Http\Requests\UpdateUnidadesRequest;
use App\Repositories\UnidadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UnidadesController extends AppBaseController
{
    /** @var  UnidadesRepository */
    private $unidadesRepository;

    public function __construct(UnidadesRepository $unidadesRepo)
    {
        $this->unidadesRepository = $unidadesRepo;
    }

    /**
     * Display a listing of the Unidades.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $unidades = $this->unidadesRepository->paginate(5);

        return view('unidades.index')
            ->with('unidades', $unidades);
    }

    /**
     * Show the form for creating a new Unidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('unidades.create');
    }

    /**
     * Store a newly created Unidades in storage.
     *
     * @param CreateUnidadesRequest $request
     *
     * @return Response
     */
    public function store(CreateUnidadesRequest $request)
    {
        $input = $request->all();

        $unidades = $this->unidadesRepository->create($input);

        Flash::success('Unidades saved successfully.');

        return redirect(route('unidades.index'));
    }

    /**
     * Display the specified Unidades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        return view('unidades.show')->with('unidades', $unidades);
    }

    /**
     * Show the form for editing the specified Unidades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        return view('unidades.edit')->with('unidades', $unidades);
    }

    /**
     * Update the specified Unidades in storage.
     *
     * @param int $id
     * @param UpdateUnidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUnidadesRequest $request)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        $unidades = $this->unidadesRepository->update($request->all(), $id);

        Flash::success('Unidades updated successfully.');

        return redirect(route('unidades.index'));
    }

    /**
     * Remove the specified Unidades from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        $this->unidadesRepository->delete($id);

        Flash::success('Unidades deleted successfully.');

        return redirect(route('unidades.index'));
    }
}
