
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.header')
</head>
@toastr_css
<body class="">
<div class="wrapper ">
{{--    /*-- sidebar --*/--}}
    @include('admin.layout.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
    @include('admin.layout.navbar')
    <!-- End Navbar -->
{{--        /* content */--}}
        @yield('content')
    </div>
</div>

{{--/* setting */--}}
@include('admin.layout.footer')
</body>
@jquery
@toastr_js
@toastr_render
</html>
