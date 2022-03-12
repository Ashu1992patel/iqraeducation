<header id="rs-header" class="rs-header">
    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="">
                    {{-- <div class="logo-area"> --}}
                        <a href="{{ url('/') }}">
                            {{-- <img src="{{ url('frontend') }}/images/logo2.png" alt="logo" height="34" width="173"> --}}
                            <img src="{{ url('frontend') }}/images/iqra/logo.png" alt="logo" style="max-width: 40%">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="main-menu">
                        <!-- <div id="logo-sticky" class="text-center">
                            <a href="index.html"><img src="{{ url('frontend') }}/{{ url('frontend') }}/images/logo.png" alt="logo"></a>
                        </div> -->
                        <a class="rs-menu-toggle">
                            <i class="fa fa-bars"></i>
                            Menu
                        </a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li class="{{ request()->is('welcome') ? 'current_page_item' : '' }}">
                                    <a href="{{ route('welcome') }}" class="home">Home</a>                                 
                                </li>
                                <!-- End Home --> 

                                <!--About Menu Start-->
                                <li class="{{ request()->is('about') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <!--About Menu End--> 

                                <!--Courses Menu Start-->
                                <!-- Drop Down -->
                                <li class="{{ request()->is('courses.index') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('courses.index') }}">Courses</a>
                                    <ul class="sub-menu"> 
                                        {{-- <li class="menu-item-has-children"> <a href="#">Catgeory 1</a>
                                            <ul class="sub-menu">
                                              <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                              <li> <a href="{{ route('welcome') }}">Course Two</a> </li> 
                                              <li> <a href="{{ route('welcome') }}">Course Three</a> </li>
                                            </ul>
                                          </li>                                        
                                          <li class="menu-item-has-children"> <a href="#">Catgeory 2</a>
                                            <ul class="sub-menu">
                                              <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                            </ul>
                                          </li>                                        
                                          <li class="menu-item-has-children"> <a href="#">Catgeory 3</a>
                                            <ul class="sub-menu">
                                              <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                              <li> <a href="{{ route('welcome') }}">Course Two</a> </li> 
                                              <li> <a href="{{ route('welcome') }}">Course Three</a> </li>
                                              <li> <a href="{{ route('welcome') }}">Course Four</a> </li>
                                              <li> <a href="{{ route('welcome') }}">Course Five</a> </li>
                                            </ul>
                                          </li>                                        
                                          <li class="menu-item-has-children"> <a href="#">Catgeory 4</a>
                                            <ul class="sub-menu">
                                              <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                              <li> <a href="{{ route('welcome') }}">Course Two</a> </li> 
                                            </ul>
                                          </li>    --}}
                                          
                                          
                                          @foreach (getCategories() as $category)
                                          <li class="menu-item-has-children"> 
                                            <a href="#">
                                              {{ $category->name }}
                                             </a>
                                             <ul class="sub-menu">
                                                @forelse($category->courses as $course)
                                                <li>
                                                    <a href="{{ route('courses.show', $course->id) }}">
                                                        {{ $course->name }}
                                                    </a>
                                                </li> 
                                                @empty
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        No Courses Available
                                                    </a>
                                                </li>
                                                @endforelse
                                            </ul>
                                          </li>                                        
                                          @endforeach
                                    </ul>
                                </li>                                
                                <!--Courses Menu End-->

                                <!--Teachers Menu Start-->
                                {{-- <li class="{{ request()->is('teachers') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('teachers') }}">Teachers</a>
                                </li> --}}
                                <!--Teachers Menu End-->

                                <!--Contact Menu Start-->
                                <li class="{{ request()->is('contact') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('contact') }}">
                                        Contact
                                    </a>
                                </li>
                                <!--Contact Menu End-->

                                <!--checkout Menu Start-->
                                <li class="{{ request()->is('checkout') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('checkout') }}">
                                        checkout
                                    </a>
                                </li>
                                <!--checkout Menu End-->

                                @auth()
                                @else
                                <!--Login Start-->
                                <li class="{{ request()->is('login') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('login') }}" class="fa fa-sign-in">
                                        Signin
                                    </a>
                                </li>
                                <!--Login End-->

                                <!--Registration Start-->
                                <li class="{{ request()->is('registration') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('registration') }}" class="fa fa-graduation-cap">
                                        Signup
                                    </a>
                                </li>
                                <!--Registration End-->
                                @endauth
                            </ul>
                        </nav>
                        @auth()
                        <div class="apply-box">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="apply-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit(); " role="button">
                                    <i class="fa fa-sign-out"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>                            
                        </div>
                        @else
                        <div class="apply-box">
                            <a href="{{ route('registration') }}" class="apply-btn ">
                                <small>New Registration</small>
                            </a>
                        </div>
                        @endauth
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
</header>