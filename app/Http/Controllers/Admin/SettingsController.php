<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\SettingsDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateSettingsRequest;
use App\Http\Requests\Admin\UpdateSettingsRequest;
use App\Repositories\Admin\SettingsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SettingsController extends AppBaseController
{
    /** @var  SettingsRepository */
    private $settingsRepository;

    public function __construct(SettingsRepository $settingsRepo)
    {
        $this->settingsRepository = $settingsRepo;
    }

    /**
     * Display a listing of the Settings.
     *
     * @param SettingsDataTable $settingsDataTable
     * @return Response
     */
    public function index(SettingsDataTable $settingsDataTable)
    {
        return $settingsDataTable->render('admin.settings.index');
    }

    /**
     * Show the form for creating a new Settings.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created Settings in storage.
     *
     * @param CreateSettingsRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingsRequest $request)
    {
        $input = $request->all();

        $settings = $this->settingsRepository->create($input);

        Flash::success('Settings saved successfully.');

        return redirect(route('admin.settings.index'));
    }

    /**
     * Display the specified Settings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $settings = $this->settingsRepository->find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('admin.settings.index'));
        }

        return view('admin.settings.show')->with('settings', $settings);
    }

    /**
     * Show the form for editing the specified Settings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $settings = $this->settingsRepository->find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('admin.settings.index'));
        }

        return view('admin.settings.edit')->with('settings', $settings);
    }

    /**
     * Update the specified Settings in storage.
     *
     * @param  int              $id
     * @param UpdateSettingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsRequest $request)
    {
        $settings = $this->settingsRepository->find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('admin.settings.index'));
        }

        $settings = $this->settingsRepository->update($request->all(), $id);

        Flash::success('Settings updated successfully.');

        return redirect(route('admin.settings.index'));
    }

    /**
     * Remove the specified Settings from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $settings = $this->settingsRepository->find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('admin.settings.index'));
        }

        $this->settingsRepository->delete($id);

        Flash::success('Settings deleted successfully.');

        return redirect(route('admin.settings.index'));
    }
}
