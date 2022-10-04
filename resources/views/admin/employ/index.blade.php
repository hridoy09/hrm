@extends('layouts.master')
@section('content')


<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row ">

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title text-center">List Employee</h4>


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">
                                    <a class="btn btn-primary my-3" href="{{route('employ.create')}}">Add employee</a>

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
                                                <th>New Passport Attachment</th>
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
                                                <th>Status</th>
                                                <th>Status Action</th>
                                                <th>Action</th>


                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($employees as $employee )
                                                <tr>
                                                    <td><img src="{{asset('admin/image')}}/{{@$employee->image}}" alt="" style="height: 50px; width:40px;"><a class="mx-1" href="{{asset('admin/image')}}/{{$employee->image}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->employee_code}} </td>
                                                    <td>{{@$employee->name}}</td>
                                                    <td>{{@$employee->sur_name}}</td>
                                                    <td>{{@$employee->bd_date}}</td>
                                                    <td>{{@$employee->father_name}}</td>
                                                    <td>{{@$employee->mother_name}}</td>
                                                    <td>{{@$employee->nationality}}</td>
                                                    <td>{{@$employee->position}}</td>
                                                    <td>{{@$employee->em_contact}}</td>
                                                    <td>{{@$employee->company_name}}</td>
                                                    <td>{{@$employee->contact_type}}</td>
                                                    <td>{{@$employee->salary}}</td>
                                                    <td>{{@$employee->work_hour}}</td>
                                                    <td>{{@$employee->pp_issue_date}}</td>
                                                    <td>{{@$employee->pp_expiry_date}}</td>
                                                    <td>{{@$employee->passport_no}}</td>
                                                    <td>{{@$employee->passport_file}} <a class="mx-1" href="{{asset('admin/passport')}}/{{$employee->passport_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->update_passport_file}} <a class="mx-1" href="{{asset('admin/passport')}}/{{$employee->update_passport_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->rd_issue_date}}</td>
                                                    <td>{{@$employee->rd_expiry_date}}</td>
                                                    <td>{{@$employee->rd_file}} <a class="mx-1" href="{{asset('admin/residence')}}/{{$employee->rd_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->d_residence_file}} <a class="mx-1" href="{{asset('admin/dec_residence')}}/{{$employee->d_residence_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->work_issue_date}}</td>
                                                    <td>{{@$employee->work_expiry_date}}</td>
                                                    <td>{{@$employee->work_file}} <a class="mx-1" href="{{asset('admin/work_file')}}/{{$employee->work_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->zus_date}}</td>
                                                    <td>{{@$employee->zus_dec}} <a class="mx-1" href="{{asset('admin/zus')}}/{{$employee->zus_dec}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->work_contact_issue_date}}</td>
                                                    <td>{{@$employee->work_contact_expiry_date}}</td>
                                                    <td>{{@$employee->work_contact_file}} <a class="mx-1" href="{{asset('admin/work_contact')}}/{{$employee->work_contact_file}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->health_doc}} <a class="mx-1" href="{{asset('admin/health_doc')}}/{{$employee->health_doc}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment1}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment1}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment2}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment2}}" download><i class="fas fa-cloud-download-alt"></i></a> </td>
                                                    <td>{{@$employee->attachment3}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment3}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment4}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment4}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment5}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment5}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment6}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment6}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment7}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment7}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment8}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment8}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment9}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment9}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->attachment10}} <a class="mx-1" href="{{asset('admin/attachment')}}/{{$employee->attachment10}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->pasel_no}} <a class="mx-1" href="{{asset('admin/pasel_no')}}/{{$employee->pasel_no}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->brance->name??''}}</td>
                                                    <td>{{@$employee->brancelocation->location??''}}</td>
                                                    <td>{{@$employee->accommodation_address}}</td>
                                                    <td>{{@$employee->pre_company_name}}</td>
                                                    <td>{{@$employee->exp_details}} <a class="mx-1" href="{{asset('admin/exp_details')}}/{{$employee->exp_details}}" download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$employee->contact_no}}</td>
                                                    <td>{{@$employee->email}}</td>
                                                    <td>{{@$employee->reference}}</td>
                                                    <td>{{@$employee->marital_status}}</td>

                                                    @if($employee->Status == 1)
                                                    <td><span class="badge badge-success bg-success">Active</span></td>
                                                    @else
                                                    <td><span class="badge badge-danger bg-danger">Inactive</span></td>
                                                    @endif
                                                    <td>
                                                        @if($employee->Status == 1)
                                                        <a  class="btn btn-success" href="{{ URL::to('admin/change-status/'.$employee->id) }}"><i
                                                                class="fa fa-arrow-circle-up"></i></a>
                                                            @else
                                                                <a class="btn btn-danger" href="{{ URL::to('admin/change-status/'.$employee->id) }}"><i
                                                                class="fa fa-arrow-circle-down"></i></a>

                                                                @endif

                                                    </td>


                                                    <td>

                                                  <a type="button" class="btn btn-warning" href="{{route('employ.edit', $employee->id)}}"><i class=" fas fa-edit"></i></a>
                                                 <button  class="btn btn-danger deleteEmployeeButton"   data-employee_id="{{$employee->id}}"><i class="fas fa-archive"></i></a>

                                                    </td>
                                                </tr>



                                                @endforeach

                                            </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



     <!-- Danger Alert Modal -->
     <div id="deleteEmployeeModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content modal-filled bg-danger">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Alert!</h4>
                        <p class="mt-3 text-white">Are you sure to delete this employee?</p>
                        <a href="" class=" deleteEmployeeAnchore"><button type="button" class="btn btn-light my-2">Continue</button></a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
{{-- end content --}}



@endsection



@section('script')

<script>
       (function($) {
            "use strict";
            $('body').on('click','.deleteEmployeeButton',function(){
                let deleteEmployeeModal = $('#deleteEmployeeModal');
                let url = `{{route('employee.delete','')}}/${$(this).data('employee_id')}`;
                deleteEmployeeModal.find('.deleteEmployeeAnchore').attr('href',url);
                deleteEmployeeModal.modal('show');
            });
        })(jQuery);



@if(Session::has('delete'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.error("{{ session('delete') }}");
@endif


@if(Session::has('update'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.success("{{ session('update') }}");
@endif



@if(Session::has('Employeea'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.success("{{ session('Employeea') }}");
@endif

@if(Session::has('Employeed'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.error("{{ session('Employeed') }}");
@endif
</script>

@endsection
