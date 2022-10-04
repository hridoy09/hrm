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
                            <h4 class="header-title text-center">Web Config</h4>



                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">

                                    <form action="{{route('update.logo',$logo->id)}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Web Title</label><br>

                                            <input type="text" id="simpleinput"
                                                class="form-control  @error('title') is-invalid @enderror "
                                                name="title" placeholder=""  value="{{ @$logos->title }}">
                                            @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Large logo</label><br>
                                            <img class="w-25 mb-3" src="{{asset('admin/logo')}}/{{@$logos->lg_logo}}" alt="">
                                            <input type="file" id="simpleinput"
                                                class="form-control  @error('lg_logo') is-invalid @enderror" name="lg_logo"
                                                placeholder="Name">
                                            @error('lg_logo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Small logo</label><br>
                                            <img class="w-25 mb-3" src="{{asset('admin/logo')}}/{{@$logos->small_logo}}" alt="">
                                            <input type="file" id="simpleinput"
                                                class="form-control @error('small_logo') is-invalid @enderror"
                                                name="small_logo" placeholder="">
                                            @error('small_logo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Fav Icon</label><br>
                                            <img class="w-25 mb-3" src="{{asset('admin/logo')}}/{{@$logos->fav_icon}}" alt="">
                                            <input type="file" id="simpleinput"
                                                class="form-control @error('fav_icon') is-invalid @enderror"
                                                name="fav_icon" placeholder="">
                                            @error('fav_icon')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>





                                        <button
                                            class="btn btn-lg btn-outline-primary waves-effect waves-light float-end"
                                            type="submit">Submit</button>

                                    </form>
                                </div>
                                <!-- end col -->

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

 @if(Session::has('update'))
toastr.options =
{
 "closeButton" : true,
 "progressBar" : true
}
     toastr.success("{{ session('update') }}");
@endif
</script>

@endsection
