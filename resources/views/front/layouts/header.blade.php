<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    {{-- <link rel="stylesheet" href="front_assets/css/home.css" /> --}}
    {{-- <link rel="stylesheet" href="front_assets/css/media.css"> --}}
    <!--  img link -->
    <link rel="shorcut icon" href="front_assets/img/XIONEX.png">
    <!--  google font family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('front_assets/css/media.css') }}" />
    <link rel="stylesheet" href="{{ url('front_assets/css/home.css') }}" />


    <link
        href="https://fonts.googleapis.com/css2?family=Annapurna+SIL:wght@400;700&family=Italianno&family=Kaushan+Script&display=swap"
        rel="stylesheet">


    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Sedan:ital@0;1&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Jersey+10&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Jersey+10&family=Permanent+Marker&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- codpn link -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />

    <!-- Animate Div / Element On Scroll link  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-PqK2XN7mfRnNkGaTE1WLG0bPx12bwQZwjfLDVr3ZOTiYnY56DWo+ipFjk8xJy+7J/uyyLDC3RUEpKnuQNy3J+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>XION</title>
</head>

<body>

    <div class="circle-cursor circle-cursor--inner"></div>
    <div class="circle-cursor circle-cursor--outer"></div>
    <!-- ======= Header ======= -->
    <div class="background">

        <header class="home">
            <div class="colt1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 colf1">
                            <div class="colf">
                                <!-- <i class="fa-brands fa-facebook-f"></i> -->
                                <i class="fa-brands fa-linkedin-in"></i>
                                <!-- <i class="fa-brands fa-instagram"></i> -->
                            </div>
                        </div>

                        <div class="col-lg-6 colf2">
                            <div class="col3">
                                <i class="fa-solid fa-envelope"></i>
                                info@xionexbpo.com
                            </div>
                            <div class="col4">
                                <i class="fa-solid fa-phone"></i>
                                +91 88490 40599
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('front_assets/img/XION.png') }}" alt="">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#About">About Us <span class="sr-only">(current)</span></a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Our Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="Services1.html">Customer Support Outsourcing</a>
                  <a class="dropdown-item" href="Services2.html">Data Entry and Management</a>
                  <a class="dropdown-item" href="Services3.html">Finance and Accounting Outsourcing</a>
                  <a class="dropdown-item" href="Services4.html">Back-Office Operations Outsourcing </a>
                  <a class="dropdown-item" href="Services5.html">Quality Assurance and Monitoring</a>
                  <a class="dropdown-item" href="Services6.html">Healthcare Outsourcing Services</a>
                </div> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Our Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($header_service_data as $header_service)
                                        <a class="dropdown-item"
                                            href="{{ url('/service_detail', ['id' => $header_service->id]) }}">{{ $header_service->title }}</a>
                                    @endforeach
                                </div>
                            </li>
                            </li>
                            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Careers <span class="sr-only">(current)</span></a>
              </li> -->

                            <li class="nav-item active">
                                <a class="nav-link" href="#Blog">Blog <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us <span
                                        class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
                    </div>
                </nav>
            </div>
        </header>
        <!-- End Header -->
