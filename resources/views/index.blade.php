@extends('layouts.layouts')

@section('Home')
    <!-- Hero section Start -->
    <section class="hero-5 bg-light position-relative" id="home">
        <div class="promo-alert alert alert-warning alert-dismissible fade show" role="alert">
            <div class="promo-content"><strong>Hi, Airians!</strong> Jangan lupa nanti ada live IG, <a href="#">yuk Cekidot</a></div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        {{-- <h1 class="hero-5-title-bg fw-bold d-none d-lg-block">AIRVISUAL</h1> --}}
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-5 col-md-12">
                    <div class="hero-5-content">
                        <h2 class="text-weight-bolder text-white mb-1">Solusi buat kamu yang ingin mengembangkan bisnis di Marketplace Online</h2>
                        {{-- <h2 class="hero-5-title fw-normal mb-4">Kamu bisa Fokus untuk Mengembangkan Bisnismu.</h2> --}}
                        <br>
                        <p class="font-weight-bold text-white">Jualan apapun dimanapun ada strategi dan ilmunya, termasuk di Marketplace Online, buat kamu yang pengen Online Shop kamu bisa bersaing dengan yang lain, kita bisa bantu kamu mencapai itu </p>
                        <br>
                        <a href="" class="btn btn-airvisual btn-lg btn-block my-lg-0 my-2 text-white">Daftar Sekarang</a>
                        <a href="https://api.whatsapp.com/send?phone=6288229057631&text=Hi,%20Airians!%20👋%0AMau%20Tanya%20Boleh%20?" class="btn btn-outline-air ml-2">Hubungi AirTeams</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img class="img-fluid img-car" src="images/hero-5-img-1.png" alt="">
                </div>
            </div>
            <div class="waves-header">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212F59" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,234.7C672,256,768,224,864,176C960,128,1056,64,1152,64C1248,64,1344,128,1392,160L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            </div>

            {{-- <div class="d-flex justify-content-center">
                <img class="img-fluid" src="images/hero-5-img.png" alt="">
            </div> --}}
            <!-- end row -->
        </div>

        <!-- end container -->
    </section>
    <!-- Hero section End -->

    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212F59" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,234.7C672,256,768,224,864,176C960,128,1056,64,1152,64C1248,64,1344,128,1392,160L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212F59" fill-opacity="1" d="M0,192L120,165.3C240,139,480,85,720,69.3C960,53,1200,75,1320,85.3L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg> --}}

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212F59" fill-opacity="1" d="M0,192L80,170.7C160,149,320,107,480,117.3C640,128,800,192,960,208C1120,224,1280,192,1360,176L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    {{-- Layanan yang di dukung --}}
    <div class="container">
        <!-- start brand logo -->
        <div class="row pb-5 align-items-center">
            <div class="col-lg-4 col-md-12">
                {{-- <h3 class="mb-2">2,200<sup>+</sup></h3> --}}
                <h3 class="mb-2">Platform dalam layanan kami</h3>
                <p class="text-muted mb-sm-0 mb-5 pb-sm-0 pb-4">Kami terus mengejar agar anda bisa beradaptasi dengan teknologi terbaru.</p>
            </div>
            <div class="row col-lg-8 mt-2">
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/1.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/3.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/4.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/6.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- Start About -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h3 class="mb-3">Mulai sekarang fokus buat produksi dan stock barang kamu, Online Shopmu kita yang manage</h3>
                        <p class="text-muted">
                            Gak usah ribet mikirin gimana cara kembagin Online Shop kamu, mulai sekarang kita yang bakal Manage Online Shop kamu, kamu punya banyak waktu buat hal lain, yang bisa bikin Produk kamu lebih keren lagi !
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-analytics"></i>
                        </div>

                        <h3>Riset dan Strategi</h3>
                        <p class="text-muted">Kita bakal bikin strategi jitu dan riset market buat produk keren kamu</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-analysis"></i>
                        </div>

                        <h3>Target Efektif</h3>
                        <p class="text-muted">Kita bakal berusha bikin produk kamu nyampe ke konsumen yang tepat, dengan kata lain konsumen kamu adalah orang yang tepat buat produk kamu</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-airplay"></i>
                        </div>

                        <h3>Transparan</h3>
                        <p class="text-muted">Buat kamu, kita bakal selalu update perkembangan Online Shop kamu, buat kamu nyaman sama kita.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end About -->

    <!-- Start Features -->
    <section class="section bg-navy" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center title mb-5">
                        {{-- <p class="text-muted text-uppercase fw-normal mb-2">Features</p> --}}
                        <h3 class="mb-3">Masalah Utama kamu</h3>
                        <div class="title-icon position-relative">
                            <div class="position-relative">
                                <i class="uim uim-arrow-circle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="mt-4 mt-lg-0">
                        <h3>Apakah kamu sedang mengalami berbagai masalah ini ?</h3>
                        <p class="text-muted mt-3">Pernah gak sih kamu galau karena ini :</p>

                        <div>
                            <p class="mb-2 text-muted">
                                <span class="uim-icon-info mr-2 align-middle"><i class="uim uim-check-circle"></i></span>Capek jualan harus perang harga
                            </p>
                            <p class="mb-2 text-muted">
                                <span class="uim-icon-info mr-2 align-middle"><i class="uim uim-check-circle"></i></span>Banyak posting tapi gak laku-laku
                            </p>
                            <p class="mb-2 text-muted">
                                <span class="uim-icon-info mr-2 align-middle"><i class="uim uim-check-circle"></i></span>Susah buat pecah telur di Online Shop
                            </p>
                            <p class="text-muted">
                                <span class="uim-icon-info mr-2 align-middle"><i class="uim uim-check-circle"></i></span>Mau bisnis Online tapi gak tau mulai dari mana
                        </div>
                        <div class="mt-4 anim-link">
                            <a href="#" class="text-primary">Coba cek problem lain..</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ml-lg-auto col-sm-8 order-1 order-lg-2">
                    <div>
                        <a href="http://www.freepik.com"><img src="images/SES-1.jpg" alt="" class="img-fluid mx-auto d-block" /></a>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <hr class="my-5" />

            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-8">
                    <div class="features-img mt-4">
                        <a href="http://www.freepik.com"><img src="images/SES-2.jpg" alt="" class="img-fluid mx-auto d-block" /></a>
                    </div>
                </div>

                <div class="col-lg-5 ml-lg-auto">
                    <div class="mt-5 mt-lg-4">
                        <h3>Dapetin trik jitu biar jualan kamu gacor dengan minimalisir boncos</h3>
                        <p class="text-muted mb-2 mt-3">Boncos itu ngeri gaes, kita bantu kamu biar gak boncos terus</p>
                        <p class="text-muted">Strategi dan Trik terbaru dan jitu buat taklukin Pasar kamu</p>
                        <div class="mt-4 anim-link">
                            <a href="#" class="">Cek disini</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End Features -->

     <!-- Start cta section -->
     <section class="py-5 btn-airvisual">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="text-white-50">
                        <h3 class="text-white">Mau bikin Landing Page juga ?</h3>
                        <p class="mb-0 fs-6">Bikin bisnis kamu jadi lebih exclusive dan raih banyak pembeli dengan Landing Page</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mt-4 mt-md-0 text-md-right">
                        <a href="#" class="btn btn-info">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End cta section -->

    <!-- Start Clients -->
    <section class="section mt-5" id="clients">
        <div class="container">
            <div class="row pb-5 align-items-center">
                <div class="col-lg-4 col-md-4">
                    <div class="icons-lg mb-4">
                        <i class="uim uim-comment-message"></i>
                    </div>
{{--                    <h3 class="mb-2">100<sup>+</sup></h3>--}}
                    <h3 class="mb-4">Testimoni</h3>
                    <p class="text-muted mb-sm-0 mb-5 pb-sm-0 pb-4">Beberapa dari member Airvisual yang sudah join.</p>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="client-slider">
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Belajar di air memuaskan shopee saya jd banyak orderan thanks yaa! "</p>
                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Susanti</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Bener-bener worth it buat yang mau belajar dan naikin penjualan."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Fadli</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Harganya terjangkau buat pemula seperti saya."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Ahmad Zain</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Adminnya Ramah dan Friendly banget, jadi cepat ngerti apa yang di kasi tau."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Dendy</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Penjelasannya gak ribet, setiap progres dari Toko saya dijelasin sampai akarnya dan solusinya juga."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Mutiara</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Bikin saya bisa fokus Produksi, sisanya diatur Airians."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Agus Hermawan</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Adminnya sabar banget sama aku yang masih pemula  yang sering banyak nanya, The Best deh."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Indriyani</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" Response nya cepet, setiap progress selalu di update, bikin kita makin percaya."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Ryandi</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">
                                    " Di bimbing sampai bisa dan mampu buat bersaing di Online Shop "
                                </p>
                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1" style="color: white;">Suci</h5>
                                        <span class="text-muted">- Shopee</span>
                                    </div>
                                    <div class="text-muted d-inline-block float-right">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            {{-- <!-- start brand logo -->
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/1.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/3.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/4.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="client-images">
                        <img src="images/clients/6.png" alt="client-img" class="mx-auto img-fluid d-block" />
                    </div>
                </div>
            </div>
            <!-- end row --> --}}
        </div>
        <!-- end container -->
    </section>
    <!-- End Clients -->

    <!-- Start pricing -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center title mb-5">
                        <p class="text-muted text-uppercase fw-normal mb-2">Plan</p>
                        <h3 class="mb-3">Paket Course</h3>
                        <div class="title-icon position-relative">
                            <div class="position-relative">
                                <i class="uim uim-arrow-circle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row pb-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card plan-box text-center p-2">
                        <div class="card-body">
                            <div class="icons-xl pt-4">
                                <i class="uim uim-box"></i>
                            </div>
                            <h4 class="mt-4">Shopee</h4>

                            <div class="plan-features text-muted mt-5">
                                <p><span class="text-info fw-semibold">Iklan</span></p>
                                <p><span class="text-info fw-semibold">Design</span></p>
                                <p><span class="text-info fw-semibold">Copywriting</span></p>
{{--                                <p>Bandwidth : <span class="text-info fw-semibold">500 GB</span></p>--}}
{{--                                <p>Domain : <span class="text-info fw-semibold">No</span></p>--}}
{{--                                <p>Support : <span class="text-info fw-semibold">No</span></p>--}}
                            </div>

                            <div class="mt-5">
                                <h3>
                                    <sup><small>IDR</small></sup>3.000.000
                                </h3>
                                <div class="mt-4 mb-4">
                                    <a href="https://api.whatsapp.com/send?phone=6288229057631&text=Hi,%20Airians!%20👋%0AMau%20Tanya%20Boleh%20?" class="btn btn-info btn-block">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card plan-box text-center p-2">
                        <div class="card-body">
                            <div>
                                <div class="icons-xl pt-4">
                                    <i class="uim uim-box"></i>
                                </div>
                                <h4 class="mt-4">Facebook Ads</h4>

                                <div class="plan-features text-muted mt-5">
                                    <p><span class="text-info fw-semibold">Design</span></p>
                                    <p><span class="text-info fw-semibold">Copywriting</span></p>
                                    <p><span class="text-info fw-semibold">Konsultasi Langsung</span></p>
                                    <p><span class="text-info fw-semibold"></span></p>
                                    <p><span class="text-info fw-semibold"></span></p>
                                </div>

                                <div class="mt-5">
                                    <h3>
                                        <sup><small>IDR</small></sup>500.000
                                    </h3>
                                    <div class="mt-4 mb-4">
                                        <a href="https://api.whatsapp.com/send?phone=6288229057631&text=Hi,%20Airians!%20👋%0AMau%20Tanya%20Boleh%20?" class="btn btn-info btn-block">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card plan-box text-center p-2">
                        <div class="card-body">
                            <div>
                                <div class="icons-xl pt-4">
                                    <i class="uim uim-box"></i>
                                </div>
                                <h4 class="mt-4">Shopee Lite</h4>

                                <div class="plan-features text-muted mt-5">
                                    <p><span class="text-info fw-semibold">Iklan</span></p>
                                    <p><span class="text-info fw-semibold">Optimasi</span></p>
                                    <p><span class="text-info fw-semibold">Konsultasi Langsung</span></p>
                                    <p><span class="text-info fw-semibold"></span></p>
                                    <p><span class="text-info fw-semibold"></span></p>
                                </div>

                                <div class="mt-5">
                                    <h3>
                                        <sup><small>IDR</small></sup>1.000.000
                                    </h3>
                                    <div class="mt-4 mb-4">
                                        <a href="https://api.whatsapp.com/send?phone=6288229057631&text=Hi,%20Airians!%20👋%0AMau%20Tanya%20Boleh%20?" class="btn btn-info btn-block">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end plans row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end pricing -->

    <!-- Start contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card contact-section-card mb-0">
                        <div class="card-body p-md-5">
                            <div class="text-center title mb-5">
                                <p class="text-muted text-uppercase fw-normal mb-2">Contact</p>
                                <h3 class="mb-3">Ada pertanyaan lain ?, Mau nanya Harga ?</h3>
                                <div class="title-icon position-relative">
                                    <div class="position-relative">
                                        <i class="uim uim-arrow-circle-down"></i>
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-12">
                                    <div class="text-center title mb-5">
                                        <a href="https://api.whatsapp.com/send?phone=6288229057631&text=Hi,%20Airians!%20👋%0AMau%20Tanya%20Boleh%20?" class="btn btn-primary btn-lg btn-block my-lg-0 my-2">Hubungi Kami</a>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->
@endsection
