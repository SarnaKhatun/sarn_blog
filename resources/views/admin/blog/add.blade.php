@extends('admin.master')

@section('title')
    Add Blog
@endsection
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Add Blog </h4>
                    </div>
                    <div class="card-body">
                        <h4 class="text-capitalize text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</h4>
                        <form action="{{route('new-blogs')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select name="blog_category_id" id="name" class="form-control">
                                        <option value="" disabled selected><--select a option--></option>
                                        @foreach($blogCategories as $blogCategory)
                                        <option value="{{$blogCategory->id}}">{{$blogCategory->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="title" class="col-md-4">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="short" class="col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" id="short" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="editor" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Bog Featured Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" checked>Published</label>
                                    <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success w-100" value="Add Blog Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('body')
@endsection
