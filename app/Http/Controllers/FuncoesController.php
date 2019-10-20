<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFuncoesRequest;
use App\Http\Requests\UpdateFuncoesRequest;
use App\Repositories\FuncoesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FuncoesController extends AppBaseController
{
    /** @var  FuncoesRepository */
    private $funcoesRepository;

    public function __construct(FuncoesRepository $funcoesRepo)
    {
        $this->funcoesRepository = $funcoesRepo;
    }

    /**
     * Display a listing of the Funcoes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $funcoes = $this->funcoesRepository->paginate(5);

        return view('funcoes.index')
            ->with('funcoes', $funcoes);
    }

    /**
     * Show the form for creating a new Funcoes.
     *
     * @return Response
     */
    public function create()
    {
        return view('funcoes.create');
    }

    /**
     * Store a newly created Funcoes in storage.
     *
     * @param CreateFuncoesRequest $request
     *
     * @return Response
     */
    public function store(CreateFuncoesRequest $request)
    {
        $input = $request->all();

        $funcoes = $this->funcoesRepository->create($input);

        Flash::success('Funcoes saved successfully.');

        return redirect(route('funcoes.index'));
    }

    /**
     * Display the specified Funcoes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        return view('funcoes.show')->with('funcoes', $funcoes);
    }

    /**
     * Show the form for editing the specified Funcoes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        return view('funcoes.edit')->with('funcoes', $funcoes);
    }

    /**
     * Update the specified Funcoes in storage.
     *
     * @param int $id
     * @param UpdateFuncoesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFuncoesRequest $request)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        $funcoes = $this->funcoesRepository->update($request->all(), $id);

        Flash::success('Funcoes updated successfully.');

        return redirect(route('funcoes.index'));
    }

    /**
     * Remove the specified Funcoes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        $this->funcoesRepository->delete($id);

        Flash::success('Funcoes deleted successfully.');

        return redirect(route('funcoes.index'));
    }
}
