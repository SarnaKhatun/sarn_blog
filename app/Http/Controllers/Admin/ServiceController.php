<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    protected $service;

    public function addService ()
    {
        return view('admin.service.add', [
            'serviceCategories' => ServiceCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function newService (Request $request)
    {
        Service::addService($request);

        return redirect()->back()->with('message', 'service added successfully');
    }

    public function manageService ()
    {
        return view('admin.service.manage', [
            'services' => Service::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editService ($id)
    {
        return view('admin.service.edit', [
            'service' => Service::where('id', $id)->first(),
            'serviceCategories' => ServiceCategory::all(),
        ]);
    }

    public function updateService (Request $request,$id)
    {
        Service::updateService($request,$id);
        return redirect('/manage-service')->with('message', 'service updated successfully');
    }

    public function deleteService ($id)
    {
        $this->service = Service::find($id);

        if (file_exists($this->service->image))
        {
            unlink($this->service->image);
        }
        $this->service->delete();
        return redirect()->back()->with('message', 'service deleted successfully');
    }
}
