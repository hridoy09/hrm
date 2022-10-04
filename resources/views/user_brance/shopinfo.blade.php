@extends('layouts.master')
@section('content')
<style>
    /* .dt-buttons{
        display: none!important;
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

                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12">
                             <h3>Shop Information</h3>

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



                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach (@$shopinfos as $shopinfo )
                                                <tr>

                                                    <td>{{@$shopinfo->name}} </td>
                                                    <td>{{@$shopinfo->location}} </td>
                                                    <td>{{@$shopinfo->number}} </td>
                                                    <td>{{@$shopinfo->controller_name}} </td>
                                                    <td>{{@$shopinfo->acc_number}} </td>
                                                    <td>{{@$shopinfo->shop_issue_date}} </td>
                                                    <td>{{@$shopinfo->shop_expiry_date}} </td>
                                                    <td>{{@$shopinfo->shop_file}} <a class="mx-1" href="{{asset('admin/shop/shop_file')}}/{{$shopinfo->shop_file}} " download><i class="fas fa-cloud-download-alt"></i></a> </td>
                                                    <td>{{@$shopinfo->home_issue_date}} </td>
                                                    <td>{{@$shopinfo->home_expiry_date}} </td>
                                                    <td>{{@$shopinfo->home_file}} <a class="mx-1" href="{{asset('admin/shop/home_file')}}/{{$shopinfo->home_file}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->project}} </td>
                                                    <td>{{@$shopinfo->senapid_decision}} <a class="mx-1" href="{{asset('admin/shop/senapid_decision')}}/{{$shopinfo->senapid_decision}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->starowstwo_decision}} <a class="mx-1" href="{{asset('admin/shop/starowstwo_decision')}}/{{$shopinfo->starowstwo_decision}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->book}} <a class="mx-1" href="{{asset('admin/shop/book')}}/{{$shopinfo->book}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->water_test}} <a class="mx-1" href="{{asset('admin/shop/water_test')}}/{{$shopinfo->water_test}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->vantilation_report}} <a class="mx-1" href="{{asset('admin/shop/vantilation_report')}}/{{$shopinfo->vantilation_report}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->garbage}} <a class="mx-1" href="{{asset('admin/shop/garbage')}}/{{$shopinfo->garbage}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->electronic_contract}}<a class="mx-1" href="{{asset('admin/shop/electronic_contract')}}/{{$shopinfo->electronic_contract}} " download><i class="fas fa-cloud-download-alt"></i></a> </td>
                                                    <td>{{@$shopinfo->bhp1}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$shopinfo->bhp1}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->bhp2}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$shopinfo->bhp2}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->bhp3}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$shopinfo->bhp3}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->bhp4}} <a class="mx-1" href="{{asset('admin/shop/bhp')}}/{{$shopinfo->bhp4}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->krs}} <a class="mx-1" href="{{asset('admin/shop/krs')}}/{{$shopinfo->krs}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->oil_contract}} <a class="mx-1" href="{{asset('admin/shop/oil_contract')}}/{{$shopinfo->oil_contract}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->login_info}} <a class="mx-1" href="{{asset('admin/shop/login_info')}}/{{$shopinfo->login_info}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->ali_baba_contract}} <a class="mx-1" href="{{asset('admin/shop/ali_baba_contract')}}/{{$shopinfo->ali_baba_contract}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->beverage_contract}} <a class="mx-1" href="{{asset('admin/shop/beverage_contract')}}/{{$shopinfo->beverage_contract}} " download><i class="fas fa-cloud-download-alt"></i></a></td>
                                                    <td>{{@$shopinfo->email}} </td>
                                                    <td>{{@$shopinfo->password}} </td>


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

<script>

</script>

@endsection
