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
                            <h4 class="header-title text-center">List brance</h4>


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">
                                    <a class="btn btn-primary my-3" href="{{route('brance.create')}}">Add shop</a>

                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>shop name</th>
                                                <th>location</th>
                                                <th>phone number</th>
                                                <th>controller  Name</th>
                                                <th>shop account number</th>
                                                <th>shop Contract Issue date</th>
                                                <th>shop Contract Expiry date</th>
                                                <th>Shop Contract Attachment</th>
                                                <th>home contract Issue date</th>
                                                <th>home contract Expiry Date </th>
                                                <th>home contract Attachment File</th>
                                                <th>Project </th>
                                                <th>Senapid decision</th>
                                                <th>Starowstwo decision</th>
                                                <th>Haccp/ghp book </th>
                                                <th>Water taste report</th>
                                                <th>Ventilation report</th>
                                                <th>Garbage (Bin Contract)</th>
                                                <th>Electronic contract</th>
                                                <th>BHP Attachment 1</th>
                                                <th>BHP Attachment 2</th>
                                                <th>BHP Attachment 3</th>
                                                <th>BHP Attachment 4</th>
                                                <th>KRS </th>
                                                <th>Oil contract </th>
                                                <th>Makro/ Coca-cola/ Tauron login information</th>
                                                <th>Ali baba Contract </th>
                                                <th>Beverage contract </th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th>Status Action</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($brances as $brance )
                                                <tr>

                                                    <td>{{@$brance->name}} </td>
                                                    <td>{{@$brance->location}} </td>
                                                    <td>{{@$brance->number}} </td>
                                                    <td>{{@$brance->controller_name}} </td>
                                                    <td>{{@$brance->acc_number}} </td>
                                                    <td>{{@$brance->shop_issue_date}} </td>
                                                    <td>{{@$brance->shop_expiry_date}} </td>
                                                    <td>{{@$brance->shop_file}} <a class="mx-1" href="{{asset('admin/shop/shop_file')}}/{{$brance->shop_file}} " download><i class="fas fa-cloud-download-alt"></i></a> </td>
                                                    <td>{{@$brance->home_issue_date}} </td>
                                                    <td>{{@$brance->home_expiry_date}} </td>
                                                    <td>{{@$brance->home_file}} <a class="mx-1" href="{{asset('admin/shop/home_file')}}/{{$brance->home_file}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->project}} </td>
                                                    <td>{{@$brance->senapid_decision}} <a class="mx-1" href="{{asset('admin/shop/senapid_decision')}}/{{$brance->senapid_decision}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->starowstwo_decision}} <a class="mx-1" href="{{asset('admin/shop/starowstwo_decision')}}/{{$brance->starowstwo_decision}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->book}} <a class="mx-1" href="{{asset('admin/shop/book')}}/{{$brance->book}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->water_test}} <a class="mx-1" href="{{asset('admin/shop/water_test')}}/{{$brance->water_test}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->vantilation_report}} <a class="mx-1" href="{{asset('admin/shop/vantilation_report')}}/{{$brance->vantilation_report}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->garbage}} <a class="mx-1" href="{{asset('admin/shop/garbage')}}/{{$brance->garbage}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->electronic_contract}}<a class="mx-1" href="{{asset('admin/shop/electronic_contract')}}/{{$brance->electronic_contract}} " download><i class="fas fa-cloud-download-alt"></i></a> </td>
                                                    <td>{{@$brance->bhp1}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$brance->bhp1}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->bhp2}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$brance->bhp2}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->bhp3}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$brance->bhp3}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->bhp4}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$brance->bhp4}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->krs}} <a class="mx-1" href="{{asset('admin/shop/krs')}}/{{$brance->krs}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->oil_contract}} <a class="mx-1" href="{{asset('admin/shop/oil_contract')}}/{{$brance->oil_contract}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->login_info}} <a class="mx-1" href="{{asset('admin/shop/login_info')}}/{{$brance->login_info}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->ali_baba_contract}} <a class="mx-1" href="{{asset('admin/shop/ali_baba_contract')}}/{{$brance->ali_baba_contract}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->beverage_contract}} <a class="mx-1" href="{{asset('admin/shop/beverage_contract')}}/{{$brance->beverage_contract}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$brance->email}} </td>
                                                    <td>{{@$brance->password}} </td>


                                                    @if($brance->Status == 1)
                                                    <td><span class="badge badge-success bg-success">Active</span></td>
                                                    @else
                                                    <td><span class="badge badge-danger bg-danger">Inactive</span></td>
                                                    @endif
                                                    <td>
                                                        @if($brance->Status == 1)
                                                        <a  class="btn btn-success" href="{{ URL::to('admin/change-status-shop/'.$brance->id) }}"><i
                                                                class="fa fa-arrow-circle-up"></i></a>
                                                            @else
                                                                <a class="btn btn-danger" href="{{ URL::to('admin/change-status-shop/'.$brance->id) }}"><i
                                                                class="fa fa-arrow-circle-down"></i></a>

                                                                @endif

                                                    </td>
                                                    <td>

                                                 <a type="button" class="btn btn-warning" href="{{route('brance.edit', $brance->id)}}"><i class=" fas fa-edit"></i></a>
                                                 <button  class="btn btn-danger deleteBranceButton"   data-brance_id="{{$brance->id}}"><i class="fas fa-archive"></i></a>

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

 <!-- Danger Alert Modal -->
 <div id="deleteBranceModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-white"></i>
                    <h4 class="mt-2 text-white">Alert!</h4>
                    <p class="mt-3 text-white">Are you sure to delete this employee?</p>
                    <a href="" class=" deleteBranceAnchore"><button type="button" class="btn btn-light my-2">Continue</button></a>
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
            $('body').on('click','.deleteBranceButton',function(){
                let deleteBranceModal = $('#deleteBranceModal');
                let url = `{{route('brance.delete','')}}/${$(this).data('brance_id')}`;
                deleteBranceModal.find('.deleteBranceAnchore').attr('href',url);
                deleteBranceModal.modal('show');
            });
        })(jQuery);








@if(Session::has('status'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.success("{{ session('status') }}");
@endif

@if(Session::has('delete'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.error("{{ session('delete') }}");
@endif
</script>

@endsection
