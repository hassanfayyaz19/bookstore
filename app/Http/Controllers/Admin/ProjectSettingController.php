<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectSetting;
use Illuminate\Http\Request;

class ProjectSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project_setting = ProjectSetting::first();
        $timezone_identifiers = \DateTimeZone::listIdentifiers();
        return view('admin.project_settings.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $project_setting = ProjectSetting::first() ?? new ProjectSetting();
//        $project_setting = new ProjectSetting();
        $project_setting->first_name = $request->first_name;
        $project_setting->last_name = $request->last_name;
        $project_setting->company_name = $request->company_name;
        $project_setting->mobile_number = $request->mobile_number;
        $project_setting->phone_number = $request->phone_number;
        $project_setting->timezone = $request->timezone;
        $project_setting->currency = $request->currency;
        $project_setting->save();
        $project_setting->refresh();

        if ($request->hasFile('profile')) {
            $path = 'project-setting/';
            $project_setting->profile = $this->uploadFile($request->profile, $path);
            $project_setting->save();
        }

        if ($request->hasFile('logo')) {
            $path = 'project-setting/';
            $project_setting->logo = $this->uploadFile($request->logo, $path);
            $project_setting->save();
        }
        return back()->withSuccess('Settings Save Successfully');
    }

    protected function uploadFile($file, $path)
    {
        $filePath = $file->store($path, 'public');
        return '/storage/' . $filePath;
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectSetting $project_setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectSetting $project_setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectSetting $project_setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectSetting $project_setting)
    {
        //
    }
}
