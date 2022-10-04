@extends('layouts.master')
@section('content')


<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row ">

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title text-center">All Notification</h4>


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">


                                    <a class="text-dark btn btn-md btn-primary m-2 ms-0" href="{{route('shopnotify.clear')}}">
                                        <small>Clear All</small>
                                    </a>
                                    <table id="datatable" class="table  table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Serial No.</th>
                                                <th>Nottification</th>
                                                <th>Read/Unread</th>


                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach(@$notifications??[] as $notification)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>

                                                    <td> <a class="dropdown-item notify-item active py-1 "@if ($notification->read_by_shop == null) href="{{route('notifyshop.view', $notification->id)}}" @else href="#"@endif>
                                                        <p class="@if ($notification->read_by_shop == null) text-bold @else text-muted @endif mb-0 ms-0 user-msg"
                                                            style="text-align:justify">{{ $notification->data }}</p>
                                                    </a></td>

                                                    <td>
                                                        @if ($notification->read_by_shop == null)
                                                        <p class="badge badge-success bg-danger " style="font-size: 16px;">Unread</p>

                                                        @else
                                                        <p class="badge badge-success bg-success " style="font-size: 16px;">Read</p>

                                                        @endif


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
{{-- end content --}}



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

