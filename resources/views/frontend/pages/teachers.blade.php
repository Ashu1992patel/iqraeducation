@extends('frontend.master')
@section('title', 'Our Team')
@section('content')

<!-- Breadcrumbs Start -->
{{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">OUR TEACHERS</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Our Teachers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Breadcrumbs End -->

<!-- Team Start -->
<div id="rs-team-2" class="rs-team-2 team-page sec-spacer">
    <div class="container">
        <div class="gridFilter">
            <button class="active" data-filter="*">ALL</button>
            <button data-filter=".filter1">SCIENCE</button>
            <button data-filter=".filter2">BUSINESS STUDIES</button>
            <button data-filter=".filter3">ARTS</button>
            <button data-filter=".filter4">DIPLOMA</button>
        </div>
        <div class="row grid">
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter1">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/1.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Md. Abdur Rahid</h3></a>
                        <span class="designation">Science</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter2">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/2.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Mahabub Alam</h3></a>
                        <span class="designation">Business Studies</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter3">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/3.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Jesika Helan</h3></a>
                        <span class="designation">Arts</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter4">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/4.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Deluar Khan</h3></a>
                        <span class="designation">Diploma</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter1">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/5.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Alex Hilfisher</h3></a>
                        <span class="designation">Science</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter2">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/6.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Naila Naime</h3></a>
                        <span class="designation">Business Studies</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter3">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/7.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Shoykot Hassan</h3></a>
                        <span class="designation">Arts</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter4">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/8.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Eyamin Hossain</h3></a>
                        <span class="designation">Diploma</span>
                    </div>
                </div>						
            </div>	
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter1">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/9.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Nuhan Freddy</h3></a>
                        <span class="designation">Science</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter2">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/10.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Istiak Hossain</h3></a>
                        <span class="designation">Business Studies</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter3">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/11.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Rhusda D’suza</h3></a>
                        <span class="designation">Arts</span>
                    </div>
                </div>						
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 grid-item filter4">
                <div class="team-item">
                    <div class="team-img">
                        <a href="#"><img src="{{ url('frontend') }}/images/teachers/12.jpg" alt="" /></a>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-body">
                        <a href="teachers-single.html"><h3 class="name">Masud Rana</h3></a>
                        <span class="designation">Diploma</span>
                    </div>
                </div>						
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Team End -->

@endsection