@extends('layouts.freelancer_layout')

@section('title', 'Create')

@section('content')
    <section class="page-title">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <!-- Title text -->
                    <h3>About Us</h3>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('images/logo.png')}}" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="about-content">
                        <h3 class="font-weight-bold">About</h3>
                        <ul>
                            <li>

                                1.mahasiswa dapat membuat profil pribadi yang menonjolkan keahlian, minat, dan pengalaman mereka. Mereka dapat menampilkan portofolio karya mereka, sertifikasi yang dimiliki, dan testimoni dari klien sebelumnya.
                            </li>
                            <li>

                                2. Program Kemitraan
                                Frema menjalin kerja sama dengan perusahaan dan organisasi terkemuka, memberikan akses ke proyek dan peluang kerja yang lebih luas bagi mahasiswa. Ini membantu memperluas jaringan profesional mereka dan membuka pintu menuju karir yang sukses.
                            </li>
                            <li>

                                3. Website ini menawarkan sistem pembayaran yang aman dan transparan, sehingga mahasiswa dapat dengan mudah mengatur dan melacak pembayaran mereka. Frema juga memberikan fitur pelaporan dan penilaian kinerja yang membantu mahasiswa membangun reputasi yang baik sebagai freelancer yang dapat diandalkan.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container">
            <div class="row" style="justify-content: center">
                <div class="col-lg-12">
                    <div class="heading text-center text-capitalize font-weight-bold py-5">
                        <h2>our team</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" height="350"
                            src="{{asset('images/about/Anam.jpg')}}"
                            class="img-fluid w-100" alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">
                                <a href="">
                                    MUHAMMAD KHOIRUL ANAM
                                </a>
                            </h5>
                            <p class="card-text">Teknik Informatika</p>
                            <p class="card-text">Universitas Negeri Malang</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" height="350"
                            src="{{asset('images/about/Rifky.jpg')}}"
                            class="img-fluid w-100" alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">
                                <a href="">
                                    MOHAMMAD RIFKY RAHMADI
                                </a>
                            </h5>
                            <p class="card-text">Teknik Informatika</p>
                            <p class="card-text">Universitas Negeri Malang</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" height="350"
                            src="{{asset('images/about/Lucas.jpg')}}"
                            class="img-fluid w-100" alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">
                                <a href="">
                                    LUCAS SIMANIHURUK
                                </a>
                            </h5>
                            <p class="card-text">Teknik Informatika</p>
                            <p class="card-text">Universitas Negeri Malang</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" height="350"
                            src="{{asset('images/about/Farhan.jpg')}}"
                            class="img-fluid w-100" alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">
                                <a href="">
                                    MUHAMMAD FARHAN HIDAYAT
                                </a>
                            </h5>
                            <p class="card-text">Teknik Informatika</p>
                            <p class="card-text">Universitas Negeri Malang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-smile-o d-block"></i>
                        <span class="counter my-2 d-block" data-count="{{ $user->count() }}">0</span>
                        <h5>Users</h5>
                        </script>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-user-o d-block"></i>
                        <span class="counter my-2 d-block" data-count="{{ $freelancer->count() }}">0</span>
                        <h5>Freelancers</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-bookmark-o d-block"></i>
                        <span class="counter my-2 d-block" data-count="{{ $gig->count() }}">0</span>
                        <h5>Gigs</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-briefcase d-block"></i>
                        <span class="counter my-2 d-block" data-count="{{ $order->count() }}">0</span>
                        <h5>Total Transactions</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
