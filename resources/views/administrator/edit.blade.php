@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit an Admin

                 
                   <a href=" {{ url()->previous() }}" class="float-right">Back</a> 
                </div>

                <div class="card-body">
                    <form action="{{ route('Admin.update', [$results->user_id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="admin_name">Admin Name</label>
                            <input type="text" name="admin_name" class="form-control @error('admin_name') is-invalid @enderror" value="{{ old('admin_name', $results->admin_name  ) }} "/>
                            @error('admin_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="admin_nid">Admin NID</label>
                            <input type="text" name="admin_nid" class="form-control @error('admin_nid') is-invalid @enderror" value="{{ old('admin_nid', $results->admin_nid ) }}"/>
                            @error('admin_nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="admin_phone_no">Admin Phone No</label>
                            <input type="text" name="admin_phone_no" class="form-control @error('admin_phone_no') is-invalid @enderror" value="{{ old('admin_phone_no', $results->admin_phone_no ) }} "/>
                            @error('admin_phone_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="admin_email">admin_email</label>
                            <input type="text" name="admin_email" class="form-control @error('admin_email') is-invalid @enderror" value="{{ old('admin_email', $results->admin_email ) }} "/>
                            @error('admin_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="admin_designation">admin_designation</label>
                            <input type="text" name="admin_designation" class="form-control @error('admin_designation') is-invalid @enderror" value="{{ old('admin_designation', $results->admin_designation ) }} "/>
                            @error('admin_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="is_active_status">admin_status</label>
                            <input type="text" name="is_active_status" class="form-control @error('is_active_status') is-invalid @enderror" value="{{ old('is_active_status', $results->is_active_status ) }} "/>
                            @error('is_active_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="authorized_by">authorized_by</label>
                            <input type="text" name="authorized_by" class="form-control @error('authorized_by') is-invalid @enderror" value="{{ old('authorized_by', $results->authorized_by ) }} "/>
                            @error('authorized_by')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password', $results->password ) }} "/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
