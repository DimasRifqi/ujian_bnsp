@extends('component.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($pamflet as $data)
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ $data->foto }}" style="width: 10000px; height: 700px; object-fit: cover;"
                        alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="text-primary text-uppercase mb-3 animated slideInDown">SMK Pemuda Krian</h5>
                                    <h1 class="display-3 text-white animated slideInDown">Islamic Progesive School</h1>
                                    <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                                        stet
                                        sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod
                                        elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                        More</a>
                                    <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Dapaat Skill Yang Bermanfaat Untuk Di dunia Kerja Nanti</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Offline Classes</h5>
                            <p>Pembelajaran Tatap Muka</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Selalu Ada Tugas Untuk Mengasah Murid</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Materi Yang Berkualitas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" src="https://www.youtube.com/embed/hGnOJfCZfdc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="object-fit: cover;"></iframe>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang SMK Pemuda Krian</h6>
                    <h1 class="mb-4">Visi & Misi SMK Pemuda Krian</h1>
                    @foreach ($visi as $data)
                        <p class="mb-4">{{ $data->isi }}</p>
                    @endforeach
                    <div class="row gy-2 gx-4 mb-4">
                        @foreach ($misi as $data)
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $data->isi }}</p>
                        </div>

                        @endforeach
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('/profile') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
