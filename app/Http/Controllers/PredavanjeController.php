<?php

namespace App\Http\Controllers;

use App\DataTables\PredavanjeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePredavanjeRequest;
use App\Http\Requests\UpdatePredavanjeRequest;
use App\Repositories\PredavanjeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PredavanjeController extends AppBaseController
{
    /** @var  PredavanjeRepository */
    private $predavanjeRepository;

    public function __construct(PredavanjeRepository $predavanjeRepo)
    {
        $this->predavanjeRepository = $predavanjeRepo;
    }

    /**
     * Display a listing of the Predavanje.
     *
     * @param PredavanjeDataTable $predavanjeDataTable
     * @return Response
     */
    public function index(PredavanjeDataTable $predavanjeDataTable)
    {
        return $predavanjeDataTable->render('predavanjes.index');
    }

    /**
     * Show the form for creating a new Predavanje.
     *
     * @return Response
     */
    public function create()
    {
        return view('predavanjes.create');
    }

    /**
     * Store a newly created Predavanje in storage.
     *
     * @param CreatePredavanjeRequest $request
     *
     * @return Response
     */
    public function store(CreatePredavanjeRequest $request)
    {
        $input = $request->all();

        $predavanje = $this->predavanjeRepository->create($input);

        Flash::success('Predavanje saved successfully.');

        return redirect(route('predavanjes.index'));
    }

    /**
     * Display the specified Predavanje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $predavanje = $this->predavanjeRepository->find($id);

        if (empty($predavanje)) {
            Flash::error('Predavanje not found');

            return redirect(route('predavanjes.index'));
        }

        return view('predavanjes.show')->with('predavanje', $predavanje);
    }

    /**
     * Show the form for editing the specified Predavanje.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $predavanje = $this->predavanjeRepository->find($id);

        if (empty($predavanje)) {
            Flash::error('Predavanje not found');

            return redirect(route('predavanjes.index'));
        }

        return view('predavanjes.edit')->with('predavanje', $predavanje);
    }

    /**
     * Update the specified Predavanje in storage.
     *
     * @param  int              $id
     * @param UpdatePredavanjeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePredavanjeRequest $request)
    {
        $predavanje = $this->predavanjeRepository->find($id);

        if (empty($predavanje)) {
            Flash::error('Predavanje not found');

            return redirect(route('predavanjes.index'));
        }

        $predavanje = $this->predavanjeRepository->update($request->all(), $id);

        Flash::success('Predavanje updated successfully.');

        return redirect(route('predavanjes.index'));
    }

    /**
     * Remove the specified Predavanje from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $predavanje = $this->predavanjeRepository->find($id);

        if (empty($predavanje)) {
            Flash::error('Predavanje not found');

            return redirect(route('predavanjes.index'));
        }

        $this->predavanjeRepository->delete($id);

        Flash::success('Predavanje deleted successfully.');

        return redirect(route('predavanjes.index'));
    }
}
