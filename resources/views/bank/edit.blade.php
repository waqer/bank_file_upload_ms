@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Bank

                    <a href=" {{ route('bank.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('bank.update', [$results->user_id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror" value="{{ old('bank_name', $results->bank_name ) }} "/>
                            @error('bank_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="client_id">client_id</label>
                            <input type="text" name="client_id" class="form-control @error('client_id') is-invalid @enderror" value="{{ old('client_id', $results->client_id ) }}"/>
                            @error('client_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="reg_no">reg_no</label>
                            <input type="text" name="reg_no" class="form-control @error('reg_no') is-invalid @enderror" value="{{ old('reg_no', $results->reg_no ) }}"/>
                            @error('reg_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_location">bank_location</label>
                            <input type="text" name="bank_location" class="form-control @error('bank_location') is-invalid @enderror" value="{{ old('bank_location', $results->bank_location ) }}"/>
                            @error('bank_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_website">bank_website</label>
                            <input type="text" name="bank_website" class="form-control @error('bank_website') is-invalid @enderror" value="{{ old('bank_website', $results->bank_website ) }}"/>
                            @error('bank_website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_fax">bank_fax</label>
                            <input type="text" name="bank_fax" class="form-control @error('bank_fax') is-invalid @enderror" value="{{ old('bank_fax', $results->bank_fax ) }}"/>
                            @error('bank_fax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_phone">bank_phone</label>
                            <input type="text" name="bank_phone" class="form-control @error('bank_phone') is-invalid @enderror" value="{{ old('bank_phone', $results->bank_phone ) }}"/>
                            @error('bank_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bank_email">bank_email</label>
                            <input type="text" name="bank_email" class="form-control @error('bank_email') is-invalid @enderror" value="{{ old('bank_email', $results->bank_email ) }}"/>
                            @error('bank_email')
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
