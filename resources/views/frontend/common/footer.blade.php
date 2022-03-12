@php
    $settings = getSetting();
@endphp
<footer id="rs-footer" class="bg8 blue-bg rs-footer">
    <div class="blue-overlay"></div>
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Address</h4>
                        <p class="contact-desc">
                            {{ $settings->where('slug', 'address')->first()->value }}     
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-phone"></i>
                        <h4 class="contact-title">Phone Number</h4>
                        <p class="contact-desc">
                           {{ $settings->where('slug', 'primary_contact')->first()->value }} 
                           <br>
                           {{ $settings->where('slug', 'secondary_contact')->first()->value }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Email Address</h4>
                        <p class="contact-desc">
                            {{ $settings->where('slug', 'email')->first()->value }}
                            <br>
                            www.iqraeducations.com
                        </p>
                    </div>
                </div>
            </div>					
        </div>
    </div>
    
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-widget">
                        {{-- <img src="{{ url('frontend') }}/images/logo-footer2.png" alt="Footer Logo"> --}}
                        <img src="{{ url('frontend') }}/images/iqra/logo33.png" alt="Footer Logo" style="max-width: 30%">
                        <br>
                        {!! $settings->where('slug', 'mission_primary')->first()->value !!}
                        {{-- <p class="margin-remove">
                            Students can choose their respective subject and join our batches.
                        </p> --}}
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li class="active">
                            <a href="{{ route('welcome') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
                        </li>
                        <li >
                            <a href="{{ route('about') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a>
                        </li>
                        <li>
                            <a href="{{ route('courses.index') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a>
                        </li>                        
                        <li>
                            <a href="{{ route('teachers') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a>
                        </li>
                        <li>
                            <a href="{{ route('registration') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Registration</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">NEWSLETTER</h5>
                    <p>Subscribe to Our Newsletter to Get Latest Updates</p>
                    <form class="news-form">
                        <input type="text" class="form-input" placeholder="Enter Your Email">
                        <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>    
                </ul>
            </div>                                
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>© 2021 <a href="https://iqraeducations.com">IQRA EDUCATION</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>