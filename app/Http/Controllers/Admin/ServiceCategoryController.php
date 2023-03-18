<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function addServiceCategory ()
    {
        return view('admin.service-category.add');
    }

    public function newServiceCategory (Request $request)
    {
        ServiceCategory::addServiceCategory($request);
        return redirect()->back()->with('message', 'service category added successfully');
    }

    public function manageServiceCategory ()
    {
        return view('admin.service-category.manage', [
            'serviceCategories' => ServiceCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editServiceCategory ($id)
    {
        return view('admin.service-category.edit', [
            'serviceCategory' => ServiceCategory::find($id),
        ]);
    }

    public function updateServiceCategory (Request $request, $id)
    {
        ServiceCategory::updateServiceCategory($request, $id);
        return redirect('/manage-service-category')->with('message', 'service category updated successfully');
    }

    public function deleteServiceCategory ($id)
    {
        ServiceCategory::find($id)->delete();
        return redirect()->back()->with('message', 'service category deleted successfully');
    }
}
