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
                        <h2 class="text-weight-bolder text-white mb-1">Solusi pembayaran lengkap yang dirancang untuk bisnis Anda</h2>
                        {{-- <h2 class="hero-5-title fw-normal mb-4">Kamu bisa Fokus untuk Mengembangkan Bisnismu.</h2> --}}
                        <br>
                        <p class="font-weight-bold text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium quia nesciunt neque error repellat voluptas nobis eveniet laboriosam quam! Rem aut tenetur repellendus numquam vitae recusandae omnis dolorem at debitis!</p>
                        <br>
                        <a href="" class="btn btn-airvisual btn-lg btn-block my-lg-0 my-2 text-white">Daftar Sekarang</a>
                        <a href="https://api.whatsapp.com/send?phone=6288229057631&text=Hi,%20Airians!%20👋%0AMau%20Tanya%20Boleh%20?" class="btn btn-outline-air ml-2">Hubungi AirTeams</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img class="img-fluid img-car" src="images/hero-5-img-2.png" alt="">
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
                        <h3 class="mb-3">A digital web design studio creating modern & engaging online</h3>
                        <p class="text-muted">
                            If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages new common will be more regular than the existing If several is more
                            simple and regular than that of the individual languages new common will be more regular than the existing
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-html5"></i>
                        </div>

                        <h3>Web Designing</h3>
                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more regular than that of the individual</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-repeat"></i>
                        </div>

                        <h3>Programming</h3>
                        <p class="text-muted">To achieve this, it would be necessary to have uniform more common several languages coalesce</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="text-center p-4">
                        <div class="icons-xl mb-3">
                            <i class="uim uim-airplay"></i>
                        </div>

                        <h3>Software Development</h3>
                        <p class="text-muted">For science, music, sport, etc, Europe uses the same vocabulary only differ in their pronunciation.</p>
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
                        <p class="text-muted text-uppercase fw-normal mb-2">Features</p>
                        <h3 class="mb-3">Key features of the product</h3>
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
                        <h3>Improve your Marketing business</h3>
                        <p class="text-muted mt-3">If several languages coalesce, the grammar of the resulting language is more regular.</p>

                        <div>
                            <p class="mb-2 text-muted">
                                <span class="uim-icon-info mr-2 align-middle"><i class="uim uim-check-circle"></i></span>Donec vitae sapien ut
                            </p>
                            <p class="mb-2 text-muted">
                                <span class="uim-icon-info mr-2 align-middle"><i class="uim uim-check-circle"></i></span>In enim justo, rhoncus imperdiet
                            </p>
                            <p class="text-muted">
                                <span class="uim-icon-info mr-2 align-middle"><i class="uim uim-check-circle"></i></span>Maecenas nec odio et
                            </p>
                        </div>
                        <div class="mt-4 anim-link">
                            <a href="#" class="text-primary">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ml-lg-auto col-sm-8 order-1 order-lg-2">
                    <div>
                        <img src="images/features/img-1.jpg" alt="" class="img-fluid mx-auto d-block" />
                    </div>
                </div>
            </div>
            <!-- end row -->

            <hr class="my-5" />

            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-8">
                    <div class="features-img mt-4">
                        <img src="images/features/img-2.jpg" alt="" class="img-fluid mx-auto d-block img-thumbnail" />
                    </div>
                </div>

                <div class="col-lg-5 ml-lg-auto">
                    <div class="mt-5 mt-lg-4">
                        <h3>Improve your Marketing performance</h3>
                        <p class="text-muted mb-2 mt-3">It will be as simple as in fact, it will be Occidental. To an English person, it will seem like simplified</p>
                        <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur velit</p>
                        <div class="mt-4 anim-link">
                            <a href="#" class="">Learn more</a>
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
                    <h3 class="mb-2">2,200<sup>+</sup></h3>
                    <h3 class="mb-4">Satisfied Clients</h3>
                    <p class="text-muted mb-sm-0 mb-5 pb-sm-0 pb-4">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual</p>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="client-slider">
                        <div>
                            <div class="bg-light rounded p-4">
                                <p class="text-muted mb-4">" It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified, If several languages of the resulting language"</p>
                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1">James Vazquez</h5>
                                        <span class="text-muted">- Peyso User</span>
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
                                <p class="text-muted mb-4">" To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages of the resulting language."</p>

                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1">Clara Searcy</h5>
                                        <span class="text-muted">- Peyso User</span>
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
                                    " If several It will be as simple as Occidental; it will be Occidental. To an English person, it will seem like simplified, If several languages of the resulting language "
                                </p>
                                <div class="pt-3">
                                    <div class="d-inline-block">
                                        <h5 class="font-16 mb-1">Alfredo Williams</h5>
                                        <span class="text-muted">- Peyso User</span>
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

    <!-- Start contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card contact-section-card mb-0">
                        <div class="card-body p-md-5">
                            <div class="text-center title mb-5">
                                <p class="text-muted text-uppercase fw-normal mb-2">Contact</p>
                                <h3 class="mb-3">Have any Questions ?</h3>
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


