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
                    <form action="{{ route('fileupload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="file_name">File Name</label>
                            <input type="text" name="file_name" class="form-control @error('file_name') is-invalid @enderror" value="{{ old('file_name', $results->file_name ) }} "/>
                            @error('file_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="doc_id">doc_id</label>
                            <input type="text" name="doc_id" class="form-control @error('doc_id') is-invalid @enderror" value="{{ old('doc_id', $results->doc_id ) }}"/>
                            @error('doc_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="remarks">remarks</label>
                            <input type="text" name="remarks" class="form-control @error('remarks') is-invalid @enderror" value="{{ old('remarks', $results->remarks ) }}"/>
                            @error('remarks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mime_type">mime_type</label>
                            <input type="text" name="mime_type" class="form-control @error('mime_type') is-invalid @enderror" value="{{ old('mime_type', $results->mime_type ) }}"/>
                            @error('mime_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="status">status</label>
                            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $results->status) }}"/>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                       
{{--
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
                            <label for="file">Upload File</label>
                            {{-- <input type="file" name="filenames[]" class="form-control"  multiple="multiple"> --}}
                            <input type="file" name="filenames[]" class="form-control"  >
                        </div>

                        <button class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


