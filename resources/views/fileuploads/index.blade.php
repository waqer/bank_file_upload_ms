@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add Bank

                    <a href=" {{ route('bank.index') }}" class="float-right">Bank List</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('fileuploadController.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror" value="{{ old('bank_name', '' ) }} "/>
                            @error('bank_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="client_id">client_id</label>
                            <input type="text" name="client_id" class="form-control @error('client_id') is-invalid @enderror" value="{{ old('client_id', '' ) }}"/>
                            @error('client_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="bank_contactperson_name">bank_contactperson_name</label>
                            <input type="text" name="bank_contactperson_name" class="form-control @error('bank_contactperson_name') is-invalid @enderror" value="{{ old('bank_contactperson_name', '' ) }}"/>
                            @error('bank_contactperson_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="reg_no">reg_no</label>
                            <input type="text" name="reg_no" class="form-control @error('reg_no') is-invalid @enderror" value="{{ old('reg_no', '' ) }}"/>
                            @error('reg_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_location">bank_location</label>
                            <input type="text" name="bank_location" class="form-control @error('bank_location') is-invalid @enderror" value="{{ old('bank_location', '' ) }}"/>
                            @error('bank_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_website">bank_website</label>
                            <input type="text" name="bank_website" class="form-control @error('bank_website') is-invalid @enderror" value="{{ old('bank_website', '' ) }}"/>
                            @error('bank_website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_fax">bank_fax</label>
                            <input type="text" name="bank_fax" class="form-control @error('bank_fax') is-invalid @enderror" value="{{ old('bank_fax', '' ) }}"/>
                            @error('bank_fax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_phone">bank_phone</label>
                            <input type="text" name="bank_phone" class="form-control @error('bank_phone') is-invalid @enderror" value="{{ old('bank_phone', '' ) }}"/>
                            @error('bank_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_email">bank_email</label>
                            <input type="text" name="bank_email" class="form-control @error('bank_email') is-invalid @enderror" value="{{ old('bank_email', '' ) }}"/>
                            @error('bank_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="bank_contactperson_userid">bank_contactperson_userid</label>
                            <input type="text" name="bank_contactperson_userid" class="form-control @error('bank_contactperson_userid') is-invalid @enderror" value="{{ old('bank_contactperson_userid', '' ) }} "/>
                            @error('bank_contactperson_userid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- 
                            
                            //uncomment bellow
                            <div class="form-group">
                            <label for="bank_contactperson_name">bank_contactperson_name</label>
                            <input type="text" name="bank_contactperson_name" class="form-control @error('bank_contactperson_name') is-invalid @enderror" value="{{ old('bank_contactperson_name', '' ) }} "/>
                            @error('bank_contactperson_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_phone">bank_contactperson_phone</label>
                            <input type="text" name="bank_contactperson_phone" class="form-control @error('bank_contactperson_phone') is-invalid @enderror" value="{{ old('bank_contactperson_phone', '' ) }} "/>
                            @error('bank_contactperson_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_email">bank_contactperson_email</label>
                            <input type="text" name="bank_contactperson_email" class="form-control @error('bank_contactperson_email') is-invalid @enderror" value="{{ old('bank_contactperson_email', '' ) }} "/>
                            @error('bank_contactperson_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_designation">bank_contactperson_designation</label>
                            <input type="text" name="bank_contactperson_designation" class="form-control @error('bank_contactperson_designation') is-invalid @enderror" value="{{ old('bank_contactperson_designation', '' ) }} "/>
                            @error('bank_contactperson_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_department">bank_contactperson_department</label>
                            <input type="text" name="bank_contactperson_department" class="form-control @error('bank_contactperson_department') is-invalid @enderror" value="{{ old('bank_contactperson_department', '' ) }} "/>
                            @error('bank_contactperson_department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="bank_contactperson_nid">bank_contactperson_nid</label>
                            <input type="text" name="bank_contactperson_nid" class="form-control @error('bank_contactperson_nid') is-invalid @enderror" value="{{ old('bank_contactperson_nid', '' ) }} "/>
                            @error('bank_contactperson_nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="bank_contactperson_branch">bank_contactperson_branch</label>
                            <input type="text" name="bank_contactperson_branch" class="form-control @error('bank_contactperson_branch') is-invalid @enderror" value="{{ old('bank_contactperson_branch', '' ) }} "/>
                            @error('bank_contactperson_branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_location">bank_contactperson_location</label>
                            <input type="text" name="bank_contactperson_location" class="form-control @error('bank_contactperson_location') is-invalid @enderror" value="{{ old('bank_contactperson_location', '' ) }} "/>
                            @error('bank_contactperson_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_nid">bank_contactperson_nid</label>
                            <input type="text" name="bank_contactperson_nid" class="form-control @error('bank_contactperson_nid') is-invalid @enderror" value="{{ old('bank_contactperson_nid', '' ) }} "/>
                            @error('bank_contactperson_nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="is_active_status">status</label>
                            <input type="text" name="is_active_status" class="form-control @error('is_active_status') is-invalid @enderror" value="{{ old('is_active_status', '' ) }} "/>
                            @error('is_active_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="authorized_by">authorized_by</label>
                            <input type="text" name="authorized_by" class="form-control @error('authorized_by') is-invalid @enderror" value="{{ old('authorized_by', '' ) }} "/>
                            @error('authorized_by')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>  --}}

                        <div class="form-group">
                            <label for="password">Upload Files</label>
                            <input type="file" name="filenames[]" class="form-control"  multiple="multiple">
                        </div>

                        <button class="btn btn-primary">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


