@extends('layouts.master')
@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-12 col-md-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0 mb-4">Total Employee</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                   <i class="fas fa-users" style="font-size: 70px;color:green;"></i>
                                </div>


                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1">{{$employees->count()}}</h2>
                                    <p class="text-muted mb-1">Employee</p>
                                </div>



                            </div>
                        </div>
                    </div>
                </div><!-- end col -->


            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                   <h3 style="text-align: center;">Recent Employee</h3>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Profile image</th>
                                <th>Employee code </th>
                                <th>Name </th>
                                <th>Surname </th>
                                <th>Date of birth</th>
                                <th>Father name</th>
                                <th>Mother name</th>
                                <th>nationality</th>
                                <th>position</th>
                                <th>emergency contact no</th>
                                <th>Company name </th>
                                <th>Type of contract</th>
                                <th>Salary </th>
                                <th>Working hours</th>
                                <th>Passport issue date</th>
                                <th>Passport expiry date</th>
                                <th>Passport no </th>
                                <th>Passport Attachment</th>
                                <th>Residence card issue date</th>
                                <th>Residence card expiry date</th>
                                <th>Residence card attachment</th>
                                <th>Decision of Residence card</th>
                                <th>Work permit Issue Date</th>
                                <th>Work permit Expiry Date</th>
                                <th>Work permit Attachment</th>
                                <th>Zus Declaration</th>
                                <th>Zus Declaration Attachmenrt</th>
                                <th>Work Contract Issue Date</th>
                                <th>Work Contract Expiry Date</th>
                                <th>Work Contract Attachment file</th>
                                <th>Health Document</th>
                                <th>Additional attachment 1</th>
                                <th>Additional attachment 2</th>
                                <th>Additional attachment 3</th>
                                <th>Additional attachment 4</th>
                                <th>Additional attachment 5</th>
                                <th>Additional attachment 6</th>
                                <th>Additional attachment 7</th>
                                <th>Additional attachment 8</th>
                                <th>Additional attachment 9</th>
                                <th>Additional attachment 10</th>
                                <th>Pesel No</th>
                                <th>Shop Name</th>
                                <th>Shop Location</th>
                                <th>Accommodation Adddress</th>
                                <th>Previous Company Name</th>
                                <th>Experience Details</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Reference</th>
                                <th>Marital Status</th>



                            </tr>
                            </thead>


                            <tbody>
                                @foreach (@$recent_employees as $recent_employee )
                                <tr>
                                    <td><img src="{{asset('admin/image')}}/{{@$recent_employee->image}}" alt="" style="height: 50px; width:40px;"><a class="mx-1" href="{{asset('admin/image')}}/{{$recent_employee->image}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->employee_code}} </td>
                                    <td>{{@$recent_employee->name}}</td>
                                    <td>{{@$recent_employee->sur_name}}</td>
                                    <td>{{@$recent_employee->bd_date}}</td>
                                    <td>{{@$recent_employee->father_name}}</td>
                                    <td>{{@$recent_employee->mother_name}}</td>
                                    <td>{{@$recent_employee->nationality}}</td>
                                    <td>{{@$recent_employee->position}}</td>
                                    <td>{{@$recent_employee->em_contact}}</td>
                                    <td>{{@$recent_employee->company_name}}</td>
                                    <td>{{@$recent_employee->contact_type}}</td>
                                    <td>{{@$recent_employee->salary}}</td>
                                    <td>{{@$recent_employee->work_hour}}</td>
                                    <td>{{@$recent_employee->pp_issue_date}}</td>
                                    <td>{{@$recent_employee->pp_expiry_date}}</td>
                                    <td>{{@$recent_employee->passport_no}}</td>
                                    <td>{{@$recent_employee->passport_file}} <a class="mx-1" href="{{asset('admin/passport')}}/{{$recent_employee->passport_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->rd_issue_date}}</td>
                                    <td>{{@$recent_employee->rd_expiry_date}}</td>
                                    <td>{{@$recent_employee->rd_file}} <a class="mx-1" href="{{asset('admin/residence')}}/{{$recent_employee->rd_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->d_residence_file}} <a class="mx-1" href="{{asset('admin/dec_residence')}}/{{$recent_employee->d_residence_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->work_issue_date}}</td>
                                    <td>{{@$recent_employee->work_expiry_date}}</td>
                                    <td>{{@$recent_employee->work_file}} <a class="mx-1" href="{{asset('admin/work_file')}}/{{$recent_employee->work_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->zus_date}}</td>
                                    <td>{{@$recent_employee->zus_dec}} <a class="mx-1" href="{{asset('admin/zus')}}/{{$recent_employee->zus_dec}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->work_contact_issue_date}}</td>
                                    <td>{{@$recent_employee->work_contact_expiry_date}}</td>
                                    <td>{{@$recent_employee->work_contact_file}} <a class="mx-1" href="{{asset('admin/work_contact')}}/{{$recent_employee->work_contact_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->health_doc}} <a class="mx-1" href="{{asset('admin/health_doc')}}/{{$recent_employee->health_doc}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment1}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment1}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment2}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment2}}" download><i class="fas fa-cloud-download-alt"></i></a> </td>
                                    <td>{{@$recent_employee->attachment3}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment3}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment4}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment4}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment5}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment5}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment6}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment6}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment7}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment7}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment8}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment8}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment9}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment9}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->attachment10}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$recent_employee->attachment10}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->pasel_no}} <a class="mx-1" href="{{asset('admin/pasel_no')}}/{{$recent_employee->pasel_no}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->brance->name??''}}</td>
                                    <td>{{@$recent_employee->brancelocation->location??''}}</td>
                                    <td>{{@$recent_employee->accommodation_address}}</td>
                                    <td>{{@$recent_employee->pre_company_name}}</td>
                                    <td>{{@$recent_employee->exp_details}} <a class="mx-1" href="{{asset('admin/exp_details')}}/{{$recent_employee->exp_details}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                    <td>{{@$recent_employee->contact_no}}</td>
                                    <td>{{@$recent_employee->email}}</td>
                                    <td>{{@$recent_employee->reference}}</td>
                                    <td>{{@$recent_employee->marital_status}}</td>


                                </tr>



                                @endforeach

                            </tbody>
                    </table>

                </div>


            </div>

            <div class="row">
                {{-- <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">Inbox</h4>

                            <div class="inbox-widget">

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="assets/images/users/user-1.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Chadengle</h5>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">13:40 PM</p>
                                    </a>
                                </div>

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Tomaslau</h5>
                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                        <p class="inbox-item-date">13:34 PM</p>
                                    </a>
                                </div>

                                <div class="inbox-item">
                                        <a href="#">
                                        <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Stillnotdavid</h5>
                                        <p class="inbox-item-text">This theme is awesome!</p>
                                        <p class="inbox-item-date">13:17 PM</p>
                                    </a>
                                </div>

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Kurafire</h5>
                                        <p class="inbox-item-text">Nice to meet you</p>
                                        <p class="inbox-item-date">12:20 PM</p>
                                    </a>
                                </div>

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Shahedk</h5>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}
                <!-- end col -->

                {{-- <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Latest Projects</h4>

                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Assign</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Adminto Admin v1</td>
                                            <td>01/01/2017</td>
                                            <td>26/04/2017</td>
                                            <td><span class="badge bg-danger">Released</span></td>
                                            <td>Coderthemes</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Adminto Frontend v1</td>
                                            <td>01/01/2017</td>
                                            <td>26/04/2017</td>
                                            <td><span class="badge bg-success">Released</span></td>
                                            <td>Adminto admin</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Adminto Admin v1.1</td>
                                            <td>01/05/2017</td>
                                            <td>10/05/2017</td>
                                            <td><span class="badge bg-pink">Pending</span></td>
                                            <td>Coderthemes</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Adminto Frontend v1.1</td>
                                            <td>01/01/2017</td>
                                            <td>31/05/2017</td>
                                            <td><span class="badge bg-purple">Work in Progress</span>
                                            </td>
                                            <td>Adminto admin</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Adminto Admin v1.3</td>
                                            <td>01/01/2017</td>
                                            <td>31/05/2017</td>
                                            <td><span class="badge bg-warning">Coming soon</span></td>
                                            <td>Coderthemes</td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Adminto Admin v1.3</td>
                                            <td>01/01/2017</td>
                                            <td>31/05/2017</td>
                                            <td><span class="badge bg-primary">Coming soon</span></td>
                                            <td>Adminto admin</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> --}}
                <!-- end col -->

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
