@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Of Banks

                    {{-- <a href=" {{ route('bankcontactperson.create') }}" class="float-right">Add Contact Person</a> --}}
                </div>
               
                <div class="card-body ">
                    <table class="table table-hover table-striped 
                    table-condensed tasks-table" >
                        <thead >
                            <tr>

                                <th>ID</th>
                                <th>Bank Name</th>
                                <th>Client ID</th>
                                <th>Reg no</th>
                                <th>Bank location</th>
                                <th>bank website</th>
                                <th>bank fax</th>
                                <th>bank phone</th>
                                <th>bank email</th>
                                <th>status</th>
                                <th>Authorized By</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $results as $result)
                                <tr>
                                    <td>
                                        {{ $result->user_id }}
                                    </td>
                                    <td>
                                        {{ $result->bank_name }}
                                    </td>
                                    <td>
                                        {{ $result->client_id}}
                                    </td>
                                    <td>
                                        {{ $result->reg_no}}
                                    </td>
                                    <td>
                                        {{ $result->bank_location}}
                                    </td>
                                    <td>
                                        {{ $result->bank_website}}
                                    </td>
                                    <td>
                                        {{ $result->bank_fax}}
                                    </td>
                                    
                                    <td>
                                        {{ $result->bank_phone}}
                                    </td>
                                    <td>
                                        {{ $result->bank_email}}
                                    </td>
                                    <td>
                                        {{ $result->is_active_status}}
                                    </td>
                                    <td>
                                        {{ $result->authorized_by}}
                                    </td>
                                   
                                    
                                   
                                    <td>
                                        <a href="{{ route('bank.edit', [$result->user_id] ) }}" class="btn btn-secondary">Edit</a>                          
                                        <form action=" {{ route('bank.destroy', [$result->user_id]) }}" method="POST" style="display:inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $results->links() }}
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
