@extends('admin.master')

@section('title')
    Manage Blog Category
@endsection

@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h4 class="text-capitalize text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</h4>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>Sl. No:</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($blogCategories as $blogCategory)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$blogCategory->category_name}}</td>
                            <td>{{$blogCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('edit-blogs-category', ['id' => $blogCategory->id])}}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('delete-blogs-category', ['id' => $blogCategory->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this????')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
