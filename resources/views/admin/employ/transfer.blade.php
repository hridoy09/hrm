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
                            <h4 class="header-title text-center">Add Employee</h4>
                            @if (session('update'))
                            <div class="alert alert-success">
                                {{ session('update') }}
                            </div>
                            @endif


                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <a class="btn btn-primary my-3"  href="{{route('employ.list')}}" >Back</a>
                                    <form action="{{route('transfer.update',$employee->id)}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label"> Old Shop Name</label>

                                            <input  class="form-control " type="text" value="{{$employee->brance->name}}" disabled>
                                            {{-- <select class="form-select @error('shop_id') is-invalid @enderror"
                                                name="shop_id" aria-label="Default select example">
                                         @foreach ($brances as $brance )
          
                                         <option value="{{$brance->id}}" {{$brance->id == $employee->shop_id ? 'selected' : ''}}>{{$brance->name}}</option>
                                         @endforeach
                                             
                                            </select>
                                            @error('shop_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror --}}

                                        </div>

                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label"> New Shop Name</label>
                                            <select class="form-select "
                                                name="new_shop_id" aria-label="Default select example">
                                         @foreach ($brances as $brance )
          
                                         <option value="{{$brance->id}}">{{$brance->name}}</option>
                                         @endforeach
                                             
                                            </select>
                                           

                                        </div>
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Old Shop Location</label>
                                                <input  class="form-control " type="text" value="{{$employee->brance->location}}" disabled>
                                            {{-- <select
                                                class="form-select @error('shop_location_id') is-invalid @enderror"
                                                name="shop_location_id" aria-label="Default select example">
                                               
                                                @foreach ($brances as $brance )
                                            
                                                <option value="{{$brance->id}}"{{$brance->id == $employee->shop_location_id ? 'selected' : ''}}>{{$brance->location}}</option>
                                              @endforeach
                                            </select> --}}
                                           

                                        </div>
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">New Shop Location</label>

                                            <select
                                                class="form-select "
                                                name="new_location_id" aria-label="Default select example">
                                               
                                                @foreach ($brances as $brance )
                                            
                                                <option value="{{$brance->id}}">{{$brance->location}}</option>
                                              @endforeach
                                            </select>
                                           

                                        </div>
                                      

                                        <button
                                            class="btn btn-lg btn-outline-primary waves-effect waves-light float-end"
                                            type="submit">Update</button>

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
