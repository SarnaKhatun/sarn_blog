<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blog;
    public function addBlog ()
    {
        return view('admin.blog.add', [
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    public function newBlog (Request $request)
    {
        Blog::addBlog($request);
        return redirect()->back()->with('message', 'blogs  added successfully');
    }

    public function manageBlog ()
    {
        return view('admin.blog.manage', [
            'blogs' => Blog::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editBlog ($id)
    {
        return view('admin.blog.edit', [
            'blog' =>Blog::find($id) ,
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    public function updateBlog (Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blogs')->with('message', 'blogs  updated successfully');
    }

    public function deleteBlog ($id)
    {
       $this->blog = Blog::find($id);
       if (file_exists($this->blog->image))
       {
           unlink($this->blog->image);
       }
       Blog::find($id)->delete();
        return redirect()->back()->with('message', 'blogs  deleted successfully');
    }
}
