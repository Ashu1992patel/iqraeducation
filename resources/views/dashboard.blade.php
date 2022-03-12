@extends('frontend.master')
@section('title', 'Welcome')
@section('content')
    <!-- Slider Area Start -->
    @include('frontend.common.slider-area')
    <!-- Slider Area End -->
    
    <!-- Services Start -->
    @include('frontend.common.services')
    <!-- Services End -->

    <!-- About Us Start -->
    @include('frontend.common.about-us')
    <!-- About Us End -->
    
    <!-- Counter Up Section Start-->
    @include('frontend.common.counter')
    <!-- Counter Down Section End -->

    <!-- Courses Start -->
    @include('frontend.common.courses')
    <!-- Courses End -->
    
    <!-- Team Start -->
    {{-- @include('frontend.common.team') --}}
    <!-- Team End -->

    <!-- Events Start -->
    @include('frontend.common.branches')
    <!-- Events End -->
    
    <!-- Testimonial Start -->
    {{-- @include('frontend.common.testimonial') --}}
    <!-- Testimonial End -->

    <!-- Latest News Start -->
    {{-- @include('frontend.common.latest-news') --}}
    <!-- Latest News End -->
    
    <!-- RS Gallery section start -->
    {{-- @include('frontend.common.gallery') --}}
    <!-- RS Gallery section end -->
@endsection