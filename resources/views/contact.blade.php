@extends('layout.main')

@section('main-section')
    <section class="contact-page-section">
        <div class="container">
            <div class="sec-title">
                <div class="title">Contact Us</div>
                <h2>Let's Get in Touch.</h2>
            </div>
            <div class="inner-container">
                <div class="row clearfix">
                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="POST" action="admin/code.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="name" value="" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="email" name="email" value="" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="subject" value="" placeholder="Subject" required="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="phone" value="" placeholder="Phone" required="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <button type="submit" name="contact_submit" class="theme-btn btn-style-one">Send Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="gmap" style="height: 99vh;position:relative;overflow:hidden">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.5470092119322!2d77.48115304910027!3d28.687847545216034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf22e0248e2e3%3A0x53bb4a945581c9ca!2sB106%2C%20B-Block%2C%20RK%20Puram%2C%20Swaran%20Jayanti%20Puram%2C%20Govindpuram%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201013!5e0!3m2!1sen!2sin!4v1737225688037!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                {{--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.5470092119322!2d77.48115304910027!3d28.687847545216034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf22e0248e2e3%3A0x53bb4a945581c9ca!2sB106%2C%20B-Block%2C%20RK%20Puram%2C%20Swaran%20Jayanti%20Puram%2C%20Govindpuram%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201013!5e0!3m2!1sen!2sin!4v1737225688037!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                 </div> --}}
                             </div> 
                            <!--End Contact Form-->
                        </div>
                    </div>
                    <!--Info Column-->

                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>Contact Info</h2>
                            <ul class="list-info">
                                <div class="list-info-items">
                                    <img src="assets/images/glyphs/globe.gif" alt="">
                                    &nbsp;
                                    <li>
                                        B-106,
                                        R K Puram,
                                        GovindPuram,
                                        Ghaziabad - 201013 (U.P),
                                        India.
                                    </li>
                                </div>
                                <div class="list-info-items">
                                    <img src="assets/images/glyphs/email.gif" alt="">
                                    &nbsp;
                                    <li>bigleadsupport@biglead.in</li>
                                </div>
                                <div class="list-info-items">
                                    <img src="assets/images/glyphs/mobile.gif" alt="">
                                    &nbsp;
                                    <li>+91 - XXXXXXXXXX</li>
                                </div>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow on: </li>
                                <li><a href="https://twitter.com/" target="_blank"><svg class="svg-inline--fa fa-x-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="x-twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg><!-- <i class="fa-brands fa-x-twitter"></i> Font Awesome fontawesome.com --></a></li>
                                <li><a href="https://www.facebook.com/people/" target="_blank"><svg class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></a></li>
                                <li><a href="https://www.linkedin.com/company/" target="_blank"><svg class="svg-inline--fa fa-linkedin" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg><!-- <i class="fa-brands fa-linkedin"></i> Font Awesome fontawesome.com --></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection