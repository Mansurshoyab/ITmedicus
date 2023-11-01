@extends('master')

@section('body')

<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Company </div>
                </div>
                <div class="ibox-body">
                    <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="col-sm-12 form-group">
                                    <label for="">Name : </label>
                                    <input type="text" value="{{ $company->name }}" name="name"  class="form-control">
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-sm-12 form-group">
                                    <label for="">Email : </label>
                                    <input type="email" value="{{ $company->email }}" name="email"  class="form-control">
                                    <div class="text-danger">
                                        @error('email')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-sm-12 form-group">
                                    <label for="">Name : </label>
                                    <input type="text" value="{{ $company->website }}" name="website" class="form-control" >
                                    <div class="text-danger">
                                        @error('website')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-12 form-group">
                                    <label for="Image"> </label>
                                    <div class="border text-center">
                                        <img class=" m-3" src="{{ asset('_uploads/'.$company->logo) }}" width="150" />
                                    </div>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input name="logo" class="form-control" type="file" value="{{ $company->image === 'image' ? 'selected' : '' }}">
                                    <div class="text-danger">
                                        @error('logo')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End PAGE CONTENT-->
@endsection