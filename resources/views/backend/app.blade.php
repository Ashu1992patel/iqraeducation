<!DOCTYPE html>
<html lang="en">

<head>
  @include('backend.common.head')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.common.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      {{-- @include('backend.common.setting-panel') --}}
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('backend.common.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if(session()->has('success'))
          <div class="alert alert-info card card-body" id="myDiv">
            <!-- <div class="row"> -->
              <!-- <div class="col-sm-1">
                <span class="error" align="right" onclick="document.getElementById('myDiv').style.display='none'" id='close'>x</span>
              </div> -->
              <!-- <div class="col-sm-11"> -->
                {{ session()->get('success') }}
              <!-- </div> -->
            <!-- </div> -->
          </div>
          @endif
          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('backend.common.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('backend.common.script')
</body>

</html>