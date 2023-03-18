@extends('admin.master')

@section('title')
    Edit Blog
@endsection
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit Blog </h4>
                    </div>
                    <div class="card-body">
                        <h4 class="text-capitalize text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</h4>
                        <form action="{{route('update-blogs', ['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select name="blog_category_id" id="name" class="form-control">
                                        <option value="" disabled selected><--select a option--></option>
                                        @foreach($blogCategories as $blogCategory)
                                            <option value="{{$blogCategory->id}}" {{$blogCategory->id == $blog->blog_category_id ? 'selected' : ''}}>{{$blogCategory->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="title" class="col-md-4">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="short" class="col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" id="short" cols="30" rows="5" class="form-control">{{$blog->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="long" class="col-md-4">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="long" cols="30" rows="8" class="form-control">{{$blog->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Bog Featured Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image">
                                    <img src="{{asset($blog->image)}}" alt="" style="height: 100px; width: 100px;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" {{$blog->status == 1 ? 'checked' : ''}}>Published</label>
                                    <label for=""><input type="radio" name="status" value="0" {{$blog->status == 0 ? 'checked' : ''}}>Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success w-100" value="Update Blog Category">
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
