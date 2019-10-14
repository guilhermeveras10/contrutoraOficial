<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEngenheirosRequest;
use App\Http\Requests\UpdateEngenheirosRequest;
use App\Repositories\EngenheirosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EngenheirosController extends AppBaseController
{
    /** @var  EngenheirosRepository */
    private $engenheirosRepository;

    public function __construct(EngenheirosRepository $engenheirosRepo)
    {
        $this->engenheirosRepository = $engenheirosRepo;
    }

    /**
     * Display a listing of the Engenheiros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $engenheiros = $this->engenheirosRepository->paginate(5);

        return view('engenheiros.index')
            ->with('engenheiros', $engenheiros);
    }

    /**
     * Show the form for creating a new Engenheiros.
     *
     * @return Response
     */
    public function create()
    {
        return view('engenheiros.create');
    }

    /**
     * Store a newly created Engenheiros in storage.
     *
     * @param CreateEngenheirosRequest $request
     *
     * @return Response
     */
    public function store(CreateEngenheirosRequest $request)
    {
        $input = $request->all();

        $engenheiros = $this->engenheirosRepository->create($input);

        Flash::success('Engenheiros saved successfully.');

        return redirect(route('engenheiros.index'));
    }

    /**
     * Display the specified Engenheiros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $engenheiros = $this->engenheirosRepository->find($id);

        if (empty($engenheiros)) {
            Flash::error('Engenheiros not found');

            return redirect(route('engenheiros.index'));
        }

        return view('engenheiros.show')->with('engenheiros', $engenheiros);
    }

    /**
     * Show the form for editing the specified Engenheiros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $engenheiros = $this->engenheirosRepository->find($id);

        if (empty($engenheiros)) {
            Flash::error('Engenheiros not found');

            return redirect(route('engenheiros.index'));
        }

        return view('engenheiros.edit')->with('engenheiros', $engenheiros);
    }

    /**
     * Update the specified Engenheiros in storage.
     *
     * @param int $id
     * @param UpdateEngenheirosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEngenheirosRequest $request)
    {
        $engenheiros = $this->engenheirosRepository->find($id);

        if (empty($engenheiros)) {
            Flash::error('Engenheiros not found');

            return redirect(route('engenheiros.index'));
        }

        $engenheiros = $this->engenheirosRepository->update($request->all(), $id);

        Flash::success('Engenheiros updated successfully.');

        return redirect(route('engenheiros.index'));
    }

    /**
     * Remove the specified Engenheiros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $engenheiros = $this->engenheirosRepository->find($id);

        if (empty($engenheiros)) {
            Flash::error('Engenheiros not found');

            return redirect(route('engenheiros.index'));
        }

        $this->engenheirosRepository->delete($id);

        Flash::success('Engenheiros deleted successfully.');

        return redirect(route('engenheiros.index'));
    }
}
