<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarteirasRequest;
use App\Http\Requests\UpdateCarteirasRequest;
use App\Repositories\CarteirasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CarteirasController extends AppBaseController
{
    /** @var  CarteirasRepository */
    private $carteirasRepository;

    public function __construct(CarteirasRepository $carteirasRepo)
    {
        $this->carteirasRepository = $carteirasRepo;
    }

    /**
     * Display a listing of the Carteiras.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carteiras = $this->carteirasRepository->paginate(5);

        return view('carteiras.index')
            ->with('carteiras', $carteiras);
    }

    /**
     * Show the form for creating a new Carteiras.
     *
     * @return Response
     */
    public function create()
    {
        return view('carteiras.create');
    }

    /**
     * Store a newly created Carteiras in storage.
     *
     * @param CreateCarteirasRequest $request
     *
     * @return Response
     */
    public function store(CreateCarteirasRequest $request)
    {
        $input = $request->all();

        $carteiras = $this->carteirasRepository->create($input);

        Flash::success('Carteiras saved successfully.');

        return redirect(route('carteiras.index'));
    }

    /**
     * Display the specified Carteiras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carteiras = $this->carteirasRepository->find($id);

        if (empty($carteiras)) {
            Flash::error('Carteiras not found');

            return redirect(route('carteiras.index'));
        }

        return view('carteiras.show')->with('carteiras', $carteiras);
    }

    /**
     * Show the form for editing the specified Carteiras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carteiras = $this->carteirasRepository->find($id);

        if (empty($carteiras)) {
            Flash::error('Carteiras not found');

            return redirect(route('carteiras.index'));
        }

        return view('carteiras.edit')->with('carteiras', $carteiras);
    }

    /**
     * Update the specified Carteiras in storage.
     *
     * @param int $id
     * @param UpdateCarteirasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarteirasRequest $request)
    {
        $carteiras = $this->carteirasRepository->find($id);

        if (empty($carteiras)) {
            Flash::error('Carteiras not found');

            return redirect(route('carteiras.index'));
        }

        $carteiras = $this->carteirasRepository->update($request->all(), $id);

        Flash::success('Carteiras updated successfully.');

        return redirect(route('carteiras.index'));
    }

    /**
     * Remove the specified Carteiras from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carteiras = $this->carteirasRepository->find($id);

        if (empty($carteiras)) {
            Flash::error('Carteiras not found');

            return redirect(route('carteiras.index'));
        }

        $this->carteirasRepository->delete($id);

        Flash::success('Carteiras deleted successfully.');

        return redirect(route('carteiras.index'));
    }
}
