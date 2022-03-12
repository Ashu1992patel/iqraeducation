<!DOCTYPE html>
<html lang="zxx">
    <head>
       @include('frontend.common.head')
    </head>
    <body class="home5">
        <!--Preloader area start here-->
        @include('frontend.common.preloader')
		<!--Preloader area end here-->
		
        <!--Full width header Start-->
        <div class="full-width-header">
            <!-- Toolbar Start -->
            @include('frontend.common.toolbar')
            <!-- Toolbar End -->
            
            <!--Header Start-->
            @include('frontend.common.header')
            <!--Header End-->
        
        </div>
        <!--Full width header End-->
		
		<!-- Content Starts here -->
        @yield('content')
		<!-- Content Ends here -->

        <!-- Partner Start -->
        @include('frontend.common.partners')
        <!-- Partner End -->
       
        <!-- Footer Start -->
        @include('frontend.common.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
		
		<!-- Canvas Menu start -->
        @include('frontend.common.canvas-menu-nav')
        <!-- Canvas Menu end -->
        
        <!-- Search Modal Start -->
        @include('frontend.common.search-modal')
        <!-- Search Modal End --> 
        
        @include('frontend.common.scripts')
    </body>
</html>