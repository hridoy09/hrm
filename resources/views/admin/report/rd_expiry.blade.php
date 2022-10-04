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
                            <h4 class="header-title text-center">Residence Card Expiry Report</h4>


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">


                                    <table id="residence" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>

                                                <th>Name </th>
                                                <th>Surname </th>

                                                <th>Residence Issue Date</th>
                                                <th>Residence Expiry Date</th>
                                                <th>Shop Name</th>
                                                <th>Shop Location</th>
                                                <th>Contact No</th>
                                                <th>Email</th>


                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach (@$residences as $redience )
                                                <tr>


                                                    <td>{{$redience->name}}</td>
                                                    <td>{{$redience->sur_name}}</td>

                                                    <td>{{$redience->rd_issue_date}}</td>
                                                    <td>{{$redience->rd_expiry_date}}</td>
                                                    <td>{{$redience->brance->name??''}}</td>
                                                    <td>{{$redience->brancelocation->location??''}}</td>
                                                    <td>{{$redience->contact_no}}</td>
                                                    <td>{{$redience->email}}</td>
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
    $('#residence').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv',  'print'

        ]
    } );
} );
</script>
@endsection
