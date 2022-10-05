@extends('layouts.master')
@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Role Management</h2>
                            </div>
                            <div class="pull-right">
                                @can('role-create')
                                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                                @endcan
                            </div>
                        </div>



                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($roles as $key => $role)
                            <tr>
                                @php
                                $i=0;
                                @endphp
                                <td>{{ ++$i }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                    @can('role-edit')
                                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                    @endcan
                                    @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                                    $role->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        {!! $roles->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('script')
<script>
    @if(Session::has('success'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('success') }}");
    @endif
</script>

@endsection
