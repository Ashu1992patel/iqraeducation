@extends('frontend.master')
@section('title', 'Contact Us')
@section('content')

<!-- Breadcrumbs Start -->
{{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Error</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Error 404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Breadcrumbs End -->

<!-- 404 Page Area Start Here -->
<div class="error-page-area sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 error-page-message">
                <div class="error-page">
                    <h1>404</h1>
                    <p>Page was not Found</p>
                    <div class="home-page">
                        <a href="{{ route('welcome') }}">Go to Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 404 Page Area End Here -->
@endsection

