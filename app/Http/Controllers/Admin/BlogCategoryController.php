<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function addCategory ()
    {
        return view('admin.blog-category.add');
    }

    public function newCategory (Request $request)
    {
        BlogCategory::addBlogCategory($request);
        return redirect()->back()->with('message', 'blogs category added successfully');
    }

    public function manageCategory ()
    {
        return view('admin.blog-category.manage', [
            'blogCategories' => BlogCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editCategory ($id)
    {
        return view('admin.blog-category.edit', [
            'blogCategory' => BlogCategory::find($id),
        ]);
    }

    public function updateCategory (Request $request, $id)
    {
        BlogCategory::updateBlogCategory($request, $id);
        return redirect('/manage-blogs-category')->with('message', 'blogs category updated successfully');
    }

    public function deleteCategory ($id)
    {
        BlogCategory::find($id)->delete();
        return redirect()->back()->with('message', 'blogs category deleted successfully');
    }
}
