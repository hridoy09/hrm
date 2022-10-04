@extends('layouts.master')
@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-6 col-md-6">



                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-3">Total Employeee</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <span class="badge bg-primary rounded float-start mt-3">   <i class="fas fa-users
                                         h4 "></i> </span>

                                    <h2 class="fw-normal mb-1"> {{$employees->count()}}</h2>
                                    <p class="text-muted mb-3">Employee</p>
                                </div>
                                <div class="progress progress-bar-alt-primary progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
                <!-- end col -->

                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-3">Total Shop</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <span class="badge bg-primary rounded float-start mt-3">           <i class="fas fa-shopping-bag
                                         h4"></i></span>
                                    <h2 class="fw-normal mb-1"> {{$brances->count()}}</h2>
                                    <p class="text-muted mb-3">Shop</p>
                                </div>
                                <div class="progress progress-bar-alt-primary progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-4">Active Shop</h4>

                            <div class="widget-chart-1">

                                <div class="widget-detail-1 text-end">

                                    <span class="badge rounded float-start mt-3">           <i class="fas fa-shopping-bag
                                        h2 text-success "></i></span>
                                    <h2 class="fw-normal pt-2 mb-1"> {{@$activebrances->count()}} </h2>
                                    <p class="text-muted mb-1"> Active Shop</p>
                                </div>
                                <div class="progress progress-bar-alt-success progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-4">Inactive Shop</h4>

                            <div class="widget-chart-1">

                                <div class="widget-detail-1 text-end">
                                    <span class="badge rounded float-start mt-3">           <i class="fas fa-shopping-bag
                                        h2 text-danger "></i></span>

                                    <h2 class="fw-normal pt-2 mb-1"> {{@$inactivebrances->count()}} </h2>
                                    <p class="text-muted mb-1"> Inactive Shop</p>
                                </div>
                                <div class="progress progress-bar-alt-danger progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0 mb-3">Active Employee</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">

                                    <span class="badge  rounded float-start mt-3">   <i class="fas fa-users
                                        h2 text-success"></i> </span>

                                    <h2 class="fw-normal mb-1"> {{@$activeemployees->count()}}</h2>
                                    <p class="text-muted mb-3">Active Employee</p>
                                </div>
                                <div class="progress progress-bar-alt-success progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0 mb-3">Inactive Employee</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <span class="badge  rounded float-start mt-3">   <i class="fas fa-users
                                        h2 text-danger"></i> </span>

                                    <h2 class="fw-normal mb-1"> {{@$inactiveemployees->count()}}</h2>
                                    <p class="text-muted mb-3">Inactive Employee</p>
                                </div>
                                <div class="progress progress-bar-alt-danger progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->





        </div> <!-- container-fluid -->

    </div> <!-- content -->



</div>

@endsection

@section('script')
<script>
    @if(Session::has('seen'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.success("{{ session('seen') }}");
@endif


</script>
@endsection

