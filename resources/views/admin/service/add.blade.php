@extends('admin.master')

@section('title')
    Add Service
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">add service</h4>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <h4 class="text-capitalize text-center text-success">{{Session::get('message')}}</h4>
                            @endif
                                <form action="{{route('new-service')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-3">
                                        <label for="serviceId" class="col-md-4">Service Name</label>
                                        <div class="col-md-8">
                                            <select name="service_category_id" id="serviceId" class="form-control">
                                                <option value="" disabled selected><--select a option--></option>
                                                @foreach($serviceCategories as $serviceCategory)
                                                <option value="{{$serviceCategory->id}}">{{$serviceCategory->service_category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="title" class="col-md-4">Service Title</label>
                                        <div class="col-md-8">
                                            <input type="text" name="title" id="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="description" class="col-md-4">Service Description</label>
                                        <div class="col-md-8">
                                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4">Service Featured Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="image" >
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4">Service Status</label>
                                        <div class="col-md-8">
                                            <label for=""><input type="radio" name="status" value="1" checked>Published</label>
                                            <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4"></label>
                                        <div class="col-md-8">
                                            <input type="submit" class="btn btn-success w-100" value="Add Service">
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
