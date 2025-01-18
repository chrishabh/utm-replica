
@extends('layout.main')

@section('main-section')

    <section id="hero">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active left">
                    <div id="hero__heading">
                        <div class="bounding">
                            <h1 class="boundingElement"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                Plan, Create And Dessiminate</h1>
                        </div>
                        <div class="blocktext">
                            <div class="bounding">
                                <h2 class="boundingElement"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                    a Digital Experience</h2>
                            </div>
                            <div class="bounding">
                                <h5 class="boundingElement"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                    for all your business needs</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item next left">
                    <div id="hero__heading">
                        <div class="bounding">

                            <h1 class="boundingElement"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                Creative Strategies with </h1>
                        </div>
                        <div class="blocktext">
                            <div class="bounding">

                                <h2 class="boundingElement"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                    Powerful Impact</h2>
                            </div>
                            <div class="bounding">

                                <h5 class="boundingElement"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                    Transforming your business with innovative solutions</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div id="hero__heading">
                        <div class="bounding">

                            <h1 class="boundingElement"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                Planned = Created = Delivered</h1>
                        </div>
                        <div class="blocktext">
                            <div class="bounding">

                                <h2 class="boundingElement"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                    We conceptualize</h2>
                            </div>
                            <div class="bounding">

                                <h5 class="boundingElement"
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                    plans,strategize, add creativity and deliver ROI for your online business</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div id="small_heading">
            <div class="link">
                <a href="contact">
                    <div class="bounding">
                        <div class="boundingElement"
                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <h6>Contact Us &nbsp;
                                <!-- <i class="fa-solid fa-arrow-up-right-from-square"></i> -->
                            </h6>
                            <img src="{{ asset('assets/images/glyphs/goto.gif') }}" alt="home" srcset="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="link">
                <a href="about">
                    <div class="bounding">
                        <div class="boundingElement"
                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <h6>Know More &nbsp;
                                <!-- <i class="fa-solid fa-arrow-up-right-from-square"></i> -->
                            </h6>
                            <img src="{{ asset('assets/images/glyphs/goto.gif') }}" alt="home" srcset="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="hero__footer"
            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">

            <div id="social">
                <div class="link">
                    <a href="https://twitter.com/utm_digital" target="_blank"><svg
                            class="svg-inline--fa fa-x-twitter" aria-hidden="true" focusable="false"
                            data-prefix="fab" data-icon="x-twitter" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                            </path>
                        </svg><!-- <i class="fa-brands fa-x-twitter"></i> Font Awesome fontawesome.com --></a>
                </div>
                <div class="link">
                    <a href="https://www.facebook.com/people/UTM-Digital/100034999825988/" target="_blank"><svg
                            class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false"
                            data-prefix="fab" data-icon="facebook-f" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></a>
                </div>
                <div class="link">
                    <a href="https://www.linkedin.com/company/utm-digital" target="_blank"><svg
                            class="svg-inline--fa fa-linkedin" aria-hidden="true" focusable="false"
                            data-prefix="fab" data-icon="linkedin" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                            </path>
                        </svg><!-- <i class="fa-brands fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                </div>
            </div>

            <div id="scroll">
                <a href="#">
                    <h5>Scroll Down
                        <div id="scroll_arrow">
                            <img src="{{ asset('assets/images/glyphs/scroll.gif') }}" alt="scroll" srcset="">
                        </div>
                    </h5>

                </a>
            </div>

            <div id="arrow">
                <div class="circle">
                    <a href="#">
                        <img src="{{ asset('assets/images/glyphs/arrow-up.gif') }}" alt="home" srcset="">
                    </a>
                </div>
                <div class="circle">
                    <a href="#">
                        <img src="{{ asset('assets/images/glyphs/arrow-down.gif') }}" alt="home"
                            srcset="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.about')

    <div class="cta">
        <div class="left">
            <h3>bigLEAD - We offer a wide range of Digital Marketing Services.</h3>
        </div>
        <div class="right">
            <button class="comic-button"><a href="contact">Contact Us</a></button>
        </div>
    </div>

    @include('partials.services')
    <div class="cta">
        <div class="left">
            <h3>bigLEAD - We offer a wide range of Digital Marketing Services.</h3>
        </div>
        <div class="right">
            <button class="comic-button"><a href="contact">Become Our Client</a></button>
        </div>
    </div>

    {{-- <section id="testimonial">
        <div class="testimonial_header">
            <h1>Testimonial</h1>
            <h4>What People Say About Us</h4>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="testimonial_carousal">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-3110px, 0px, 0px); transition: 0.25s; width: 8294px;">
                    <div class="owl-item cloned" style="width: 1026.72px; margin-right: 10px;">
                        <div class="item">
                            <h5>bigLEAD Agency is my one stop shop for all required digital media services my
                                business promotions. They cater to all of necessary aspects of the digital media
                                with the diversified services. We totally have a great experience with this agency
                                as its digital marketing services. This company has been my favorite choice whenever
                                I need media marketing solutions that meet my needs and budget.</h5>
                            <h4>Sunny</h4>
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1026.72px; margin-right: 10px;">
                        <div class="item">
                            <h5>For several past years our company has been working with bigLEAD agency on our
                                internet marketing campaigns. This platform has developed a lot of solutions for our
                                business that were quite amazing. If I consider the expertise of UTM, I found them
                                just wonderful and trustworthy. The team of UTM has assisted our SEO and other
                                digital marketing platforms. I am very impressed with the quality of the work and
                                solutions provided by UTM.</h5>
                            <h4>Manoj Kumar</h4>
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 1026.72px; margin-right: 10px;">
                        <div class="item">
                            <h5>Outstanding service delivered from their side. My website work was delivered within
                                a week and I started getting promising result.</h5>
                            <h4>Akash Srivastava</h4>
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1026.72px; margin-right: 10px;">
                        <div class="item">
                            <h5>UTM Digital Agency is my one stop shop for all required digital media services my
                                business promotions. They cater to all of necessary aspects of the digital media
                                with the diversified services. We totally have a great experience with this agency
                                as its digital marketing services. This company has been my favorite choice whenever
                                I need media marketing solutions that meet my needs and budget.</h5>
                            <h4>Sunny</h4>
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1026.72px; margin-right: 10px;">
                        <div class="item">
                            <h5>For several past years our company has been working with UTM Digital agency on our
                                internet marketing campaigns. This platform has developed a lot of solutions for our
                                business that were quite amazing. If I consider the expertise of UTM, I found them
                                just wonderful and trustworthy. The team of UTM has assisted our SEO and other
                                digital marketing platforms. I am very impressed with the quality of the work and
                                solutions provided by UTM.</h5>
                            <h4>Manoj Kumar</h4>
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1026.72px; margin-right: 10px;">
                        <div class="item">
                            <h5>Outstanding service delivered from their side. My website work was delivered within
                                a week and I started getting promising result.</h5>
                            <h4>Akash Srivastava</h4>
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button>
                <button type="button" role="presentation" class="owl-next"><span
                        aria-label="Next">›</span></button>
            </div>
            <div class="owl-dots">
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot active"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>
    </section> --}}


    <section id="testimonial-new">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testimonial_header">
                    <h1>Testimonial</h1>
                    <h4>What People Say About Us</h4>
                </div>
            </div>
            
        </div>
         
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div   class="owl-carousel" id="testimonial_carousal">
                        {{-- <div class="owl-stage-outer"> --}}
                            {{-- <div class="owl-stage"> --}}
                                {{-- <div class="owl-item" style="width: 372px;"> --}}
                                    <div class="item">
                                        <div class="testinomial-wrap">
                                            <span class="quoted">
                                               <i class="fa fa-quote-right"></i> 
                                            </span>
                                            <div class="testinomial-text">
                                                <p class="bottom-40">
                                                BigLead transformed our online presence. Their innovative strategies and attention to detail have significantly boosted our customer engagement.
                                                </p>
                                                <h5 class="name-testmonial">
                                                John Smith
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testinomial-wrap">
                                            <span class="quoted">
                                               <i class="fa fa-quote-right"></i> 
                                            </span>
                                            <div class="testinomial-text">
                                                <p class="bottom-40">
                                                Working with BigLead has been a game-changer for our brand. Their creative team exceeded our expectations and delivered outstanding results.                                                </p>
                                                <h5 class="name-testmonial">
                                                Emily Johnson
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testinomial-wrap">
                                            <span class="quoted">
                                               <i class="fa fa-quote-right"></i> 
                                            </span>
                                            <div class="testinomial-text">
                                                <p class="bottom-40">
                                                The expertise at BigLead is unmatched. Their tailored solutions have helped us achieve our business goals seamlessly.                                                </p>
                                                <h5 class="name-testmonial">
                                                Michael Davis
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testinomial-wrap">
                                            <span class="quoted">
                                               <i class="fa fa-quote-right"></i> 
                                            </span>
                                            <div class="testinomial-text">
                                                <p class="bottom-40">
                                                From start to finish, BigLead's team has been professional and supportive. They turned our vision into reality with impressive efficiency.                                                </p>
                                                <h5 class="name-testmonial">
                                                Sophia Martinez
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testinomial-wrap">
                                            <span class="quoted">
                                               <i class="fa fa-quote-right"></i> 
                                            </span>
                                            <div class="testinomial-text">
                                                <p class="bottom-40">
                                                BigLead's innovative approach to digital marketing has set us apart in a competitive market. Highly recommended!                                                </p>
                                                <h5 class="name-testmonial">
                                                James Brown
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testinomial-wrap">
                                            <span class="quoted">
                                               <i class="fa fa-quote-right"></i> 
                                            </span>
                                            <div class="testinomial-text">
                                                <p class="bottom-40">
                                                Thanks to BigLead, we’ve seen measurable growth in our online reach. Their team truly understands the digital space.                                                </p>
                                                <h5 class="name-testmonial">
                                                Olivia Wilson
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                {{-- </div> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
             
        </div>
    </section>
    </div> <!--main wala div-->

@endsection