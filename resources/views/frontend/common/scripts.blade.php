<!-- modernizr js -->
<script src="{{ url('frontend') }}/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="{{ url('frontend') }}/js/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="{{ url('frontend') }}/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="{{ url('frontend') }}/js/owl.carousel.min.js"></script>
<!-- slick.min js -->
<script src="{{ url('frontend') }}/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="{{ url('frontend') }}/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{ url('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="{{ url('frontend') }}/js/wow.min.js"></script>
<!-- counter top js -->
<script src="{{ url('frontend') }}/js/waypoints.min.js"></script>
<script src="{{ url('frontend') }}/js/jquery.counterup.min.js"></script>
<!-- magnific popup -->
<script src="{{ url('frontend') }}/js/jquery.magnific-popup.min.js"></script>
<!-- rsmenu js -->
<script src="{{ url('frontend') }}/js/rsmenu-main.js"></script>
<!-- plugins js -->
<script src="{{ url('frontend') }}/js/plugins.js"></script>
 <!-- main js -->
<script src="{{ url('frontend') }}/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


{{-- https://github.com/CodeSeven/toastr --}}
@if ($errors->any())
     @foreach ($errors->all() as $error)
         <script>
            // Display an error toast, with a title
            toastr.error("{{$error}}", 'Inconceivable!')
        </script>
     @endforeach
 @endif

 @if(session('success'))
    <script>
        // Display an error toast, with a title
        toastr.success("{{session('success')}}", 'Miracle Max Says', {timeOut: 5000})
    </script>
@endif

@if(session('error'))
    <script>
        // Display an error toast, with a title
        toastr.error("{{session('error')}}", 'Inconceivable!')
    </script>
@endif

@yield('scripts')