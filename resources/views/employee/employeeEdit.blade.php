@extends('master')

@section('body')

<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title"> Employee </div>
                </div>
                <div class="ibox-body">
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label> Name : </label>
                                <input name="name" value="{{ $employee->name }}" type="text" class="form-control" >
                                <div class="text-danger">
                                    @error('name')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label> Company : </label>
                                <select name="company_id" id="" class="form-control">
                                    @foreach ($company as $company)
                                    <option value="{{ $company->id }}" {{ $company->id == $employee->company_id ? 'selected' : ''}} >{{ $company->name }}</option>
                                @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('company_id')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label> Email : </label>
                                <input name="email" type="email" value="{{ $employee->email }}" class="form-control" >
                                <div class="text-danger">
                                    @error('email')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label> Phone : </label>
                                <input name="phone" type="text" value="{{ $employee->phone }}" class="form-control" >
                                <div class="text-danger">
                                    @error('phone')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End PAGE CONTENT-->
@endsection