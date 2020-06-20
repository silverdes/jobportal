<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvitationRequest;
use App\Http\Requests\UpdateInvitationRequest;
use App\Repositories\InvitationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InvitationController extends AppBaseController
{
    /** @var  InvitationRepository */
    private $invitationRepository;

    public function __construct(InvitationRepository $invitationRepo)
    {
        $this->invitationRepository = $invitationRepo;
    }

    /**
     * Display a listing of the Invitation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invitations = $this->invitationRepository->all();

        return view('invitations.index')
            ->with('invitations', $invitations);
    }

    /**
     * Show the form for creating a new Invitation.
     *
     * @return Response
     */
    public function create()
    {
        return view('invitations.create');
    }

    /**
     * Store a newly created Invitation in storage.
     *
     * @param CreateInvitationRequest $request
     *
     * @return Response
     */
    public function store(CreateInvitationRequest $request)
    {
        $input = $request->all();

        $invitation = $this->invitationRepository->create($input);

        Flash::success('Invitation saved successfully.');

        return redirect(route('invitations.index'));
    }

    /**
     * Display the specified Invitation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        return view('invitations.show')->with('invitation', $invitation);
    }

    /**
     * Show the form for editing the specified Invitation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        return view('invitations.edit')->with('invitation', $invitation);
    }

    /**
     * Update the specified Invitation in storage.
     *
     * @param int $id
     * @param UpdateInvitationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvitationRequest $request)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        $invitation = $this->invitationRepository->update($request->all(), $id);

        Flash::success('Invitation updated successfully.');

        return redirect(route('invitations.index'));
    }

    /**
     * Remove the specified Invitation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        $this->invitationRepository->delete($id);

        Flash::success('Invitation deleted successfully.');

        return redirect(route('invitations.index'));
    }
}
