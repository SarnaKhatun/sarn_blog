@extends('admin.master')

@section('title')
    Add Service Category
@endsection
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Service Category</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-capitalize text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</h4>
                            <form action="{{route('new-service-category')}}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label for="name" class="col-md-4">Service Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="service_category_name" id="name" class="form-control">
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
                                        <input type="submit" class="btn btn-success w-100" value="Add Service Category">
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
