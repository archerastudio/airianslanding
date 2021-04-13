<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AirVisual Creative</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />


    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5Z23S0MJN4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5Z23S0MJN4');
    </script>
    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />

    <!-- tinyslider -->
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />

    <!-- Custom  scss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="58">
    <!--Navbar Start-->
     <nav class="navbar navbar-expand-lg navbar-navy fixed-top sticky" id="navbar">
         <div class="container">
             <!-- LOGO -->
             <a class="logo text-uppercase" href="/">
                     <img src="images/logo-light.png" alt="" class="logo-light" height="30" />
                     <img src="images/logo-dark.png" alt="" class="logo-dark" height="30" />
                 </a>

             <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="mdi mdi-menu"></i>
                 </a>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <ul class="navbar-nav ml-auto navbar-center mt-lg-0 mt-2" id="navbar-navlist">
                     <!-- <li class="nav-item">
                         <a href="#home" class="nav-link" id="scrollElement">Home</a>
                     </li> -->
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Layanan
                         </a>
                         <ul class="dropdown-custom dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#" style="font-weight: 600;">Marketplace Management <p style="font-size: 15px; font-weight: 400;">Percayakan pengelolaan Marketplace kamu, <br>dan kami akan tingatkan Traffic Penjualan Tokomu</p></a></li>
                           <li><a class="dropdown-item" href="#" style="font-weight: 600;">Social Media Content Creator <p style="font-size: 15px; font-weight: 400;">Percayakan pengelolaan Marketplace kamu, <br>dan kami akan tingatkan Traffic Penjualan Tokomu</p></a></li>
                           <li><a class="dropdown-item" href="#" style="font-weight: 600;">Video dan Design <p style="font-size: 15px; font-weight: 400;">Percayakan pengelolaan Marketplace kamu, <br>dan kami akan tingatkan Traffic Penjualan Tokomu</p></a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="#">
                            <i class="uim uim-download-alt"></i>  Download Pricelist</a></li>
                         </ul>
                       </li>
                     <li class="nav-item">
                         <a href="/about" class="nav-link">Tentang Kami</a>
                     </li>
                     <!-- <li class="nav-item">
                         <a href="#features" class="nav-link">Features</a>
                     </li>
                     <li class="nav-item">
                         <a href="#clients" class="nav-link">Clients</a>
                     </li> -->
                     <li class="nav-item">
                         <a href="/pricing" class="nav-link">Paket Harga</a>
                     </li>
                     <!-- <li class="nav-item">
                         <a href="" class="nav-link">Kontak</a>
                     </li> -->
                     <li class="nav-item">
                         <a href="" class="nav-link">F&Q</a>
                     </li>
                     <li class="nav-item">
                         <a href="https://course.airvisualcreative.com" class="nav-link">Course <span class="badge rounded-pill bg-success">Coming Soon</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="https://course.airvisualcreative.com" class="nav-link">Blog</a>
                    </li>
                 </ul>
                 <a href="#" class="btn btn-airvisual btn-info btn-sm navbar-btn my-lg-0 my-2">Sign in</a>
             </div>
         </div>
     </nav>
     <!-- Navbar End -->

    @yield('Home')
    @yield('Pricing')
    @yield('About')

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212F59" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,74.7C384,64,480,64,576,80C672,96,768,128,864,128C960,128,1056,96,1152,74.7C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    <!-- start footer -->
    <footer class="footer bg-dark text-white-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="d-block mb-3">
                        <img src="images/logo-light.png" alt="" height="40" />
                    </a>
                    <p>Pagarsih 245, Bandung <br> West Java, 40231</p>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="mt-4 mt-lg-0">
                        <h5 class="mb-4 font-18 text-white">Links</h5>
                        <ul class="list-unstyled footer-list-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="mt-4 mt-lg-0">
                        <h5 class="mb-4 font-18 text-white">Resources</h5>
                        <ul class="list-unstyled footer-list-menu">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mt-4 mt-lg-0">
                        <h5 class="mb-4 font-18 text-white">Social</h5>
                        <ul class="list-inline social-icons-list">
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/airvisualcreative/"><i class="mdi mdi-instagram"></i></a>
                            </li>
                            <!-- <li class="list-inline-item">
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <!-- Start footer-alt -->
    <section class="footer-alt py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-white-50">
                        <p class="mb-0">2020 © AirVisual. </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end footer-alt -->

{{-- <!-- Script Whatsapp -->
<script type="text/javascript" src="https://cek.jasa-design.web.id/contactform-wa/widget/?kode_area=62&nomor_whatsapp=88229057631&nama_admin=Airians Admin&pesan_salam=Hi, Airians !&posisi_widget=kanan"></script>
<!-- Script Whatsapp --> --}}

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6071bb1df7ce182709390a27/1f2u45rm5';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->

{{-- <script type='text/javascript'>
$(document).ready(function() {$(&#39;img#closed&#39;).click(function(){$(&#39;#bl_banner&#39;).hide(90);});});
</script>
<div id='fixedban' style='width:100%;margin:auto;text-align:center;float:none;overflow:hidden;display:scroll;position:fixed;bottom:0;z-index:999;-webkit-transform:translateZ(0);'>
<div><a id='close-fixedban' onclick='document.getElementById(&apos;fixedban&apos;).style.display = &apos;none&apos;;' style='cursor:pointer;'><img alt='close' src='http://1.bp.blogspot.com/-_A83iDM6JYc/VhtxROLILrI/AAAAAAAADK4/aM4ikIA6aqI/s1600/btn_close.gif' title='close button' style='vertical-align:middle;'/></a></div>
<div style='text-align:center;display:block;max-width:100%;height:auto;overflow:hidden;margin:auto'>
<a href="https://my.domainesia.com/ref.php?u=14798" target="_blank"><img src="https://dnva.me/25f5a" alt="www.domainesia.com"></a>
</div>
</div> --}}

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- unicons -->
<script src="https://unicons.iconscout.com/release/v2.1.11/script/monochrome/bundle.js"></script>

 <!-- testi-slider -->
 <script src="{{ asset('js/tiny-slider.js') }}"></script>

<!-- app js -->
<script src="{{ asset('js/app.js') }}"></script>
{{-- <a href="#" class="ignielToTop"></a> --}}
</body>
</html>
