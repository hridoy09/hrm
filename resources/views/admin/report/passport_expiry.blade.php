@extends('layouts.master')
@section('content')
<style>
    /* .dt-buttons{
        display: block!important;
    } */
</style>
<!-- Start Content-->

<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row ">

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title text-center">Passport Expiry Report</h4>


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">


                                    <table id="passport" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>

                                                <th>Name </th>
                                                <th>Surname </th>

                                                <th>passport Issue Date</th>
                                                <th>Passport Expiry Date</th>
                                                <th>Shop Name</th>
                                                <th>Shop Location</th>
                                                <th>Contact No</th>
                                                <th>Email</th>


                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach (@$passports as $passport )
                                                <tr>


                                                    <td>{{$passport->name}}</td>
                                                    <td>{{$passport->sur_name}}</td>

                                                    <td>{{$passport->pp_issue_date}}</td>
                                                    <td>{{$passport->pp_expiry_date}}</td>
                                                    <td>{{$passport->brance->name??''}}</td>
                                                    <td>{{$passport->brancelocation->location??''}}</td>
                                                    <td>{{$passport->contact_no}}</td>
                                                    <td>{{$passport->email}}</td>
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
{{-- end content --}}



@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#passport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv',  'print'

        ]
    } );
} );
</script>
@endsection
