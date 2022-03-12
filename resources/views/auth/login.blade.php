
@extends('frontend.master')
@section('title', 'Student Registration')
@section('content')

<div class="contact-page-section sec-spacer">
    <div class="container">
        <div class="contact-comment-section">
            <h3>Student Login</h3>
            <div id="form-messages"></div>

            <form id="contact-form" method="post" action="{{ route('login') }}" method="post">
                @csrf
                <fieldset>
                    <div class="row">                                      
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus >
                                @if($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Password*</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                @if($errors->has('password'))
                                    <div class="error">{{ $errors->first('password') }}</div>
                                @endif
                            </div>  
                        </div>
                        {{-- <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" id="remember_me">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </div>  
                        </div> --}}
                    </div>
                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Login">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>                       
                </fieldset>
            </form>						
        </div>
    </div>
</div>

@endsection

