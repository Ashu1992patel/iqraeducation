<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title') | IQRA Educations </title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ url('backend') }}/vendors/feather/feather.css">
<link rel="stylesheet" href="{{ url('backend') }}/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="{{ url('backend') }}/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="{{ url('backend') }}/vendors/typicons/typicons.css">
<link rel="stylesheet" href="{{ url('backend') }}/vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="{{ url('backend') }}/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ url('backend') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="{{ url('backend') }}/js/select.dataTables.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{ url('backend') }}/css/vertical-layout-light/style.css">
<!-- endinject -->
<link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend') }}/images/iqra/favicon01.ico">

<link rel="stylesheet" href="{{ url('backend') }}/vendors/select2/select2.min.css">

<!-- <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script> -->

<!-- Editor Starts... -->
<script src="https://cdn.tiny.cloud/1/r7aiezlgnuoltwq7qip7lxstpus9zuduex1kv7hyiat2enqt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '.editor',
        // plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        // toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
        // toolbar_mode: 'floating',
        // tinycomments_mode: 'embedded',
        // tinycomments_author: 'Author name',
    });
    setTimeout(() => {
        $('.tox-tinymce-aux').css("display", "none");
        $('.tox-tinymce-aux').attr('style', 'display: none'); 
    }, 5000);
</script>
<!-- Editor Ends... -->


<style>
    .error {
        color: red !important;
        font-size: 10px !important;
    }
</style>
@yield('style')