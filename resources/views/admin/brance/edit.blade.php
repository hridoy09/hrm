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
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <form action="{{route('brance.update', $brance->id)}}" method="POST"  enctype="multipart/form-data">
                                         @csrf

                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Shop Name</label>
                                            <input type="text" id="simpleinput"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{$brance->name}}" placeholder="Shop Name">
                                        </div>


                                        <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Location</label>
                                         <input type="text" id="simpleinput" class="form-control @error('location') is-invalid @enderror" value="{{$brance->location}}" name="location" placeholder="Location">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Phone Number</label>
                                         <input type="numnber" id="simpleinput" class="form-control @error('number') is-invalid @enderror" value="{{$brance->number}}" name="number" placeholder="phone number">
                                     </div>
                                   
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Controller Name</label>
                                         <input type="text" id="simpleinput" class="form-control @error('controller_name') is-invalid @enderror" value="{{$brance->controller_name}}" name="controller_name" placeholder="Controller Name">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Shop account number</label>
                                         <input type="text" id="simpleinput" class="form-control @error('acc_number') is-invalid @enderror" value="{{$brance->acc_number}}" name="acc_number" placeholder="Shop account number">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Shop contract Issue date</label>
                                         <input type="date" id="simpleinput" class="form-control @error('shop_issue_date') is-invalid @enderror" value="{{$brance->shop_issue_date}}" name="shop_issue_date" placeholder="Shop contract issue date">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Shop contract expiry date</label>
                                         <input type="date" id="simpleinput" class="form-control @error('shop_expiry_date') is-invalid @enderror" value="{{$brance->shop_expiry_date}}" name="shop_expiry_date" placeholder="shop contract expiry date">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Shop contract attachment</label>
                                         <input type="file" id="simpleinput" class="form-control @error('shop_file') is-invalid @enderror" value="{{$brance->shop_file}}" name="shop_file" placeholder=" shop_file">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Home contract issue date</label>
                                         <input type="date" id="simpleinput" class="form-control @error('home_issue_date') is-invalid @enderror" value="{{$brance->home_issue_date}}" name="home_issue_date" placeholder="Home contract issue date">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Home contract expiry date</label>
                                         <input type="date" id="simpleinput" class="form-control @error('home_expiry_date') is-invalid @enderror"  value="{{$brance->home_expiry_date}}" name="home_expiry_date" placeholder="Home contract expiry date">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Home Contract attachment</label>
                                         <input type="file" id="simpleinput" class="form-control @error('home_file') is-invalid @enderror" value="{{$brance->home_file}}" name="home_file" placeholder="Home Contract attachment">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Project</label>
                                         <input type="text" id="simpleinput" class="form-control @error('project') is-invalid @enderror" value="{{$brance->Project}}" name="project" placeholder="Project">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Senapid decision</label>
                                         <input type="file" id="simpleinput" class="form-control @error('senapid_decision') is-invalid @enderror" value="{{$brance->senapid_decision}}" name="senapid_decision" placeholder="Senapid decision">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Starowstwo decision</label>
                                         <input type="file" id="simpleinput" class="form-control @error('starowstwo_decision') is-invalid @enderror" value="{{$brance->starowstwo_decision}}" name="starowstwo_decision" placeholder="Starowstwo decision">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput"  class="form-label">Haccp/ghp book</label>
                                         <input type="file" id="simpleinput"  class="form-control @error('book') is-invalid @enderror"
                                         name="book" value="{{$brance->book}}" placeholder="Haccp/ghp book">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Water test report</label>
                                         <input type="file" id="simpleinput" class="form-control @error('water_test') is-invalid @enderror" value="{{$brance->water_test}}" name="water_test" placeholder="water test report">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Ventilation report</label>
                                         <input type="file" id="simpleinput" class="form-control @error('vantilation_report') is-invalid @enderror" name="vantilation_report" value="{{$brance->vantilation_report}}" placeholder="Ventilation report">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Garbage </label>
                                         <input type="file" id="simpleinput" class="form-control @error('garbage') is-invalid @enderror"  value="{{$brance->garbage}}" name="garbage" placeholder="Garbage">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Electronic contract</label>
                                         <input type="file" id="simpleinput" class="form-control @error('electronic_contract') is-invalid @enderror" name="electronic_contract" value="{{$brance->electronic_contract}}" placeholder="Electronic Contract">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">BHP attactment 1</label>
                                         <input type="file" id="simpleinput" class="form-control @error('bhp1') is-invalid @enderror" value="{{$brance->bghp1}}" name="bhp1" placeholder="BHP attactment 1">
                                     </div><div class="mb-3">
                                         <label for="simpleinput" class="form-label">BHP attactment 2</label>
                                         <input type="file" id="simpleinput" class="form-control @error('bhp2') is-invalid @enderror"  value="{{$brance->bghp2}}" name="bhp2" placeholder="BHP attactment 1">
                                     </div><div class="mb-3">
                                         <label for="simpleinput" class="form-label">BHP attactment 3</label>
                                         <input type="file" id="simpleinput" class="form-control @error('bhp3') is-invalid @enderror"  value="{{$brance->bghp3}}"  name="bhp3" placeholder="BHP attactment 1">
                                     </div><div class="mb-3">
                                         <label for="simpleinput" class="form-label">BHP attactment 4</label>
                                         <input type="file" id="simpleinput" class="form-control @error('bhp4') is-invalid @enderror"  value="{{$brance->bghp4}}" name="bhp4" placeholder="BHP attactment 1">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">KRS</label>
                                         <input type="file" id="simpleinput" class="form-control @error('krs') is-invalid @enderror"  value="{{$brance->krs}}" name="krs" placeholder="KRS">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Oil contract</label>
                                         <input type="file" id="simpleinput" class="form-control @error('oil_contract') is-invalid @enderror" value="{{$brance->oil_contract}}"  name="oil_contract" placeholder="Oil contract">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Makro/Coca-cola/Tauron login information</label>
                                         <input type="file" id="simpleinput" class="form-control @error('login_info') is-invalid @enderror" value="{{$brance->login_info}}" name="login_info" placeholder="Makro/Coca-cola/Tauron login information">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Ali baba contract</label>
                                         <input type="file" id="simpleinput" class="form-control @error('ali_baba_contract') is-invalid @enderror"  name="ali_baba_contract" value="{{$brance->ali_baba_contract}}"  placeholder="Ali baba contract">
                                     </div>
                                     <div class="mb-3">
                                         <label for="simpleinput" class="form-label">Beverage Contract</label>
                                         <input type="file" id="simpleinput" class="form-control @error('beverage_contract') is-invalid @enderror" name="beverage_contract" value="{{$brance->email}}" placeholder="Beverage Contract">
                                     </div>

                                        <div class="mb-3">
                                            <label for="example-email" class="form-label">Email</label>
                                            <input type="email" id="example-email" name="email"value="{{$brance->email}}"
                                                class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Show/Hide Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" name="password" value="{{$brance->password}}" id="password" class="form-control @error('password') is-invalid @enderror"
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
