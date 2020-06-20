<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrganisationRequest;
use App\Http\Requests\UpdateOrganisationRequest;
use App\Repositories\OrganisationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OrganisationController extends AppBaseController
{
    /** @var  OrganisationRepository */
    private $organisationRepository;

    public function __construct(OrganisationRepository $organisationRepo)
    {
        $this->organisationRepository = $organisationRepo;
    }

    /**
     * Display a listing of the Organisation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $organisations = $this->organisationRepository->all();

        return view('organisations.index')
            ->with('organisations', $organisations);
    }

    /**
     * Show the form for creating a new Organisation.
     *
     * @return Response
     */
    public function create()
    {
        return view('organisations.create');
    }

    /**
     * Store a newly created Organisation in storage.
     *
     * @param CreateOrganisationRequest $request
     *
     * @return Response
     */
    public function store(CreateOrganisationRequest $request)
    {
        $input = $request->all();

        $organisation = $this->organisationRepository->create($input);

        Flash::success('Organisation saved successfully.');

        return redirect(route('organisations.index'));
    }

    /**
     * Display the specified Organisation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organisation = $this->organisationRepository->find($id);

        if (empty($organisation)) {
            Flash::error('Organisation not found');

            return redirect(route('organisations.index'));
        }

        return view('organisations.show')->with('organisation', $organisation);
    }

    /**
     * Show the form for editing the specified Organisation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organisation = $this->organisationRepository->find($id);

        if (empty($organisation)) {
            Flash::error('Organisation not found');

            return redirect(route('organisations.index'));
        }

        return view('organisations.edit')->with('organisation', $organisation);
    }

    /**
     * Update the specified Organisation in storage.
     *
     * @param int $id
     * @param UpdateOrganisationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganisationRequest $request)
    {
        $organisation = $this->organisationRepository->find($id);

        if (empty($organisation)) {
            Flash::error('Organisation not found');

            return redirect(route('organisations.index'));
        }

        $organisation = $this->organisationRepository->update($request->all(), $id);

        Flash::success('Organisation updated successfully.');

        return redirect(route('organisations.index'));
    }

    /**
     * Remove the specified Organisation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organisation = $this->organisationRepository->find($id);

        if (empty($organisation)) {
            Flash::error('Organisation not found');

            return redirect(route('organisations.index'));
        }

        $this->organisationRepository->delete($id);

        Flash::success('Organisation deleted successfully.');

        return redirect(route('organisations.index'));
    }
}
