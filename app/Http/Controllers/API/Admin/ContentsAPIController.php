<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Requests\API\Admin\CreateContentsAPIRequest;
use App\Http\Requests\API\Admin\UpdateContentsAPIRequest;
use App\Models\Admin\Contents;
use App\Repositories\Admin\ContentsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ContentsController
 * @package App\Http\Controllers\API\Admin
 */

class ContentsAPIController extends AppBaseController
{
    /** @var  ContentsRepository */
    private $contentsRepository;

    public function __construct(ContentsRepository $contentsRepo)
    {
        $this->contentsRepository = $contentsRepo;
    }

    /**
     * Display a listing of the Contents.
     * GET|HEAD /contents
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $contents = $this->contentsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($contents->toArray(), 'Contents retrieved successfully');
    }

    /**
     * Store a newly created Contents in storage.
     * POST /contents
     *
     * @param CreateContentsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateContentsAPIRequest $request)
    {
        $input = $request->all();

        $contents = $this->contentsRepository->create($input);

        return $this->sendResponse($contents->toArray(), 'Contents saved successfully');
    }

    /**
     * Display the specified Contents.
     * GET|HEAD /contents/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Contents $contents */
        $contents = $this->contentsRepository->find($id);

        if (empty($contents)) {
            return $this->sendError('Contents not found');
        }

        return $this->sendResponse($contents->toArray(), 'Contents retrieved successfully');
    }

    /**
     * Update the specified Contents in storage.
     * PUT/PATCH /contents/{id}
     *
     * @param int $id
     * @param UpdateContentsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContentsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Contents $contents */
        $contents = $this->contentsRepository->find($id);

        if (empty($contents)) {
            return $this->sendError('Contents not found');
        }

        $contents = $this->contentsRepository->update($input, $id);

        return $this->sendResponse($contents->toArray(), 'Contents updated successfully');
    }

    /**
     * Remove the specified Contents from storage.
     * DELETE /contents/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Contents $contents */
        $contents = $this->contentsRepository->find($id);

        if (empty($contents)) {
            return $this->sendError('Contents not found');
        }

        $contents->delete();

        return $this->sendSuccess('Contents deleted successfully');
    }
}
