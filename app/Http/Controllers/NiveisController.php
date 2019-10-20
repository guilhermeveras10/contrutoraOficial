<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNiveisRequest;
use App\Http\Requests\UpdateNiveisRequest;
use App\Repositories\NiveisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NiveisController extends AppBaseController
{
    /** @var  NiveisRepository */
    private $niveisRepository;

    public function __construct(NiveisRepository $niveisRepo)
    {
        $this->niveisRepository = $niveisRepo;
    }

    /**
     * Display a listing of the Niveis.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $niveis = $this->niveisRepository->paginate(5);

        return view('niveis.index')
            ->with('niveis', $niveis);
    }

    /**
     * Show the form for creating a new Niveis.
     *
     * @return Response
     */
    public function create()
    {
        return view('niveis.create');
    }

    /**
     * Store a newly created Niveis in storage.
     *
     * @param CreateNiveisRequest $request
     *
     * @return Response
     */
    public function store(CreateNiveisRequest $request)
    {
        $input = $request->all();

        $niveis = $this->niveisRepository->create($input);

        Flash::success('Niveis saved successfully.');

        return redirect(route('niveis.index'));
    }

    /**
     * Display the specified Niveis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $niveis = $this->niveisRepository->find($id);

        if (empty($niveis)) {
            Flash::error('Niveis not found');

            return redirect(route('niveis.index'));
        }

        return view('niveis.show')->with('niveis', $niveis);
    }

    /**
     * Show the form for editing the specified Niveis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $niveis = $this->niveisRepository->find($id);

        if (empty($niveis)) {
            Flash::error('Niveis not found');

            return redirect(route('niveis.index'));
        }

        return view('niveis.edit')->with('niveis', $niveis);
    }

    /**
     * Update the specified Niveis in storage.
     *
     * @param int $id
     * @param UpdateNiveisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNiveisRequest $request)
    {
        $niveis = $this->niveisRepository->find($id);

        if (empty($niveis)) {
            Flash::error('Niveis not found');

            return redirect(route('niveis.index'));
        }

        $niveis = $this->niveisRepository->update($request->all(), $id);

        Flash::success('Niveis updated successfully.');

        return redirect(route('niveis.index'));
    }

    /**
     * Remove the specified Niveis from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $niveis = $this->niveisRepository->find($id);

        if (empty($niveis)) {
            Flash::error('Niveis not found');

            return redirect(route('niveis.index'));
        }

        $this->niveisRepository->delete($id);

        Flash::success('Niveis deleted successfully.');

        return redirect(route('niveis.index'));
    }
}
