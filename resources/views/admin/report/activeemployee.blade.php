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
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('delete'))
                    <div class="alert alert-danger">
                        {{ session('delete') }}
                    </div>
                    @endif
                    @if (session('update'))
                    <div class="alert alert-warning">
                        {{ session('update') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title text-center">Active Employee</h4>


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">


                                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>

                                                <th>Name </th>
                                                <th>Surname </th>
                                                <th>Date of birth</th>
                                                <th>Father name</th>
                                                <th>Mother name</th>
                                                <th>Salary </th>
                                                <th>Shop Name</th>
                                                <th>Shop Location</th>
                                                <th>Contact No</th>
                                                <th>Email</th>


                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach (@$employees as $employee )
                                                <tr>


                                                    <td>{{$employee->name}}</td>
                                                    <td>{{$employee->sur_name}}</td>
                                                    <td>{{$employee->bd_date}}</td>
                                                    <td>{{$employee->father_name}}</td>
                                                    <td>{{$employee->mother_name}}</td>
                                                    <td>{{$employee->salary}}</td>
                                                    <td>{{$employee->brance->name??''}}</td>
                                                    <td>{{$employee->brancelocation->location??''}}</td>
                                                    <td>{{$employee->contact_no}}</td>
                                                    <td>{{$employee->email}}</td>


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
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv',  'print'

        ]
    } );
} );
</script>
@endsection
