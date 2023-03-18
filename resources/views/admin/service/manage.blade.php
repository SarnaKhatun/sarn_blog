@extends('admin.master')

@section('title')
    Manage Service
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    @if(Session::has('message'))
                        <h4 class="text-capitalize text-center text-success">{{Session::get('message')}}</h4>
                    @endif
                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>Sl. No:</th>
                            <th>Service Name</th>
                            <th>Service Title</th>
                            <th>Description</th>
                            <th>Service Featured Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        @foreach($services as $service)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$service->serviceCategory->service_category_name}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td><img src="{{asset($service->image)}}" alt="" style="height: 100px; width: 100px;"></td>
                                <td>{{$service->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-service', ['id' => $service->id])}}" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-service', ['id' => $service->id])}}" class="btn btn-danger" onclick="return confirm('Are u sure want to delete this??')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
