   @extends('layouts.master')
   @section('content')

   <!-- Start Content-->

   <div class="content-page">
       <div class="content">
           <div class="container-fluid">

               <div class="row ">
                   <div class="col-12">
                       <div class="card">
                           <div class="card-body">
                               <h4 class="header-title text-center">Add Employee</h4>



                               <div class="row d-flex justify-content-center">
                                   <div class="col-lg-8">
                                    <a class="btn btn-primary my-3"  href="{{route('employ.list')}}" >Back</a>
                                       <form action="{{route('employ.store')}}" method="POST"
                                           enctype="multipart/form-data">
                                           @csrf

                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Employee Code</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control  @error('employee_code') is-invalid @enderror "
                                                   name="employee_code" placeholder="Employ Code">
                                               @error('employee_code')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>

                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Name</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control  @error('name') is-invalid @enderror" name="name"
                                                   placeholder="Name">
                                               @error('name')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Surname</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('sur_name') is-invalid @enderror"
                                                   name="sur_name" placeholder="surname">
                                               @error('sur_name')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Date of Birth</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('bd_date') is-invalid @enderror"
                                                   name="bd_date" placeholder="date of birth">
                                               @error('bd_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Father Name</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('father_name') is-invalid @enderror"
                                                   name="father_name" placeholder="father name">
                                               @error('father_name')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Mother Name</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('mother_name') is-invalid @enderror"
                                                   name="mother_name" placeholder="mother name">
                                               @error('mother_name')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Nationality</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('nationality') is-invalid @enderror"
                                                   name="nationality" placeholder="nationality">
                                               @error('nationality')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Position</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('position') is-invalid @enderror"
                                                   name="position" placeholder="position">
                                               @error('position')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror


                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Emergency Contact no</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('em_contact') is-invalid @enderror"
                                                   name="em_contact" placeholder="Emergency Contact no">
                                               @error('em_contact')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>

                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Company Name</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('company_name') is-invalid @enderror"
                                                   name="company_name" placeholder="Company Name">
                                               @error('company_name')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Type of Contract</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('contact_type') is-invalid @enderror"
                                                   name="contact_type" placeholder="Type of Contract">
                                               @error('contact_type')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>

                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Salary</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('salary') is-invalid @enderror"
                                                   name="salary" placeholder="Salary">
                                               @error('salary')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Working Hours</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('work_hour') is-invalid @enderror"
                                                   name="work_hour" placeholder="working Hours">
                                               @error('work_hour')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>


                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Passport Issue Date.</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('pp_issue_date') is-invalid @enderror mb-3"
                                                   name="pp_issue_date" placeholder="Passport Issue Date">

                                               @error('pp_issue_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror


                                               <label for="simpleinput" class="form-label">Passport Expiry Date.</label>

                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('pp_expiry_date') is-invalid @enderror mb-3"
                                                   name="pp_expiry_date" placeholder="Passport expiry Date">
                                               @error('pp_expiry_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                               <label for="simpleinput" class="form-label">Passport No.</label>
                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('passport_no') is-invalid @enderror mb-3"
                                                   name="passport_no" placeholder="Passport Number">
                                               @error('passport_no')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror


                                               <label for="simpleinput" class="form-label">Passport Attachment
                                                   file</label>
                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('passport_file') is-invalid @enderror"
                                                   name="passport_file" placeholder="Passport Number">
                                               @error('passport_file')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                               <label for="simpleinput" class="form-label">Update Passport Attachment
                                                file</label>
                                            <input type="file" id="simpleinput"
                                                class="form-control @error('update_passport_file') is-invalid @enderror"
                                                name="update_passport_file" placeholder="Passport Number">
                                            @error('update_passport_file')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Residence Issue Date.</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('rd_issue_date') is-invalid @enderror mb-3"
                                                   name="rd_issue_date">

                                               @error('rd_issue_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror


                                               <label for="simpleinput" class="form-label">Residence Expiry
                                                   Date.</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('rd_expiry_date') is-invalid @enderror mb-3"
                                                   name="rd_expiry_date">

                                               @error('rd_expiry_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                               <label for="simpleinput" class="form-label">Residence Attachment
                                                   file</label>
                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('rd_file') is-invalid @enderror"
                                                   name="rd_file">
                                               @error('rd_file')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Decision of Residence
                                                   card</label>
                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('d_residence_file') is-invalid @enderror"
                                                   name="d_residence_file">
                                               @error('d_residence_file')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Work permit Issue
                                                   Date.</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('work_issue_date') is-invalid @enderror mb-3"
                                                   name="work_issue_date">
                                               @error('work_issue_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                               <label for="simpleinput" class="form-label">Work permit Expiry
                                                   Date.</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('work_expiry_date') is-invalid @enderror mb-3"
                                                   name="work_expiry_date">
                                               @error('work_expiry_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                               <label for="simpleinput" class="form-label">Work permit Attachment
                                                   file</label>
                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('work_file') is-invalid @enderror"
                                                   name="work_file">
                                               @error('work_file')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Zus Declaration</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('zus_date') is-invalid @enderror mb-3"
                                                   name="zus_date">
                                               @error('zus_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('zus_dec') is-invalid @enderror"
                                                   name="zus_dec">
                                               @error('zus_dec')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Work Contract Issue
                                                   Date.</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('work_contact_issue_date') is-invalid @enderror mb-3"
                                                   name="work_contact_issue_date">
                                               @error('work_contact_issue_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                               <label for="simpleinput" class="form-label">Work Contract Expiry
                                                   Date.</label>
                                               <input type="date" id="simpleinput"
                                                   class="form-control @error('work_contact_expiry_date') is-invalid @enderror mb-3"
                                                   name="work_contact_expiry_date">
                                               @error('work_contact_expiry_date')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                               <label for="simpleinput" class="form-label">Work Contract Attachment
                                                   file</label>
                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('work_contact_file') is-invalid @enderror"
                                                   name="work_contact_file">
                                               @error('work_contact_file')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Health Document</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('health_doc') is-invalid @enderror"
                                                   name="health_doc">
                                               @error('health_doc')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   1</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment1') is-invalid @enderror"
                                                   name="attachment1">
                                               @error('attachment1')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   2</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment2') is-invalid @enderror"
                                                   name="attachment2">
                                               @error('attachment2')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   3</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment3') is-invalid @enderror"
                                                   name="attachment3">
                                               @error('attachment13')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   4</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment4') is-invalid @enderror"
                                                   name="attachment4">
                                               @error('attachment4')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   5</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment5') is-invalid @enderror"
                                                   name="attachment5">
                                               @error('attachment5')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   6</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment6') is-invalid @enderror"
                                                   name="attachment6">
                                               @error('attachment6')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   7</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment7') is-invalid @enderror"
                                                   name="attachment7">
                                               @error('attachment7')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   8</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment8') is-invalid @enderror"
                                                   name="attachment8">
                                               @error('attachment8')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   9</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment9') is-invalid @enderror"
                                                   name="attachment9">
                                               @error('attachment9')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Additional attachment
                                                   10</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('attachment10') is-invalid @enderror"
                                                   name="attachment10">
                                               @error('attachment10')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Pesel No</label>
                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('pasel_no') is-invalid @enderror"
                                                   name="pasel_no">
                                               @error('pasel_no')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Shop Name</label>
                                               <select class="form-select @error('shop_id') is-invalid @enderror"
                                                   name="shop_id" aria-label="Default select example">
                                            @foreach ($brances as $brance )
                                            <option value="{{$brance->id}}">{{$brance->name}}</option>
                                            @endforeach

                                               </select>
                                               @error('shop_id')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Shop Location</label>

                                               <select
                                                   class="form-select @error('shop_location_id') is-invalid @enderror"
                                                   name="shop_location_id" aria-label="Default select example">
                                                   <option selected>Open this select menu</option>
                                                   @foreach ($brances as $brance )
                                                   <option value="{{$brance->id}}">{{$brance->location}}</option>
                                                 @endforeach
                                               </select>
                                               @error('shop_location_id')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Accommodation
                                                   Adddress</label>

                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('accommodation_address') is-invalid @enderror"
                                                   placeholder="accommodation address" name="accommodation_address">
                                               @error('accommodation_address')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Previous Company Name</label>

                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('pre_company_name') is-invalid @enderror"
                                                   placeholder="Previous Company Name" name="pre_company_name">
                                               @error('pre_company_name')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Experience Details</label>

                                               <input type="file" id="simpleinput"
                                                   class="form-control @error('exp_details') is-invalid @enderror"
                                                   name="exp_details">
                                               @error('exp_details')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Contact No</label>

                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('contact_no') is-invalid @enderror"
                                                   placeholder="Contact No" name="contact_no">
                                               @error('contact_no')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>


                                           <div class="mb-3">
                                               <label for="example-email" class="form-label">Email</label>
                                               <input type="email" id="example-email" name="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   placeholder="Email">
                                               @error('email')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Reference</label>

                                               <input type="text" id="simpleinput"
                                                   class="form-control @error('reference') is-invalid @enderror"
                                                   name="reference" placeholder="Reference">
                                               @error('reference')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>
                                           <div class="mb-3">
                                               <label class="form-label">Marital Status</label><br>
                                               <select class="form-select @error('marital_status') is-invalid @enderror"
                                                   name="marital_status" aria-label="Default select example">
                                                   <option selected>Open this select menu</option>
                                                   <option value="Merride">Merried</option>
                                                   <option value="Unmerride">Unmerried</option>

                                               </select>
                                               @error('marital_status')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>

                                           <div class="mb-3">
                                               <label for="simpleinput" class="form-label">Employee Picture</label>
                                               <input type="file" id="simpleinput" name="image"
                                                   class="form-control @error('image') is-invalid @enderror">
                                               @error('image')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror

                                           </div>

                                           {{-- <div class="mb-3">
                                               <label for="password" class="form-label">Show/Hide Password</label>
                                               <div class="input-group input-group-merge">
                                                   <input type="password" id="password" class="form-control @error('employee_code') is-invalid @enderror"
                                                       placeholder="Enter your password">
                                                   <div class="input-group-text" data-password="false">
                                                       <span class="password-eye"></span>
                                                   </div>
                                               </div>
                                           </div> --}}

                                           <button
                                               class="btn btn-lg btn-outline-primary waves-effect waves-light float-end"
                                               type="submit">Submit</button>

                                       </form>
                                   </div>
                                   <!-- end col -->

                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   {{-- end content --}}

   @endsection
@section('script')

<script>

    @if(Session::has('status'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.success("{{ session('status') }}");
@endif
</script>

@endsection
