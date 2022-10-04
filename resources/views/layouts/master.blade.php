<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8" />
        <title>{{ $logo->title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/logo')}}/{{$logo->fav_icon }}">

        <!-- App css -->

        <link href="{{asset('')}}assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="{{asset('')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->

        <div id="wrapper">
{{-- topbar --}}

@include('layouts.topbar')

{{-- endtopbar --}}


    {{-- sidebar --}}

@auth('shop')
@include('layouts.shop_sidenav')
@else
@include('layouts.sidenav')
@endauth



       {{-- end sidebar --}}

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         @yield('content')

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- Vendor -->
        <script src="{{asset('')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>


        <!-- knob plugin -->
        <script src="{{asset('')}}assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!-- App js-->
        <script src="{{asset('')}}assets/js/app.min.js"></script>
         <!-- third party js -->
         <script src="{{asset('')}}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
         <script src="{{asset('')}}assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
         <script src="{{asset('')}}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
         <script src="{{asset('')}}assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
         <script src="{{asset('')}}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
         <script src="{{asset('')}}assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
         <script src="{{asset('')}}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>

         <script src="{{asset('')}}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>

         <script src="{{asset('')}}assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
         <script src="{{asset('')}}assets/libs/pdfmake/build/pdfmake.min.js"></script>

         <!-- third party js ends -->

         <!-- Datatables init -->
         <script src="{{asset('')}}assets/js/pages/datatables.init.js"></script>


         {{-- notify --}}


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

         @yield('script')

    </body>

</html>
