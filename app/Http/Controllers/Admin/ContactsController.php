<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ContactsDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateContactsRequest;
use App\Http\Requests\Admin\UpdateContactsRequest;
use App\Repositories\Admin\ContactsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ContactsController extends AppBaseController
{
    /** @var  ContactsRepository */
    private $contactsRepository;

    public function __construct(ContactsRepository $contactsRepo)
    {
        $this->contactsRepository = $contactsRepo;
    }

    /**
     * Display a listing of the Contacts.
     *
     * @param ContactsDataTable $contactsDataTable
     * @return Response
     */
    public function index(ContactsDataTable $contactsDataTable)
    {
        return $contactsDataTable->render('admin.contacts.index');
    }

    /**
     * Show the form for creating a new Contacts.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created Contacts in storage.
     *
     * @param CreateContactsRequest $request
     *
     * @return Response
     */
    public function store(CreateContactsRequest $request)
    {
        $input = $request->all();

        $contacts = $this->contactsRepository->create($input);

        Flash::success('Contacts saved successfully.');

        return redirect(route('admin.contacts.index'));
    }

    /**
     * Display the specified Contacts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contacts = $this->contactsRepository->find($id);

        if (empty($contacts)) {
            Flash::error('Contacts not found');

            return redirect(route('admin.contacts.index'));
        }

        return view('admin.contacts.show')->with('contacts', $contacts);
    }

    /**
     * Show the form for editing the specified Contacts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contacts = $this->contactsRepository->find($id);

        if (empty($contacts)) {
            Flash::error('Contacts not found');

            return redirect(route('admin.contacts.index'));
        }

        return view('admin.contacts.edit')->with('contacts', $contacts);
    }

    /**
     * Update the specified Contacts in storage.
     *
     * @param  int              $id
     * @param UpdateContactsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactsRequest $request)
    {
        $contacts = $this->contactsRepository->find($id);

        if (empty($contacts)) {
            Flash::error('Contacts not found');

            return redirect(route('admin.contacts.index'));
        }

        $contacts = $this->contactsRepository->update($request->all(), $id);

        Flash::success('Contacts updated successfully.');

        return redirect(route('admin.contacts.index'));
    }

    /**
     * Remove the specified Contacts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contacts = $this->contactsRepository->find($id);

        if (empty($contacts)) {
            Flash::error('Contacts not found');

            return redirect(route('admin.contacts.index'));
        }

        $this->contactsRepository->delete($id);

        Flash::success('Contacts deleted successfully.');

        return redirect(route('admin.contacts.index'));
    }
}
