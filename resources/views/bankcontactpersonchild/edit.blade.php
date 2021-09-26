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
                    <form action="{{ route('bankcontactpersonchild.update', [$results->user_id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @if(Session::get('user_privilidge')== 0)
                        <div class="form-group">
                           <label for="client_id">client_id</label>
                           <input type="text" name="client_id" class="form-control @error('client_id') is-invalid @enderror" value="{{ old('client_id', $results->client_id ) }}"/>
                           @error('client_id')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }} </strong>
                               </span>
                           @enderror
                       </div> 
                       @endif

                        <div class="form-group">
                            <label for="child_contactperson_name">child_contactperson_name</label>
                            <input type="text" name="child_contactperson_name" class="form-control @error('child_contactperson_name') is-invalid @enderror" value="{{ old('child_contactperson_name', $results->child_contactperson_name  ) }} "/>
                            @error('child_contactperson_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="child_contactperson_phone">child_contactperson_phone</label>
                            <input type="text" name="child_contactperson_phone" class="form-control @error('child_contactperson_phone') is-invalid @enderror" value="{{ old('child_contactperson_phone', $results->child_contactperson_phone ) }}"/>
                            @error('child_contactperson_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="child_contactperson_email">child_contactperson_email</label>
                            <input type="text" name="child_contactperson_email" class="form-control @error('child_contactperson_email') is-invalid @enderror" value="{{ old('child_contactperson_email', $results->child_contactperson_email ) }} "/>
                            @error('child_contactperson_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="child_contactperson_designation">child_contactperson_designation</label>
                            <input type="text" name="child_contactperson_designation" class="form-control @error('child_contactperson_designation') is-invalid @enderror" value="{{ old('child_contactperson_designation', $results->child_contactperson_designation ) }} "/>
                            @error('child_contactperson_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="child_contactperson_department">child_contactperson_department</label>
                            <input type="text" name="child_contactperson_department" class="form-control @error('child_contactperson_department') is-invalid @enderror" value="{{ old('child_contactperson_department', $results->child_contactperson_department ) }} "/>
                            @error('child_contactperson_department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="child_contactperson_nid">child_contactperson_nid</label>
                            <input type="text" name="child_contactperson_nid" class="form-control @error('child_contactperson_nid') is-invalid @enderror" value="{{ old('child_contactperson_nid', $results->child_contactperson_nid ) }} "/>
                            @error('child_contactperson_nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} </strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="child_contactperson_branch">child_contactperson_branch</label>
                            <input type="text" name="child_contactperson_branch" class="form-control @error('child_contactperson_branch') is-invalid @enderror" value="{{ old('child_contactperson_branch', $results->child_contactperson_branch ) }} "/>
                            @error('child_contactperson_branch')
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
