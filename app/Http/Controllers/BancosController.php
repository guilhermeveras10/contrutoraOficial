<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBancosRequest;
use App\Http\Requests\UpdateBancosRequest;
use App\Repositories\BancosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BancosController extends AppBaseController
{
    /** @var  BancosRepository */
    private $bancosRepository;

    public function __construct(BancosRepository $bancosRepo)
    {
        $this->bancosRepository = $bancosRepo;
    }

    /**
     * Display a listing of the Bancos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bancos = $this->bancosRepository->paginate(5);

        return view('bancos.index')
            ->with('bancos', $bancos);
    }

    /**
     * Show the form for creating a new Bancos.
     *
     * @return Response
     */
    public function create()
    {
        return view('bancos.create');
    }

    /**
     * Store a newly created Bancos in storage.
     *
     * @param CreateBancosRequest $request
     *
     * @return Response
     */
    public function store(CreateBancosRequest $request)
    {
        $input = $request->all();

        $bancos = $this->bancosRepository->create($input);

        Flash::success('Bancos saved successfully.');

        return redirect(route('bancos.index'));
    }

    /**
     * Display the specified Bancos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bancos = $this->bancosRepository->find($id);

        if (empty($bancos)) {
            Flash::error('Bancos not found');

            return redirect(route('bancos.index'));
        }

        return view('bancos.show')->with('bancos', $bancos);
    }

    /**
     * Show the form for editing the specified Bancos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bancos = $this->bancosRepository->find($id);

        if (empty($bancos)) {
            Flash::error('Bancos not found');

            return redirect(route('bancos.index'));
        }

        return view('bancos.edit')->with('bancos', $bancos);
    }

    /**
     * Update the specified Bancos in storage.
     *
     * @param int $id
     * @param UpdateBancosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBancosRequest $request)
    {
        $bancos = $this->bancosRepository->find($id);

        if (empty($bancos)) {
            Flash::error('Bancos not found');

            return redirect(route('bancos.index'));
        }

        $bancos = $this->bancosRepository->update($request->all(), $id);

        Flash::success('Bancos updated successfully.');

        return redirect(route('bancos.index'));
    }

    /**
     * Remove the specified Bancos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bancos = $this->bancosRepository->find($id);

        if (empty($bancos)) {
            Flash::error('Bancos not found');

            return redirect(route('bancos.index'));
        }

        $this->bancosRepository->delete($id);

        Flash::success('Bancos deleted successfully.');

        return redirect(route('bancos.index'));
    }
}
