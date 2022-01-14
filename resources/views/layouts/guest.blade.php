<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
        <link rel="manifest" href="assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="assets/css/theme.css" rel="stylesheet" />

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="/"><span class="text-light fs-2 fw-bold ms-2"><img src="{{asset('assets/img/gallery/NOTAP.PNG')}}" width="100" height="100" alt="LOGO"></span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                <li class="nav-item px-2"><a href="{{route('login')}}" class="nav-link fw-bold">LOGIN</a></li>
                <li class="nav-item px-2"><a href="{{route('register')}}" class="nav-link fw-bold">REGISTER</a></li>
                </ul>
                <form class="d-flex"><a class="text-primary" href="#!">
                    <svg class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg></a>
                <div class="ms-4 text-light fw-bold">+234 7067 317 819 </div>
                </form>
            </div>
            </div>
        </nav>
            {{ $slot }}

            <section class="bg-black py-8 pt-0" id="store">
                <div class="bg-holder" style="background-image:url(assets/img/gallery/side.png);background-position:left bottom;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="container-lg">
                <div class="row flex-center">
                    <div class="col-6 order-md-0 text-center text-md-start"></div>
                    <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start">
                    <!---div class="col-4 position-relative ms-auto py-5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div---->
                    <div class="carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row h-100">
                            <div class="col-12">
                                <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase pt-5">Tip of the Week</h5>
                                <p class="my-4 pe-xl-5" style="color:#fffff9">You shouldn’t put a laptop close to appliances that generate a strong magnetic field, such as televisions, large speakers and even some high-tech refrigerators. You should even avoid putting your cellphone on top of your laptop while both are on.</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>

            <section class="py-0 pt-7" id="contact">
                <div class="container">
                    <div class="border-bottom border-700"></div>
                        <div class="row flex-center my-3">
                            <div class="col-md-12 order-1 order-md-0">
                            <p class="my-2 text-800 text-center"> &COPY;
                                Designed by ;<a class="text-500" href="https://artisankonect.com/" target="_blank">DevTeams </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ===========================================-->
            </main>
        </div>
        

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="vendors/feather-icons/feather.min.js"></script>
        <script>
        feather.replace();
        </script>
        <script src="assets/js/theme.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
    </body>
</html>
