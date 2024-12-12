@extends('front.layouts.main')

@section('main-container')

{{-- <style>
    section.home4 .work4 {
        display: flex;
        align-items: center;
    }

    section.home4 .loty i {
        /* margin-right: 24px; */
        font-size: 23px;
        color: #3d3d97;
    }

    section.home4 .ave h2 {
        font-weight: 400;
        color: #ABABAB;
        font-size: 20px;
        line-height: 28px;
        font-family: "Kaushan Script", cursive;
        font-optical-sizing: auto;
        max-width: 100%;
        margin-top: 0rem;
    }


    section.home4 .loty {
        float: left;
        background: #fff;
        width: 64px;
        height: 64px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        border-radius: 50%;
        border: 2px solid #3d3d97;
    }

    section.home4 .loty:hover {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border: 2px solid #fba61f;
    }

    section.home4 .loty:hover>i {

        color: #fba61f;
    }

    section.home4 .boty {
        align-items: center;
        background: #fff;
        background-size: cover;
        padding: 0 0 30px 0;
    }
</style> --}}

        <!-- End Header -->
        <!-- ======= services ======= -->
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> {!! $service_detail_data->title !!}</h1>
                    </div>
                </div>


            </div>

        </section>
        <!-- End services -->


        <section class="services1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 cycle1">
                        <h3>
                            <span>{!! $service_detail_data->title !!}</span>
                            <div class="cycle"></div>

                        </h3>
                        <div class="cycle2">


                            {{-- <h6>Enhance Customer Satisfaction and Improve Operational Efficiency </h6> --}}
                            <p>{!! $service_detail_data->description !!}</p>


                        </div>
                    </div>
                </div>


            </div>

        </section>

        <!-- data-aos="fade-right" -->

        <section class="home4" id="Contact">
            <div class="container">
                <div class="row work4">
                    <div class="col-lg-5 work ">
                        <img src="../front_assets/img/bg-video1.png" alt="contact img">
                    </div>
                    <div class="col-lg-7 work1 ">
                        <div class="work2">
                            {{-- <h4>WANT TO HIRE US ?</h4> --}}
                            <h2>Want to work with us?</h2>

                            {{-- <form>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="First name *">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Last name *">
                                    </div>

                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Your mail *">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Phone number *">
                                    </div>

                                    <div class="col-lg-10">
                                        <textarea name="your-message" cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Message..."></textarea>
                                        <button type="submit" class="wpcf7-submit"><i
                                                class="fa-solid fa-arrow-right got1"></i>Send
                                            now</button>
                                    </div>
                                </div>
                            </form> --}}

                            <form action="{{ url('email_send') }}" method="POST">
                                @csrf <!-- CSRF protection -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="first_name" placeholder="First name *">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last name *">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" name="email" placeholder="Your mail *">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="phone_number" placeholder="Phone number *">
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <h3>Book a meeting</h3>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{-- <label for="datetime">Select Date and Time *</label> --}}
                                            <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
                                        </div>
                                    </div>

                                    {{-- <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            var now = new Date();
                                            now.setDate(now.getDate() + 0); // Add one day to the current date

                                            var year = now.getFullYear();
                                            var month = ('0' + (now.getMonth() + 1)).slice(-2); // Adding leading zero if needed
                                            var day = ('0' + now.getDate()).slice(-2); // Adding leading zero if needed
                                            var hour = ('0' + now.getHours()).slice(-2); // Adding leading zero if needed
                                            var minute = ('0' + now.getMinutes()).slice(-2); // Adding leading zero if needed

                                            var minDateTime = year + '-' + month + '-' + day + 'T' + hour + ':' + minute;

                                            document.getElementById('datetime').min = minDateTime;
                                        });
                                    </script> --}}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_name" placeholder="Company Name*" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message..."></textarea>
                                        <button type="submit" class="wpcf7-submit"><i class="fa-solid fa-arrow-right got1"></i>Send now</button>
                                    </div>
                                </div>
                            </form>

                        @if(session('success'))
                            <div id="successMessage" class="popup">
                                  {{ session('success') }}
                            </div>

                            <style>
                                .popup {
                                    position: fixed;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    background-color: #fff;
                                    padding: 20px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
                                    z-index: 9999;
                                    animation: fadeOut 4s forwards;
                                }

                                @keyframes fadeOut {
                                    0% {
                                        opacity: 1;
                                    }
                                    100% {
                                        opacity: 0;
                                    }
                                }
                                </style>
                         @endif

                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-lg-1">
          </div> -->
                    <div class="col-lg-9 priorities">
                        <img src="../front_assets/img/phone-image1.png" alt="">
                        <p>At Xionex, our priority is to streamline your business operations, reduce costs, and drive
                            growth. With
                            our tailored Business Process Outsourcing (BPO) solutions and dedicated team of experts, we
                            are committed
                            to delivering exceptional results that exceed your expectations. Trust us to handle your
                            business
                            processes efficiently and effectively, allowing you to focus on what matters most – growing
                            your business
                            and achieving your goals.</p>
                        <div class="elementor-spacer-inner"></div>
                    </div>
                    <div class="col-lg-3 priorities1">
                        <p> Help Desk 24/7
                        </p>
                        <h3>
                           @foreach ($home_footer as $footer)
                           <h3>{{ $footer->number }}</h3>
                           <h3>{{ $footer->email }}</h3>

                           @endforeach
                    </div>
                </div>
            </div>

        </section>

    </div>


@endsection
