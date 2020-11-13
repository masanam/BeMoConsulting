<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\MenusDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateMenusRequest;
use App\Http\Requests\Admin\UpdateMenusRequest;
use App\Repositories\Admin\MenusRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MenusController extends AppBaseController
{
    /** @var  MenusRepository */
    private $menusRepository;

    public function __construct(MenusRepository $menusRepo)
    {
        $this->menusRepository = $menusRepo;
    }

    /**
     * Display a listing of the Menus.
     *
     * @param MenusDataTable $menusDataTable
     * @return Response
     */
    public function index(MenusDataTable $menusDataTable)
    {
        return $menusDataTable->render('admin.menuses.index');
    }

    /**
     * Show the form for creating a new Menus.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.menuses.create');
    }

    /**
     * Store a newly created Menus in storage.
     *
     * @param CreateMenusRequest $request
     *
     * @return Response
     */
    public function store(CreateMenusRequest $request)
    {
        $input = $request->all();

        $menus = $this->menusRepository->create($input);

        Flash::success('Menus saved successfully.');

        return redirect(route('admin.menuses.index'));
    }

    /**
     * Display the specified Menus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $menus = $this->menusRepository->find($id);

        if (empty($menus)) {
            Flash::error('Menus not found');

            return redirect(route('admin.menuses.index'));
        }

        return view('admin.menuses.show')->with('menus', $menus);
    }

    /**
     * Show the form for editing the specified Menus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $menus = $this->menusRepository->find($id);

        if (empty($menus)) {
            Flash::error('Menus not found');

            return redirect(route('admin.menuses.index'));
        }

        return view('admin.menuses.edit')->with('menus', $menus);
    }

    /**
     * Update the specified Menus in storage.
     *
     * @param  int              $id
     * @param UpdateMenusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenusRequest $request)
    {
        $menus = $this->menusRepository->find($id);

        if (empty($menus)) {
            Flash::error('Menus not found');

            return redirect(route('admin.menuses.index'));
        }

        $menus = $this->menusRepository->update($request->all(), $id);

        Flash::success('Menus updated successfully.');

        return redirect(route('admin.menuses.index'));
    }

    /**
     * Remove the specified Menus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $menus = $this->menusRepository->find($id);

        if (empty($menus)) {
            Flash::error('Menus not found');

            return redirect(route('admin.menuses.index'));
        }

        $this->menusRepository->delete($id);

        Flash::success('Menus deleted successfully.');

        return redirect(route('admin.menuses.index'));
    }
}
