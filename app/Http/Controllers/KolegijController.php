<?php

namespace App\Http\Controllers;

use App\DataTables\KolegijDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateKolegijRequest;
use App\Http\Requests\UpdateKolegijRequest;
use App\Repositories\KolegijRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class KolegijController extends AppBaseController
{
    /** @var  KolegijRepository */
    private $kolegijRepository;

    public function __construct(KolegijRepository $kolegijRepo)
    {
        $this->kolegijRepository = $kolegijRepo;
    }

    /**
     * Display a listing of the Kolegij.
     *
     * @param KolegijDataTable $kolegijDataTable
     * @return Response
     */
    public function index(KolegijDataTable $kolegijDataTable)
    {
        return $kolegijDataTable->render('kolegijs.index');
    }

    /**
     * Show the form for creating a new Kolegij.
     *
     * @return Response
     */
    public function create()
    {
        return view('kolegijs.create');
    }

    /**
     * Store a newly created Kolegij in storage.
     *
     * @param CreateKolegijRequest $request
     *
     * @return Response
     */
    public function store(CreateKolegijRequest $request)
    {
        $input = $request->all();

        $kolegij = $this->kolegijRepository->create($input);

        Flash::success('Kolegij saved successfully.');

        return redirect(route('kolegijs.index'));
    }

    /**
     * Display the specified Kolegij.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kolegij = $this->kolegijRepository->find($id);

        if (empty($kolegij)) {
            Flash::error('Kolegij not found');

            return redirect(route('kolegijs.index'));
        }

        return view('kolegijs.show')->with('kolegij', $kolegij);
    }

    /**
     * Show the form for editing the specified Kolegij.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kolegij = $this->kolegijRepository->find($id);

        if (empty($kolegij)) {
            Flash::error('Kolegij not found');

            return redirect(route('kolegijs.index'));
        }

        return view('kolegijs.edit')->with('kolegij', $kolegij);
    }

    /**
     * Update the specified Kolegij in storage.
     *
     * @param  int              $id
     * @param UpdateKolegijRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKolegijRequest $request)
    {
        $kolegij = $this->kolegijRepository->find($id);

        if (empty($kolegij)) {
            Flash::error('Kolegij not found');

            return redirect(route('kolegijs.index'));
        }

        $kolegij = $this->kolegijRepository->update($request->all(), $id);

        Flash::success('Kolegij updated successfully.');

        return redirect(route('kolegijs.index'));
    }

    /**
     * Remove the specified Kolegij from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kolegij = $this->kolegijRepository->find($id);

        if (empty($kolegij)) {
            Flash::error('Kolegij not found');

            return redirect(route('kolegijs.index'));
        }

        $this->kolegijRepository->delete($id);

        Flash::success('Kolegij deleted successfully.');

        return redirect(route('kolegijs.index'));
    }
}
