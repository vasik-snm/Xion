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

    <!-- ======= carousel ======= -->
    <header>
        <div class="owl-carousel owl-theme">
            @foreach ($home_banner as  $user)

          <div class="item">
            <img src="{{ url('images/' . $user->image) }}" alt="Image not found" />
            <div class="cover">
              <div class="container">
                <div class="header-content">
                  <div class="line"></div>
                  <!-- <h2>Teimagine Digital Experience with</h2> -->
                  <h1>{{ $user->title }}</h1>
                  <!-- <h4>
                    We help entrepreneurs, start-ups and enterprises shape their
                    ideas into products
                  </h4> -->
                </div>
              </div>
            </div>
          </div>
          @endforeach

          {{-- <div class="item">
            <img src="{{ url('front_assets/img/pexels-tima-miroshnichenko-6914645.jpg') }}" alt="images not found" />
            <div class="cover">
              <div class="container">
                <div class="header-content">
                  <div class="line animated bounceInLeft"></div>
                  <!-- <h2>Reimagine Digital Experience with</h2> -->
                  <h1> "Transform Your Business with Expert BPO Solutions"</h1>
                  <!-- <h4>
                    We help entrepreneurs, start-ups and enterprises shape their
                    ideas into products
                  </h4> -->
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="https://cdn.pixabay.com/photo/2017/05/04/16/37/meeting-2284501_960_720.jpg"
              alt="images not found" />
            <div class="cover">
              <div class="container">
                <div class="header-content">
                  <div class="line animated bounceInLeft"></div>
                  <!-- <h2>Peimagine Digital Experience with</h2> -->
                  <h1>"Streamline Operations, Reduce Costs, and Drive Growth"</h1>
                  <!-- <h4>
                    We help entrepreneurs, start-ups and enterprises shape their
                    ideas into products
                  </h4> -->
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </header>
      <!-- End carousel -->

      <!-- data-aos="fade-right" -->
      {{-- <section class="home1" id="About">

        <div class="container">
          <div class="row fotrp">
            <div class="col-lg-6 sector" data-aos="fade-right">
              <h6>WHO WE ARE</h6>
              <h4>XIONEX</h4>
              <p>
                Unlock the full potential of your business by embracing the power of expert Business Process Outsourcing
                (BPO) solutions. Our tailored approach to BPO services is designed to revolutionize the way you operate,
                helping you streamline processes, optimize efficiency, and propel your growth trajectory.
              </p>
              <p>
                At Xionex, we understand that every business is unique, which is why we offer customized BPO solutions
                tailored to your specific needs and objectives. Whether you're looking to enhance customer support,
                streamline back-office operations, or drive cost savings, our team of BPO experts is here to guide you
                every step of the way.
              </p>
              <p>
                By partnering with us, you gain access to a wealth of industry expertise, cutting-edge technology, and a
                dedicated team committed to delivering exceptional results. From data entry and document processing to IT
                outsourcing and beyond, we leverage our extensive experience and resources to drive measurable value for
                your business.
              </p>

              <p>
                Experience the difference that expert BPO solutions can make in transforming your business operations. Let
                us handle the day-to-day tasks so you can focus on what matters most – driving innovation, fostering
                growth, and achieving your business goals.
              </p>
              <p>Ready to take your business to the next level? Get started today with Xionex and discover the

                transformative power of expert BPO solutions</p>
            </div>
            <div class="col-lg-6 sector0" data-aos="fade-right">
              <img src="{{ url('front_assets/img/team-details-shape-1.png')}}" alt="" class="img5 rotating">
              <img src="{{ url('front_assets/img/658ad03a7d7b4.png')}}" alt="" class="img1">
              <img src="{{ url('front_assets/img/658ad03a7d7b41.png')}}" alt="" class="img2">
              <img src="{{ url('front_assets/img/658ad03a7d7b42.png')}}" alt="" class="img3">
              <img src="{{ url('front_assets/img/shape-dots.svg')}}" alt="" class="img4 rotating">
            </div>
          </div>
        </div>
      </section> --}}
      {{-- Backend to Frontend data fatch --}}
      <section class="home1" id="About">
        <div class="container">
            <div class="row fotrp">
                @foreach($home_about as $about)
                <div class="col-lg-6 sector" data-aos="fade-right">
                    <h6>WHO WE ARE</h6>
                    <h4>XION</h4>
                    <p>{!! $about->description !!}</p>
                </div>
                <div class="col-lg-6 sector0" data-aos="fade-right">
                    <img src="{{ url('front_assets/img/team-details-shape-1.png')}}" alt="" class="img5 rotating">
                    <img src="{{ url('images/' . $about->image1) }}" alt="" class="img1">
                    <img src="{{ url('images/' . $about->image2) }}" alt="" class="img2">
                    <img src="{{ url('images/' . $about->image3) }}" alt="" class="img3">
                    <img src="{{ url('front_assets/img/shape-dots.svg')}}" alt="" class="img4 rotating">
                </div>
                @endforeach
            </div>
        </div>
    </section>


{{-- Backend to Frontend data fatch --}}
      <section class="home2">

        <div class="container">
          <div class="row">
            <div class="col-lg-12 box3">


              <h6>WHAT WE DO</h6>
              <h4>XION BPO Services</h4>

            </div>


            @foreach ($home_service as $user)
            <div class="col-lg-4" data-aos="fade-up">
             <a href="{{ url('service_detail/'.$user->id) }}"><div class="box">


                <div class="icn">
                  <i class="fa-solid fa-briefcase"></i>
                </div>

                <h4>{!! $user->title !!}</h4>
                <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p> -->
              </div></a>
            </div>
            @endforeach

            {{-- <div class="col-lg-4" data-aos="fade-up">
              <a href="Services2.html"> <div class="box">
                <div class="icn">
                  <i class="fa-solid fa-rectangle-list"></i>
                </div>

                <h4>Data Entry and Management</h4>
                <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p> -->
              </div></a>
            </div>
            <div class="col-lg-4" data-aos="fade-up">
              <a href="Services3.html"> <div class="box">
                <div class="icn">
                  <i class="fa-solid fa-chart-simple"></i>
                </div>

                <h4>Finance and Accounting Outsourcing</h4>
                <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p> -->
              </div></a>
            </div>


            <div class="col-lg-4" data-aos="fade-up">
              <a href="Services4.html">  <div class="box">
                <div class="icn">
                  <i class="fa-solid fa-binoculars"></i>
                </div>

                <h4>Back-Office Operations Outsourcing</h4>
                <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p> -->
              </div></a>
            </div>

            <div class="col-lg-4" data-aos="fade-up">
              <a href="Services5.html">   <div class="box">
                <div class="icn">
                  <i class="fa-solid fa-bolt"></i>
                </div>

                <h4>Quality Assurance and Monitoring</h4>
                <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p> -->
              </div></a>
            </div>

            <div class="col-lg-4" data-aos="fade-up">
              <a href="Services6.html"><div class="box">
                <div class="icn">
                  <i class="fa-solid fa-calendar-week"></i>
                </div>

                <h4>Healthcare Outsourcing Services</h4>
                <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                  non provident</p> -->
              </div></a>
            </div> --}}
          </div>
        </div>
      </section>

      {{-- <section class="home3" id="Blog">

        <div class="container">
          <div class="row" data-aos="zoom-in-up">
            <div class="col-lg-12 makes">
              <h3>What makes us different?</h3>
            </div>
            <div class="col-lg-3 disting">
              <div class="disting1">
                <svg xmlns="http://www.w3.org/2000/svg" width="0.8em" height="1em" viewBox="0 0 384 480">
                  <path fill="currentColor"
                    d="M341 5q18 0 30.5 12.5T384 48v276q0 23-19 35L192 475L19 359Q0 347 0 324V48q0-18 12.5-30.5T43 5zM149 325l192-192l-30-30l-162 162l-76-76l-30 30z" />
                </svg>
                <h3> Industry Expertise</h3>
                <p>We understand the unique challenges and requirements of different industries, allowing us to tailor our
                  BPO solutions to meet the specific needs of our clients.</p>

              </div>

            </div>
            <div class="col-lg-3 disting">
              <div class="disting1">
                <i class="fa-solid fa-hand-holding-heart"></i>
                <h3> Customized Solutions</h3>
                <p>We believe that one size does not fit all when it comes to BPO services. That's why we offer customized
                  solutions tailored to the individual needs and objectives of each client.
                </p>

              </div>

            </div>
            <div class="col-lg-3 disting">
              <div class="disting1">
                <i class="fas fa-hands-helping"></i>
                <h3> Quality Assurance</h3>
                <p>Quality is at the forefront of everything we do at Xionex We have stringent quality assurance measures
                  in place to ensure that our BPO services consistently meet the highest standards.</p>

              </div>

            </div>
            <div class="col-lg-3 disting">
              <div class="disting1">
                <i class="fa-regular fa-lightbulb"></i>
                <h3> Client-Centric Approach</h3>
                <p>At Xionex, our clients are our top priority. We are committed to building strong, long-lasting
                  relationships based on trust, transparency, and mutual success.</p>

              </div>

            </div>
          </div>
        </div>
      </section> --}}
{{--BLOG Section Backend to Frontend data fatch --}}

{{-- <section class="home3" id="Blog">
    <div class="container">
        <div class="row" data-aos="zoom-in-up">
            <div class="col-lg-12 makes">
                <h3>What makes us different?</h3>
            </div>
            @foreach ($home_blog as $blog)
            <div class="col-lg-3 disting">
                <div class="disting1">
                    <!-- Replace the below SVG or Font Awesome icons with the appropriate icons from your data -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="0.8em" height="1em" viewBox="0 0 384 480">
                        <path fill="currentColor" d="M341 5q18 0 30.5 12.5T384 48v276q0 23-19 35L192 475L19 359Q0 347 0 324V48q0-18 12.5-30.5T43 5zM149 325l192-192l-30-30l-162 162l-76-76l-30 30z" />
                    </svg>
                    <!-- Or -->
                    <!-- <i class="fa-solid fa-hand-holding-heart"></i> -->
                    <!-- End of SVG or Font Awesome icons -->

                    <!-- Display dynamic content -->
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}
<section class="home3" id="Blog">
    <div class="container">
        <div class="row" data-aos="zoom-in-up">
            <div class="col-lg-12 makes">
                <h3>What makes us different?</h3>
            </div>
            @foreach ($home_blog as $blog)
                <div class="col-lg-3 disting">
                    <div class="disting1">
                        <!-- Use appropriate icon based on blog ID -->
                        @switch($blog->id)
                            @case(1)
                                <svg xmlns="http://www.w3.org/2000/svg" width="0.8em" height="1em" viewBox="0 0 384 480">
                                    <path fill="currentColor" d="M341 5q18 0 30.5 12.5T384 48v276q0 23-19 35L192 475L19 359Q0 347 0 324V48q0-18 12.5-30.5T43 5zM149 325l192-192l-30-30l-162 162l-76-76l-30 30z" />
                                </svg>
                                @break
                            @case(2)
                                <i class="fa-solid fa-hand-holding-heart"></i>
                                @break
                            @case(3)
                                <i class="fas fa-hands-helping"></i>
                                @break
                            @case(4)
                                <i class="fa-regular fa-lightbulb"></i>
                                @break
                            @default
                                <!-- Default icon or handle other cases -->
                        @endswitch

                        <!-- Display dynamic content -->
                        <h3>{{ $blog->title }}</h3>
                        <p>{{ $blog->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{--CONTACT-US Section Backend to Frontend data fatch --}}

      <section class="home4" id="Contact">
        <div class="container">
          <div class="row work4">
            <div class="col-lg-5 work ">
              <img src="{{ url('./front_assets/img/bg-video1.png')}}" alt="">
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
                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                        aria-invalid="false" placeholder="Message..."></textarea>
                      <button type="submit" class="wpcf7-submit"><i class="fa-solid fa-arrow-right got1"></i>Send
                        now</button>
                    </div>
                  </div>
                </form> --}}
                {{-- Email send  --}}
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
              <img src="{{ url('../front_assets/img/phone-image1.png')}}" alt="">
              <p>At Xion, our priority is to streamline your business operations, reduce costs, and drive growth. With
                our tailored Business Process Outsourcing (BPO) solutions and dedicated team of experts, we are committed
                to delivering exceptional results that exceed your expectations. Trust us to handle your business
                processes efficiently and effectively, allowing you to focus on what matters most – growing your business
                and achieving your goals.</p>
              <div class="elementor-spacer-inner"></div>
            </div>
            <div class="col-lg-3 priorities1">
              <p> Help Desk 24/7
              </p>
              <h3>
                @foreach ($home_footer as $footer)
                {{-- (UK) +44 20 3970 4971 --}}
                {{ $footer->number }}
              </h3>
              <h3>
                {{-- (US) +1 315 618 7898 --}}
                {{ $footer->email }}
            </h3>
              @endforeach
            </div>
          </div>
        </div>

      </section>

    </div>
@endsection
