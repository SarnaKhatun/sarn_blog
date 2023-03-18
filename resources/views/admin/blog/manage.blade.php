@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Manage Blog</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-capitalize text-center text-success">{{Session::has('message') ? Session::get('message') : ''}}</h4>
                        <table class="table  table-bordered table-responsive" id="table">
                            <thead>
                            <tr>
                                <th>Sl. No:</th>
                                <th>Category Name</th>
                                <th>Blog Title</th>
                                <th>Author Id</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Blog Featured Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->blogCategory->category_name}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->author_id}}</td>
                                    <td>{{$blog->short_description}}</td>
                                    <td>{!! \Illuminate\Support\Str::words($blog->long_description, 2, '......') !!}</td>
                                    <td><img src="{{asset($blog->image)}}" alt="" style="height: 100px; width: 100px;"></td>
                                    <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('edit-blogs', ['id' => $blog->id])}}" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('delete-blogs', ['id' => $blog->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this????')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
