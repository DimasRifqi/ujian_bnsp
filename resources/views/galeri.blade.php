@extends('component.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Galeri</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Galeri Kegiatan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Galeri</h6>
                <h1 class="mb-5">Galeri Kegiatan Sekolah</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($galeri as $data)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ $data->foto }}" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection
