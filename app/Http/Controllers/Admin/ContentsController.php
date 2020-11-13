<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ContentsDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateContentsRequest;
use App\Http\Requests\Admin\UpdateContentsRequest;
use App\Repositories\Admin\ContentsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ContentsController extends AppBaseController
{
    /** @var  ContentsRepository */
    private $contentsRepository;

    public function __construct(ContentsRepository $contentsRepo)
    {
        $this->contentsRepository = $contentsRepo;
    }

    /**
     * Display a listing of the Contents.
     *
     * @param ContentsDataTable $contentsDataTable
     * @return Response
     */
    public function index(ContentsDataTable $contentsDataTable)
    {
        return $contentsDataTable->render('admin.contents.index');
    }

    /**
     * Show the form for creating a new Contents.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.contents.create');
    }

    /**
     * Store a newly created Contents in storage.
     *
     * @param CreateContentsRequest $request
     *
     * @return Response
     */
    public function store(CreateContentsRequest $request)
    {
        $input = $request->all();

        $contents = $this->contentsRepository->create($input);

        Flash::success('Contents saved successfully.');

        return redirect(route('admin.contents.index'));
    }

    /**
     * Display the specified Contents.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contents = $this->contentsRepository->find($id);

        if (empty($contents)) {
            Flash::error('Contents not found');

            return redirect(route('admin.contents.index'));
        }

        return view('admin.contents.show')->with('contents', $contents);
    }

    /**
     * Show the form for editing the specified Contents.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contents = $this->contentsRepository->find($id);

        if (empty($contents)) {
            Flash::error('Contents not found');

            return redirect(route('admin.contents.index'));
        }

        return view('admin.contents.edit')->with('contents', $contents);
    }

    /**
     * Update the specified Contents in storage.
     *
     * @param  int              $id
     * @param UpdateContentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContentsRequest $request)
    {
        $contents = $this->contentsRepository->find($id);

        if (empty($contents)) {
            Flash::error('Contents not found');

            return redirect(route('admin.contents.index'));
        }

        $contents = $this->contentsRepository->update($request->all(), $id);

        Flash::success('Contents updated successfully.');

        return redirect(route('admin.contents.index'));
    }

    /**
     * Remove the specified Contents from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contents = $this->contentsRepository->find($id);

        if (empty($contents)) {
            Flash::error('Contents not found');

            return redirect(route('admin.contents.index'));
        }

        $this->contentsRepository->delete($id);

        Flash::success('Contents deleted successfully.');

        return redirect(route('admin.contents.index'));
    }
}
