@extends('front.master')

@section('title')
    Blog
@endsection

@section('body')
    <section class="page-title overlay" style="background-image: url({{asset('/')}}front/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Our Blog</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>Our Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                <!-- blog-item -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top" src="{{asset($blog->image)}}" alt="blog-thumbnail" style="height: 300px; width: 300px;">
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="py-3 px-4 border-right text-center">
                                    <p class="mb-0 fw-bold text-danger">{!! \Illuminate\Support\Carbon::parse($blog->created_at)->format('d F') !!}</p>


                                </div>
                                <div class="p-3">
                                    <a href="{{route('blogs-details', ['id' => $blog->id])}}" class="text-dark"><h3 class="text-center text-capitalize mb-0">{{$blog->title}}</h3></a>
                                    @php
                                    $author = \App\Models\User::find($blog->author_id)
                                    @endphp
                                    <p>by {{$author->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- blog-item -->

            </div>
        </div>
    </section>
    <!-- /blog -->

@endsection
