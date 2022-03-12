@extends('frontend.master')
@section('title', 'Student Registration')
@section('content')

<!-- Breadcrumbs Start -->
{{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Student Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="contact-page-section sec-spacer">
    <div class="container">
        <div class="contact-comment-section">
            <h3>Student Register</h3>
            <div id="form-messages"></div>
            <form id="contact-form" method="post" action="{{ route('register') }}" method="post">
                @csrf
                <fieldset>
                    <div class="row">                                      
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Name*</label>
                                <input name="name" id="name" class="form-control" type="text" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Create Password*</label>
                                        <input name="password" id="password" class="form-control" type="password">
                                    </div>                                    
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password*</label>
                                        <input name="password_confirmation" id="password_confirmation" class="form-control" type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">                                      
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth*</label>
                                        <input name="dob" id="dob" class="form-control" type="date" value="{{ old('dob') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" id="gender" class="form-control" >
                                            <option {{ old('gender')=='female'?'selected':'' }} value="female">Female</option>
                                            <option {{ old('gender')=='male'?'selected':'' }} value="male">Male</option>
                                            <option {{ old('gender')=='other'?'selected':'' }} value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Contact*</label>
                                        <input name="contact" id="contact" class="form-control" type="tel" value="{{ old('contact') }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input name="email" id="email" class="form-control" type="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Address *</label>
                                <input name="address" id="address" class="form-control" type="text" value="{{ old('address') }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Interested in Course*</label>
                                <select name="course_id" id="course_id" class="form-control" >
                                    @foreach (getCourses() as $course)
                                        <option {{ old('course_id')== $course->id ? 'selected' : '' }} value="{{ $course->id }}">
                                            {{ $course->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Save Details">
                    </div>                       
                </fieldset>
            </form>						
        </div>
    </div>
</div>
<!-- Contact Section End -->   

@endsection

