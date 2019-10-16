<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContasRequest;
use App\Http\Requests\UpdateContasRequest;
use App\Repositories\ContasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContasController extends AppBaseController
{
    /** @var  ContasRepository */
    private $contasRepository;

    public function __construct(ContasRepository $contasRepo)
    {
        $this->contasRepository = $contasRepo;
    }

    /**
     * Display a listing of the Contas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contas = $this->contasRepository->paginate(5);

        return view('contas.index')
            ->with('contas', $contas);
    }

    /**
     * Show the form for creating a new Contas.
     *
     * @return Response
     */
    public function create()
    {
        return view('contas.create');
    }

    /**
     * Store a newly created Contas in storage.
     *
     * @param CreateContasRequest $request
     *
     * @return Response
     */
    public function store(CreateContasRequest $request)
    {
        $input = $request->all();

        $contas = $this->contasRepository->create($input);

        Flash::success('Conta salvo com sucesso.');

        return redirect(route('contas.index'));
    }

    /**
     * Display the specified Contas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contas = $this->contasRepository->find($id);

        if (empty($contas)) {
            Flash::error('Conta não encontrado');

            return redirect(route('contas.index'));
        }

        return view('contas.show')->with('contas', $contas);
    }

    /**
     * Show the form for editing the specified Contas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contas = $this->contasRepository->find($id);

        if (empty($contas)) {
            Flash::error('Conta não encontrado');

            return redirect(route('contas.index'));
        }

        return view('contas.edit')->with('contas', $contas);
    }

    /**
     * Update the specified Contas in storage.
     *
     * @param int $id
     * @param UpdateContasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContasRequest $request)
    {
        $contas = $this->contasRepository->find($id);

        if (empty($contas)) {
            Flash::error('Conta não encontrado');

            return redirect(route('contas.index'));
        }

        $contas = $this->contasRepository->update($request->all(), $id);

        Flash::success('Conta upado com sucesso.');

        return redirect(route('contas.index'));
    }

    /**
     * Remove the specified Contas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contas = $this->contasRepository->find($id);

        if (empty($contas)) {
            Flash::error('Conta não encontrado');

            return redirect(route('contas.index'));
        }

        $this->contasRepository->delete($id);

        Flash::success('Conta deletada com sucesso.');

        return redirect(route('contas.index'));
    }
}
