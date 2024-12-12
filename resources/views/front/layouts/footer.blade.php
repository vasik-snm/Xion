<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 avenue">
                <img src="../front_assets/img/XIONEX.png" alt="footer_image">
                <div class="avenue1">
                    <i class="fa-solid fa-location-dot"></i>
                    @foreach ($home_footer as $footer)
                    <h5>
                        {{-- 302, 3Rd Floor Baleshwar Avenue Opp. Rajpath club, S.G.Highway Ahmedabad 380054 --}}
                        {{ $footer->address }}
                    </h5>
                    @endforeach
                </div>
                @foreach ($home_footer as $footer)
                <h3>
                    <i class="fa-solid fa-phone"></i>
                    {{-- (UK) +44 20 3970 4971 --}}
                    {{ $footer->number }}
                </h3>
                <h3>
                    <i class="fa-solid fa-envelope"></i>
                    {{-- (US) +1 315 618 7898 --}}
                    {{ $footer->email }}
                </h3>
                @endforeach
            </div>
            <div class="col-lg-4">
                <div class="ftor1">
                    <h3>Links</h3>
                    <div class="ftor"></div>
                </div>
                <div class="floor">
                    <ul>
                        <a href="#">
                            <li><i class="fa-solid fa-caret-right"></i>Home</li>
                        </a>
                        <a href="#">
                            <li><i class="fa-solid fa-caret-right"></i>Careers</li>
                        </a>
                        <a href="#">
                            <li><i class="fa-solid fa-caret-right"></i>Blog</li>
                        </a>
                    </ul>
                    <ul>
                        <a href="#">
                            <li><i class="fa-solid fa-caret-right"></i>About</li>
                        </a>
                        <a href="#">
                            <li><i class="fa-solid fa-caret-right"></i>Our Team</li>
                        </a>
                        <a href="#">
                            <li><i class="fa-solid fa-caret-right"></i>Contact</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ftor1">
                    <h3>Newsletter</h3>
                    <div class="ftor"></div>
                </div>
                <div class="send">
                    <p>Subscribe to our newsletter to get updates</p>
                    <div class="send1">
                        @foreach ($home_footer as $footer)
                        <!-- <a href=""> <i class="fa-brands fa-facebook-f"></i></a> -->
                        <a href="{{ $footer->linkedin }}"> <i class="fa-brands fa-linkedin-in"></i></a>
                        <!-- <a href=""> <i class="fa-brands fa-instagram"></i></a> -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="footer1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 rights">
                    2024 © All rights reserved by <a href="Privacy-Policy.html"><span>XION BPO SERVICES</span> | <span>Privacy Policy</span></a>
                    <p>Design & Developed By <a href="https://snmtechcraftinnovation.com/"><span> snmtechcraftinnovation.com</span></a></p>
                </div>
            </div>
        </div>
    </section>
</footer>




<button class="back-to-top" type="button"></button>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- partial -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<!-- Animate Div / Element On Scroll link  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
{{-- <script src="fort/js/script.js"> --}}
<script src="{{ url('front_assets/js/script.js') }}"> </script>

<!-- Animate // link  -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
</body>
</html>
