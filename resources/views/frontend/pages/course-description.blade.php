@extends('frontend.master')
@section('title', 'Course Description')
@section('content')

    <!-- Breadcrumbs Start -->
    {{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Business Management</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Business Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- Breadcrumbs End -->

    <!-- Courses Details Start -->
    <div class="rs-courses-details pt-100 pb-70">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-8 col-md-12">
                    <div class="detail-img">
                        <img src="{{ $course->image }}"
                            alt="Courses Images" />
                        <div class="course-seats price">
                            {{ config('global.CURRENCY') . $course->price }}
                        </div>
                        {{-- <div class="course-seats">
                        170 
                        <span>SEATS</span>
                    </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="course-meta-style">
                                <li class="author">
                                    <div class="image">
                                        <img src="{{ url('frontend') . '/images/iqra/favicon01.ico' }}" width="50" alt="">
                                    </div>
                                    <div class="author-name">
                                        <a href="#">
                                            {{ $course->teacher ?? 'NA' }}
                                        </a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="categories">
                                    <a href="#" class="course-name">{{ $course->category->name }}</a>
                                    <p>Categories</p>
                                </li>
                                <li>
                                    <a href="#" class="course-name">{{ $course->name }}</a>                                    
                                    <div class="client-rating">
                                        <p>Course</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="btn-area">
                                <a href="{{ route('register') }}" title="{{ $course->name }}">Enroll This Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="course-des-tabs">
                                <div class="tab-btm">
                                    <!-- Nav tabs -->
                                    <div class="tabs-wrapper">
                                        <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link waves-light active" data-toggle="tab" href="#panel51"
                                                    role="tab">Description</a>
                                            </li>
                                            {{-- <li class="nav-item"> 
                                            <a class="nav-link waves-light" data-toggle="tab" href="#curriculum" role="tab">Curriculum</a> 
                                        </li> --}}
                                            {{-- <li class="nav-item">
                                                <a class="nav-link waves-light" data-toggle="tab" href="#"
                                                    role="tab"></a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <!-- Tab panels -->
                                <div class="tab-content card">
                                    <!--Panel 1-->
                                    <div class="tab-pane fade in active show" id="panel51" role="tabpanel">
                                        <h4 class="desc-title">Course Details</h4>
                                        {!! $course->description !!}
                                        <hr>

                                        <h4 class="desc-title">Requirements</h4>
                                        <div class="requirements-list">
                                            {!! $course->requirement !!}
                                            {{-- <li>Lorem ipsum dolor sit elit</li>
                                    <li>Sed posuere at lectus ac fringilla</li>
                                    <li>Aliquam mollis dolor libero</li>
                                    <li>Sagittis velit dignissim</li>
                                    <li>Aliquam mollis dolor libero</li>
                                    <li>Lorem ipsum dolor sit elit</li>
                                    <li>consectetur adipisicing elit</li>
                                    <li>Lorem consectetur adipisicing elit</li>
                                    <li>pariatur. Tempora, placeat ratione</li>
                                    <li>Lorem consectetur adipisicing elit</li>
                                    <li>Nihil odit magnam minima</li>
                                    <li>Lorem ipsum dolor sit elit</li> --}}
                                        </div>
                                    </div>
                                    <!--/.Panel 1-->
                                    <!--Panel 2-->
                                    {{-- <div class="tab-pane fade" id="curriculum" role="tabpanel">
                                    <div class="course-syllabus">
                                        <h4 class="desc-title">SECTION 1 : INTRODUCTION</h4>
                                        <div id="accordion" class="rs-accordion-style1">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <strong>Lessons  1: </strong>
                                                        <span>Computer Science And Engineering</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <strong>Lessons  2: </strong><span>Business Management</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header mb-0" id="headingThree">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <strong>Lessons  3: </strong>
                                                        <span>Civil Engineering</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <h4 class="desc-title mt-30">SECTION 2 : COMPUTER SCIENCE AND ENGINEERING</h4>
                                        <div id="accordiontTwo" class="rs-accordion-style1">
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                                    <strong>Lessons  4: </strong><span>Business Management</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordiontTwo">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                                    <strong>Lessons  5: </strong><span>Business Management</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordiontTwo">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                                        <strong>Lessons 6: </strong>
                                                        <span>Civil Engineering</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordiontTwo">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                                        <strong>Lessons 7: </strong>
                                                        <span>Diploma Electrical</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordiontTwo">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingEight">
                                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                                                        <strong>Lessons 8: </strong>
                                                        <span>Bachelor of Arts</span>
                                                    </h3>
                                                </div>
                                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordiontTwo">
                                                    <div class="card-body">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div> --}}
                                    <!--/.Panel 2-->

                                    <!--Panel 3-->
                                    {{-- <div class="tab-pane fade" id="" role="tabpanel">
                                        <div class="instructor-list">
                                            <div class="image">
                                                <img src="{{ url('frontend') }}/images/teachers/2.jpg" width="150" alt="">
                                            </div>
                                            <div class="author-name">
                                                <a href="#">
                                                    <h4>John Doe</h4>
                                                </a>
                                                <span>Professor</span>
                                                <div class="social-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="dsc">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered altera tion in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum
                                            </p>
                                        </div>
                                        <div class="instructor-list pt-45">
                                            <div class="image">
                                                <img src="{{ url('frontend') }}/images/teachers/9.jpg" width="150" alt="">
                                            </div>
                                            <div class="author-name">
                                                <a href="#">
                                                    <h4>Nuhan Freddy</h4>
                                                </a>
                                                <span>Bachelor</span>
                                                <div class="social-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="dsc">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered altera tion in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum
                                            </p>
                                        </div>
                                        <div class="instructor-list pt-45">
                                            <div class="image">
                                                <img src="{{ url('frontend') }}/images/teachers/6.jpg" width="150" alt="">
                                            </div>
                                            <div class="author-name">
                                                <a href="#">
                                                    <h4>Naila Naime</h4>
                                                </a>
                                                <span>Bachelor</span>
                                                <div class="social-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="dsc">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered altera tion in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum
                                            </p>
                                        </div>
                                    </div> --}}
                                    <!--/.Panel 3-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-area">
                        <div class="course-features-info">
                            <!--QR CODE IMAGE STARTS...-->
                            <img src="{{ url('frontend') }}/images/courses//QRCODE_CROPPED.jpg" alt="QR CODE FOR PAYMENT" title="Please scan the QR to complete the payment.">
                            <!--QR CODE IMAGE ENDS...-->
                        </div>
                        <div class="course-features-info">
                            <h4 class="desc-title">Course Features</h4>
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">
                                        Period
                                    </span>
                                    <span class="value">
                                        {{ $course->period }}
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span class="label">
                                        Duration
                                    </span>
                                    <span class="value">
                                        {{ $course->duration }}
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-level-up"></i>
                                    <span class="label">
                                        Language
                                    </span>
                                    <span class="value">
                                        {{ $course->language }}
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square-o"></i>
                                    <span class="label">
                                        Assessments
                                    </span>
                                    <span class="value">
                                        {{ $course->custom_assessment }}
                                    </span>
                                </li>
                                {{-- <li><i class="fa fa-users"></i> <span class="label">Students</span> <span class="value">560</span></li> --}}
                            </ul>
                        </div>
                        <div class="cate-box">
                            <h3 class="title">Courses Categories</h3>
                            <ul>
                                @foreach (getCategories() as $category)
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <a href="#">
                                            {{ $category->name }}
                                            <span>
                                                ({{ count($category->courses) }})
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="latest-courses">
                            <h3 class="title">Latest Courses</h3>
                            @foreach (getCourses() as $key => $courseItem)
                                @if ($loop->iteration < 6)
                                    <div class="post-item">
                                        <div class="post-img">
                                            <a href="{{ route('courses.show', $courseItem->id) }}">
                                                <img src="{{ $courseItem->thumbnail }}"
                                                    alt="" title="News image">
                                            </a>
                                        </div>
                                        <div class="post-desc">
                                            <h4>
                                                <a href="{{ route('courses.show', $courseItem->id) }}">
                                                    {{ $courseItem->name }}
                                                </a>
                                            </h4>
                                            <span class="duration">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                {{ $courseItem->period }}
                                            </span>
                                            <span class="price">Price:
                                                <span>
                                                    {{ config('global.CURRENCY') . $courseItem->price }}
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Details End -->

@endsection
