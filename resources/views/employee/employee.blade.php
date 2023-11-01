@extends('master')

@section('body')

<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div>
                    {{-- @if (Session::get('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif --}}
                </div>
                <div class="ibox-head">
                    <div class="ibox-title"> Employee </div>
                </div>
                <div class="ibox-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label> Name : </label>
                                <input name="name" type="text" class="form-control">
                                {{-- <div class="text-danger">
                                    @error('philosophy')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div> --}}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label> Company : </label>
                                <input name="company" type="text" class="form-control">
                                {{-- <div class="text-danger">
                                    @error('philosophy')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label> Email : </label>
                                <input name="email" type="email" class="form-control">
                                {{-- <div class="text-danger">
                                    @error('philosophy')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div> --}}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label> Phone : </label>
                                <input name="phone" type="text" class="form-control">
                                {{-- <div class="text-danger">
                                    @error('philosophy')
                                        <strong class="font-weight-bold">{{ $message }}</strong>
                                    @enderror
                                </div> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit">Submit</button>
                        </div>
                    </form>
                    <hr>
                    <!-- Data Table Start -->
                        <div class="row">
                           <div class="col-md-12">
                               <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                   <thead>
                                       <tr>
                                           <th> Name </th>
                                           <th> Company </th>
                                           <th> Email </th>
                                           <th> Phone </th>
                                           <th width="120">Action</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       {{-- @foreach ($philosophys as $philosophy)
                                       <tr>
                                           <td>{{ $philosophy->philosophy }}</td>
                                           <td class="action"> 
                                               <a href="{{ route('philosophy.edit', $philosophy->id) }}" class="btn btn-default btn-sm float-left mr-3"><i class="fa fa-edit" aria-hidden="true"></i> Edit </a>
                                               <form action="{{  route('philosophy.destroy', $philosophy->id) }}" method="POST">
                                                   @csrf
                                                   @method('delete')
                                                   <button type="submit" id="delete" class="btn btn-danger btn-sm float-left">
                                                       <i class="fa fa-trash" aria-hidden="true"> Delete</i>
                                                   </button>
                                               </form>
                                           </td>
                                       </tr>
                                       @endforeach --}}
                                   </tbody>
                               </table>
                           </div>
                        </div>
                       <!-- Data Table End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->

<!-- Delete Aleart Start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all delete buttons by their id
        var deleteButtons = document.querySelectorAll('#delete');

        // Add a click event listener to each delete button
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Show a confirmation dialog
                if (confirm('Are you sure you want to delete this item?')) {
                    // If the user confirms, submit the form
                    event.target.closest('form').submit();
                }
            });
        });
    });
</script>
<!-- Delete Aleart End -->
    
@endsection