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
                               <h4 class="header-title text-center">Create your Brance.</h4>
                             

                               <div class="row d-flex justify-content-center">
                                   <div class="col-lg-8">
                                       <form action="{{route('brance.store')}}" method="POST"  enctype="multipart/form-data">
                                            @csrf

                                           <div class="mb-3">
                                               <label for="" class="form-label">Shop Name</label>
                                               <input type="text" id="" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Shop Name">
                                           </div>


                                           <div class="mb-3">
                                            <label for="" class="form-label">Location</label>
                                            <input type="text" id="" value="{{ old('location') }}" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Location">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Phone Number</label>
                                            <input type="numnber" id="" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" placeholder="phone number">
                                        </div>
                                      
                                        <div class="mb-3">
                                            <label for="" class="form-label">Controller Name</label>
                                            <input type="text" id="" class="form-control @error('controller_name') is-invalid @enderror" name="controller_name" value="{{ old('controller_name') }}" placeholder="Controller Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Shop account number</label>
                                            <input type="text" id="" class="form-control @error('acc_number') is-invalid @enderror" name="acc_number" value="{{ old('acc_number') }}" placeholder="Shop account number">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Shop contract Issue date</label>
                                            <input type="date" id="" class="form-control @error('shop_issue_date') is-invalid @enderror" name="shop_issue_date"  value="{{ old('shop_issue_date') }}" placeholder="Shop contract issue date">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Shop contract expiry date</label>
                                            <input type="date" id="" class="form-control @error('shop_expiry_date') is-invalid @enderror" name="shop_expiry_date" value="{{ old('shop_expiry_date') }}"  placeholder="shop contract expiry date">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Shop contract attachment</label>
                                            <input type="file" id="" class="form-control @error('shop_file') is-invalid @enderror" name="shop_file" value="{{ old('shop_file') }}" placeholder=" shop_file">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Home contract issue date</label>
                                            <input type="date" id="" class="form-control @error('home_issue_date') is-invalid @enderror" name="home_issue_date" placeholder="Home contract issue date">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Home contract expiry date</label>
                                            <input type="date" id="" class="form-control @error('home_expiry_date') is-invalid @enderror" name="home_expiry_date" placeholder="Home contract expiry date">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Home Contract attachment</label>
                                            <input type="file" id="" class="form-control @error('home_file') is-invalid @enderror" name="home_file" placeholder="Home Contract attachment">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Project</label>
                                            <input type="text" id="" class="form-control @error('project') is-invalid @enderror" name="project" placeholder="Project">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Senapid decision</label>
                                            <input type="file" id="" class="form-control @error('senapid_decision') is-invalid @enderror" name="senapid_decision" placeholder="Senapid decision">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Starowstwo decision</label>
                                            <input type="file" id="" class="form-control @error('starowstwo_decision') is-invalid @enderror" name="starowstwo_decision" placeholder="Starowstwo decision">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Haccp/ghp book</label>
                                            <input type="file" id="" class="form-control @error('book') is-invalid @enderror"
                                            name="book" placeholder="Haccp/ghp book">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Water test report</label>
                                            <input type="file" id="" class="form-control @error('water_test') is-invalid @enderror" name="water_test" placeholder="water test report">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Ventilation report</label>
                                            <input type="file" id="" class="form-control @error('vantilation_report') is-invalid @enderror" name="vantilation_report" placeholder="Ventilation report">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Garbage </label>
                                            <input type="file" id="" class="form-control @error('garbage') is-invalid @enderror"  name="garbage" placeholder="Garbage">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Electronic contract</label>
                                            <input type="file" id="" class="form-control @error('electronic_contract') is-invalid @enderror" name="electronic_contract" placeholder="Electronic Contract">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">BHP attactment 1</label>
                                            <input type="file" id="" class="form-control @error('bhp1') is-invalid @enderror" name="bhp1" placeholder="BHP attactment 1">
                                        </div><div class="mb-3">
                                            <label for="" class="form-label">BHP attactment 2</label>
                                            <input type="file" id="" class="form-control @error('bhp2') is-invalid @enderror" name="bhp2" placeholder="BHP attactment 1">
                                        </div><div class="mb-3">
                                            <label for="" class="form-label">BHP attactment 3</label>
                                            <input type="file" id="" class="form-control @error('bhp3') is-invalid @enderror" name="bhp3" placeholder="BHP attactment 1">
                                        </div><div class="mb-3">
                                            <label for="" class="form-label">BHP attactment 4</label>
                                            <input type="file" id="" class="form-control @error('bhp4') is-invalid @enderror" name="bhp4" placeholder="BHP attactment 1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">KRS</label>
                                            <input type="file" id="" class="form-control @error('krs') is-invalid @enderror" name="krs" placeholder="KRS">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Oil contract</label>
                                            <input type="file" id="" class="form-control @error('oil_contract') is-invalid @enderror" name="oil_contract" placeholder="Oil contract">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Makro/Coca-cola/Tauron login information</label>
                                            <input type="file" id="" class="form-control @error('login_info') is-invalid @enderror" name="login_info" placeholder="Makro/Coca-cola/Tauron login information">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Ali baba contract</label>
                                            <input type="file" id="" class="form-control @error('ali_baba_contract') is-invalid @enderror"  name="ali_baba_contract"  placeholder="Ali baba contract">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Beverage Contract</label>
                                            <input type="file" id="" class="form-control @error('beverage_contract') is-invalid @enderror" name="beverage_contract" placeholder="Beverage Contract">
                                        </div>

                                           <div class="mb-3">
                                               <label for="" class="form-label">Email</label>
                                               <input type="email" id="" name="email"
                                                   class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email">
                                           </div>

                                           <div class="mb-3">
                                               <label for="" class="form-label">Show/Hide Password</label>
                                               <div class="input-group input-group-merge">
                                                   <input type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"
                                                       placeholder="Enter your password">
                                                   <div class="input-group-text" data-password="false">
                                                       <span class="password-eye"></span>
                                                   </div>
                                               </div>
                                           </div>




                                           <button
                                               class="btn btn-lg btn-outline-primary waves-effect waves-light float-end"
                                               type="submit">Submit</button>







                                       </form>
                                   </div> <!-- end col -->

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