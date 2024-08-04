@extends('layouts.user.master')
@section('title')
    mySite
@endsection
@section('style')
    <style>
        @media only screen and (max-width: 768px) {

            .carousel-inner>.carousel-item>img {
                width: 100%;
                height: 1px;
            }

            .n-control {
                display: none;
            }

        }

        .carousel-inner>.carousel-item>img {
            width: 100%;
            height: 30rem
        }

        .n-control>.carousel-item>img {
            width: 100%;
            height: 15rem
        }
    </style>
@endsection
@section('body')
    <div class="container-flud p-1">
        <div class="row">
            <div class="col-md-8 p-1">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row p-1">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner n-control ">
                            <div class="carousel-item n-control active">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-1">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner n-control">
                            <div class="carousel-item active">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="card" style="width: 18rem">
                <img src="{{ asset('image/blog.jpg') }}" alt="" class="card-image-top">
                <card class="body">
                    <card class="title">
                        <h1>title</h1>
                    </card>
                </card>
            </div>
        </div>

    </div>
@endsection
