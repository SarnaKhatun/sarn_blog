@extends('front.master')

@section('title')
    {{$service->title}}
@endsection

@section('body')

    <section class="page-title overlay" style="background-image: url({{asset('/')}}front/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Service Single</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('/')}}">Home</a>
                        </li>
                        <li>Service Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- service single -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <aside class="col-lg-4 order-lg-1 order-2">
                    <!-- service menu -->
                    <ul class="service-menu pl-0 border rounded mb-50">
                        @foreach($serviceCategories as $serviceCategory)
                        <li class="active border-bottom">
                            <a class="d-block font-primary text-dark p-4 rounded-top" href="{{route('service')}}">{{$serviceCategory->service_category_name}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Brochure -->
                    <div class="rounded border py-3 px-4 mb-50">
                        <i class="d-inline-block mr-1 text-dark ti-files" style="font-size: 20px;"></i>
                        <h4 class="mb-1 d-inline-block"> Service Brochure</h4>
                        <a class="font-secondary text-color d-block ml-4" href="#">Download pdf</a>
                    </div>
                    <!-- Opening Hours -->
                    <div class="mb-50">
                        <h5 class="mb-20">Opening Hours</h5>
                        <ul class="pl-0 border rounded px-4 py-3">
                            <li class=" font-secondary my-3 text-color">
                                <span class="d-inline-block font-weight-light text-dark" style="width: 130px;">Sun-Tues:</span>08.00am
                                - 06.00pm</li>
                        </ul>
                    </div>
                    <!-- Consultation -->
                    <div class="mb-50">
                        <h5 class="mb-20">Request Free Consultation</h5>
                        <form action="{{route('/')}}" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                            <textarea name="question" id="question" class="form-control p-2" placeholder="Your Question Here..."
                                      style="height: 150px;"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" value="send">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </aside>
                <!-- service single content -->
                <div class="col-lg-8 order-lg-2 order-1">
                    <img class="img-fluid mb-60 rounded-top" src="{{asset($service->image)}}" alt="service" style="height: 550px; width: 100%;">
                    <h3 class="mb-10">{{$service->title}}</h3>
                    <p class="mb-40">{!! $service->description !!}</p>
                    <div class="bg-gray p-5 rounded mb-60">
                        <p>{!! $service->description !!}</p>
                        <div>
                            <ul class="d-inline-block pl-0 float-sm-left mr-sm-5">
                                @foreach($serviceCategories as $serviceCategory)
                                <li class="font-secondary mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>{{$serviceCategory->service_category_name}}</li>
                                @endforeach
                            </ul>
                            <ul class="d-inline-block pl-0">
                                @foreach($serviceCategories as $serviceCategory)
                                <li class="font-secondary mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>{{$serviceCategory->service_category_name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <h4 class="mb-30">{{$service->title}}</h4>
                    <!-- chart -->
                    <img class="img-fluid w-100 mb-40" src="{{asset('/')}}front/images/service/service-chart.jpg" alt="chart">
                    <p class="mb-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                    <div class="mb-md-50">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <h4 class="mb-10">Benifits Of Service</h4>
                                <p class="mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div>
                                    <ul class="d-inline-block pl-0 float-sm-left mr-sm-4">
                                        @foreach($serviceCategories as $serviceCategory)
                                        <li class="font-secondary mb-10">
                                            <i class="text-primary mr-2 ti-arrow-circle-right"></i>{{$serviceCategory->service_category_name}}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 mt-sm-4 mt-md-0">
                                <img class="img-fluid rounded" src="{{asset('/')}}front/images/service/benifit.jpg" alt="benifit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
