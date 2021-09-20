@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Contact Person List

                    <a href=" {{ route('bank.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('bankcontactperson.update', [$results->user_id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="bank_contactperson_name">bank_contactperson_name</label>
                            <input type="text" name="bank_contactperson_name" class="form-control @error('bank_contactperson_name') is-invalid @enderror" value="{{ old('bank_contactperson_name', $results->bank_contactperson_name  ) }} "/>
                            @error('bank_contactperson_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_phone">bank_contactperson_phone</label>
                            <input type="text" name="bank_contactperson_phone" class="form-control @error('bank_contactperson_phone') is-invalid @enderror" value="{{ old('bank_contactperson_phone', $results->bank_contactperson_phone ) }}"/>
                            @error('bank_contactperson_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_email">bank_contactperson_email</label>
                            <input type="text" name="bank_contactperson_email" class="form-control @error('bank_contactperson_email') is-invalid @enderror" value="{{ old('bank_contactperson_email', $results->bank_contactperson_email ) }} "/>
                            @error('bank_contactperson_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_designation">bank_contactperson_designation</label>
                            <input type="text" name="bank_contactperson_designation" class="form-control @error('bank_contactperson_designation') is-invalid @enderror" value="{{ old('bank_contactperson_designation', $results->bank_contactperson_designation ) }} "/>
                            @error('bank_contactperson_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_department">bank_contactperson_department</label>
                            <input type="text" name="bank_contactperson_department" class="form-control @error('bank_contactperson_department') is-invalid @enderror" value="{{ old('bank_contactperson_department', $results->bank_contactperson_department ) }} "/>
                            @error('bank_contactperson_department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_nid">bank_contactperson_nid</label>
                            <input type="text" name="bank_contactperson_nid" class="form-control @error('bank_contactperson_nid') is-invalid @enderror" value="{{ old('bank_contactperson_nid', $results->bank_contactperson_nid ) }} "/>
                            @error('bank_contactperson_nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_branch">bank_contactperson_branch</label>
                            <input type="text" name="bank_contactperson_branch" class="form-control @error('bank_contactperson_branch') is-invalid @enderror" value="{{ old('bank_contactperson_branch', $results->bank_contactperson_branch ) }} "/>
                            @error('bank_contactperson_branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_contactperson_location">bank_contactperson_location</label>
                            <input type="text" name="bank_contactperson_location" class="form-control @error('bank_contactperson_location') is-invalid @enderror" value="{{ old('bank_contactperson_location', $results->bank_contactperson_location ) }} "/>
                            @error('bank_contactperson_location')
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

                        <div class="form-group">
                            <label for="is_active_status">status</label>
                            <input type="text" name="is_active_status" class="form-control @error('is_active_status') is-invalid @enderror" value="{{ old('is_active_status', $results->is_active_status ) }} "/>
                            @error('is_active_status')
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
