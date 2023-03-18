@extends('admin.master')

@section('title')
    Edit Blog Category
@endsection
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Edit Blog Category</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="text-capitalize text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</h4>
                        <form action="{{route('update-blogs-category', ['id' => $blogCategory->id])}}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" id="name" class="form-control" value="{{$blogCategory->category_name}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" {{$blogCategory->status == 1 ? 'checked' : ''}}>Published</label>
                                    <label for=""><input type="radio" name="status" value="0" {{$blogCategory->status == 0 ? 'checked' : ''}}>Unpublished</label>
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
