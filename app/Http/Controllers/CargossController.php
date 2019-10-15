<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCargossRequest;
use App\Http\Requests\UpdateCargossRequest;
use App\Repositories\CargossRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CargossController extends AppBaseController
{
    /** @var  CargossRepository */
    private $cargossRepository;

    public function __construct(CargossRepository $cargossRepo)
    {
        $this->cargossRepository = $cargossRepo;
    }

    /**
     * Display a listing of the Cargoss.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cargosses = $this->cargossRepository->paginate(5);

        return view('cargosses.index')
            ->with('cargosses', $cargosses);
    }

    /**
     * Show the form for creating a new Cargoss.
     *
     * @return Response
     */
    public function create()
    {
        return view('cargosses.create');
    }

    /**
     * Store a newly created Cargoss in storage.
     *
     * @param CreateCargossRequest $request
     *
     * @return Response
     */
    public function store(CreateCargossRequest $request)
    {
        $input = $request->all();

        $cargoss = $this->cargossRepository->create($input);

        Flash::success('Cargo salva com sucesso.');

        return redirect(route('cargosses.index'));
    }

    /**
     * Display the specified Cargoss.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cargoss = $this->cargossRepository->find($id);

        if (empty($cargoss)) {
            Flash::error('Cargoss not found');

            return redirect(route('cargosses.index'));
        }

        return view('cargosses.show')->with('cargoss', $cargoss);
    }

    /**
     * Show the form for editing the specified Cargoss.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cargoss = $this->cargossRepository->find($id);

        if (empty($cargoss)) {
            Flash::error('Cargoss not found');

            return redirect(route('cargosses.index'));
        }

        return view('cargosses.edit')->with('cargoss', $cargoss);
    }

    /**
     * Update the specified Cargoss in storage.
     *
     * @param int $id
     * @param UpdateCargossRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCargossRequest $request)
    {
        $cargoss = $this->cargossRepository->find($id);

        if (empty($cargoss)) {
            Flash::error('Cargoss not found');

            return redirect(route('cargosses.index'));
        }

        $cargoss = $this->cargossRepository->update($request->all(), $id);

        Flash::success('Cargoss updated successfully.');

        return redirect(route('cargosses.index'));
    }

    /**
     * Remove the specified Cargoss from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cargoss = $this->cargossRepository->find($id);

        if (empty($cargoss)) {
            Flash::error('Cargoss not found');

            return redirect(route('cargosses.index'));
        }

        $this->cargossRepository->delete($id);

        Flash::success('Cargoss deleted successfully.');

        return redirect(route('cargosses.index'));
    }
}
