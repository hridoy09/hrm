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
                            <h4 class="header-title text-center">Work Permit Expiry Report</h4>


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">


                                    <table id="workpermit" class="table table-striped table-bordered dt-responsive nowrap">
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
                                                @foreach (@$workparmits as $workparmit )
                                                <tr>


                                                    <td>{{$workparmit->name}}</td>
                                                    <td>{{$workparmit->sur_name}}</td>

                                                    <td>{{$workparmit->work_issue_date}}</td>
                                                    <td>{{$workparmit->work_expiry_date}}</td>
                                                    <td>{{$workparmit->brance->name??''}}</td>
                                                    <td>{{$workparmit->brancelocation->location??''}}</td>
                                                    <td>{{$workparmit->contact_no}}</td>
                                                    <td>{{$workparmit->email}}</td>
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
    $('#workpermit').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv',  'print'

        ]
    } );
} );
</script>
@endsection
