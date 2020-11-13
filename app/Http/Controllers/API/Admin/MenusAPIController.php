<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Requests\API\Admin\CreateMenusAPIRequest;
use App\Http\Requests\API\Admin\UpdateMenusAPIRequest;
use App\Models\Admin\Menus;
use App\Repositories\Admin\MenusRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class MenusController
 * @package App\Http\Controllers\API\Admin
 */

class MenusAPIController extends AppBaseController
{
    /** @var  MenusRepository */
    private $menusRepository;

    public function __construct(MenusRepository $menusRepo)
    {
        $this->menusRepository = $menusRepo;
    }

    /**
     * Display a listing of the Menus.
     * GET|HEAD /menuses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $menuses = $this->menusRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($menuses->toArray(), 'Menuses retrieved successfully');
    }

    /**
     * Store a newly created Menus in storage.
     * POST /menuses
     *
     * @param CreateMenusAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMenusAPIRequest $request)
    {
        $input = $request->all();

        $menus = $this->menusRepository->create($input);

        return $this->sendResponse($menus->toArray(), 'Menus saved successfully');
    }

    /**
     * Display the specified Menus.
     * GET|HEAD /menuses/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Menus $menus */
        $menus = $this->menusRepository->find($id);

        if (empty($menus)) {
            return $this->sendError('Menus not found');
        }

        return $this->sendResponse($menus->toArray(), 'Menus retrieved successfully');
    }

    /**
     * Update the specified Menus in storage.
     * PUT/PATCH /menuses/{id}
     *
     * @param int $id
     * @param UpdateMenusAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenusAPIRequest $request)
    {
        $input = $request->all();

        /** @var Menus $menus */
        $menus = $this->menusRepository->find($id);

        if (empty($menus)) {
            return $this->sendError('Menus not found');
        }

        $menus = $this->menusRepository->update($input, $id);

        return $this->sendResponse($menus->toArray(), 'Menus updated successfully');
    }

    /**
     * Remove the specified Menus from storage.
     * DELETE /menuses/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Menus $menus */
        $menus = $this->menusRepository->find($id);

        if (empty($menus)) {
            return $this->sendError('Menus not found');
        }

        $menus->delete();

        return $this->sendSuccess('Menus deleted successfully');
    }
}
