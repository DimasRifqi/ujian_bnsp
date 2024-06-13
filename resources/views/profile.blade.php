@extends('component.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('template_asset') }}/img/kepala_sekolah.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Profile</h6>
                    <h1 class="mb-4">Sambutan Kepala Sekolah</h1>
                    <p class="mb-4">Assalamu'alaikum wr.wb.

                        Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya
                        sehingga website SMK PEMUDA KRIAN ini dapat muncul di dunia Pendidikan. SMK Pemuda Krian berstatus
                        SWASTA dengan lama pelaksanaan pelajaran dalam seminggu adalah Sehari Penuh/6 hari. Dengan Jenjang
                        Pendidikan SMK di Kab. Sidoarjo. Akreditasi SMK PEMUDA KRIAN adalah A, Tanggal SK. Akreditasi
                        01-01-2015, dengan No. SK. Akreditasi. Hingga pada tahun 2020 ini, SMK PEMUDA KRIAN mempunyai tiga
                        jurusan program keahlian antara lain program keahlian Akuntansi, Multimedia, dan Bisnis Daring dan
                        Pemasaran. Dan memiliki tenaga pendidik sebanyak kurang lebih 30 orang. dan masing-masing program
                        keahlian memiliki teaching factory. Melalui layanan internet dan online selama 24 jam, Salah satu
                        tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan
                        sarana teknologi informasi yang ada.

                        Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan
                        dengan pendidikan, ilmu pengetahuan dan informasi seputar sekolah.

                        Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan
                        meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik
                        nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai cita-cita yang lebih baik lagi.

                        Wassalamu'alaikum wr.wb.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Visi & Misi</h6>
                <h1 class="mb-5">Misi</h1>

            </div>
            <div class="row g-4">
                @foreach ($misi as $data)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                {{-- <h5 class="mb-3">Misi</h5> --}}
                                <p>{{ $data->isi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5 mt-5">Visi</h1>

            </div>
            <div class="row g-4">
                @foreach ($visi as $data)
                    <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                                {{-- <h5 class="mb-3">Misi</h5> --}}
                                <p>{{ $data->isi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    {{-- <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('template_asset')}}/img/kepala_sekolah.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End --> --}}
@endsection
