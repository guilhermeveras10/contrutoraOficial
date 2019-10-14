<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServicosRequest;
use App\Http\Requests\UpdateServicosRequest;
use App\Repositories\ServicosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServicosController extends AppBaseController
{
    /** @var  ServicosRepository */
    private $servicosRepository;

    public function __construct(ServicosRepository $servicosRepo)
    {
        $this->servicosRepository = $servicosRepo;
    }

    /**
     * Display a listing of the Servicos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servicos = $this->servicosRepository->paginate(5);

        return view('servicos.index')
            ->with('servicos', $servicos);
    }

    /**
     * Show the form for creating a new Servicos.
     *
     * @return Response
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * Store a newly created Servicos in storage.
     *
     * @param CreateServicosRequest $request
     *
     * @return Response
     */
    public function store(CreateServicosRequest $request)
    {
        $input = $request->all();

        $servicos = $this->servicosRepository->create($input);

        Flash::success('Serviço salvo com sucesso.');

        return redirect(route('servicos.index'));
    }

    /**
     * Display the specified Servicos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicos = $this->servicosRepository->find($id);

        if (empty($servicos)) {
            Flash::error('Serviço não encontrado');

            return redirect(route('servicos.index'));
        }

        return view('servicos.show')->with('servicos', $servicos);
    }

    /**
     * Show the form for editing the specified Servicos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicos = $this->servicosRepository->find($id);

        if (empty($servicos)) {
            Flash::error('Serviço não encontrado');

            return redirect(route('servicos.index'));
        }

        return view('servicos.edit')->with('servicos', $servicos);
    }

    /**
     * Update the specified Servicos in storage.
     *
     * @param int $id
     * @param UpdateServicosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicosRequest $request)
    {
        $servicos = $this->servicosRepository->find($id);

        if (empty($servicos)) {
            Flash::error('Serviço não encontrado');

            return redirect(route('servicos.index'));
        }

        $servicos = $this->servicosRepository->update($request->all(), $id);

        Flash::success('Serviço upado com sucesso');

        return redirect(route('servicos.index'));
    }

    /**
     * Remove the specified Servicos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicos = $this->servicosRepository->find($id);

        if (empty($servicos)) {
            Flash::error('Serviço não encontrado');

            return redirect(route('servicos.index'));
        }

        $this->servicosRepository->delete($id);

        Flash::success('Serviço deletado com sucesso');

        return redirect(route('servicos.index'));
    }
}
