@extends('frontend.master')
@section('title', 'Our Courses')
@section('content')

<!-- Breadcrumbs Start -->
{{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">OUR COURSES</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Our Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Breadcrumbs End -->

<!-- Courses Start -->
<div id="rs-courses-3" class="rs-courses-3 sec-spacer">
    <div class="container">
        <div class="abt-title">
            <h2>OUR COURSES</h2>
        </div>
        <div class="gridFilter">
            <button class="active" data-filter="*">
                ALL
                <small class="badge badge-sm badge-round badge-warning">
                    {{ count($courses) }}
                </small>
            </button>
            @foreach ($categories as $category)
                <button data-filter=".{{ $category->name }}">
                    {{ $category->name }}
                    <small class="badge badge-sm badge-round badge-warning">
                        {{ count($category->courses) }}
                    </small>
                </button>
            @endforeach
            {{-- <button data-filter=".filter1">SCIENCE</button>
            <button data-filter=".filter2">BUSINESS</button>
            <button data-filter=".filter3">HUMANITIES</button>
            <button data-filter=".filter4">DIPLOMA</button> --}}
        </div>
        <div class="row grid">
            @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 grid-item {{ $course->category->name }}" onclick='window.location.href="{{ route('courses.show', $course->id) }}"'>
                  <div class="course-item">
                    <div class="course-img">
                        {{-- <img src="{{ url('frontend') }}/images/courses/10.jpg" alt="" /> --}}
                        <img src="{{ $course->thumbnail }}" alt="{{ $course->category->name }} - {{ $course->name }}" />
                        <span class="course-value">
                            {{ config('global.CURRENCY').$course->price }}
                        </span>
                        <div class="course-toolbar">
                            <h4 class="course-category">
                                <a href="javascript:void(0);">
                                     {{ $course->category->name }}
                                </a>
                            </h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 
                                {{-- 28-06-2017 --}}
                                {{ $course->duration }}
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 
                                {{ $course->period }}
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h4 class="course-title">
                                <a href="javascript:void(0);">
                                    {{ $course->name }}
                                </a>
                            </h4>
                            <p>
                                {!! $course->ShortDescription !!}
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 
                            {{-- 70 SEATS --}}
                        </div>
                        <div class="course-button">
                            <a href="{{ route('registration') }}">
                                REGISTER NOW
                            </a>
                        </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
        {{-- <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
            </ul>
        </nav> --}}
    </div>
</div>
<!-- Courses End -->

@endsection