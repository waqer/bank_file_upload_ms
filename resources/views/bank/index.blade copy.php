@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Of Contact person lists

                    <a href=" {{ route('bankcontactperson.create') }}" class="float-right">Add Contact Person</a>
                </div>
               
                <div class="card-body ">
                    <table class="table table-hover table-striped 
                    table-condensed tasks-table" >
                        <thead >
                            <tr>

                                <th>ID</th>
                                <th>bank_contactperson_name</th>
                                <th>client_id</th>
                                <th>bank_contactperson_phone</th>
                                <th>bank_contactperson_email</th>
                                <th>bank_contactperson_designation</th>
                                <th>bank_contactperson_department</th>
                                <th>bank_contactperson_nid</th>
                                <th>bank_contactperson_branch</th>
                                <th>bank_contactperson_location</th>
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
                                        {{ $result->bank_contactperson_name }}
                                    </td>
                                    <td>
                                        {{ $result->client_id}}
                                    </td>
                                    <td>
                                        {{ $result->bank_contactperson_phone}}
                                    </td>
                                    <td>
                                        {{ $result->bank_contactperson_email}}
                                    </td>
                                    <td>
                                        {{ $result->bank_contactperson_designation}}
                                    </td>
                                    <td>
                                        {{ $result->bank_contactperson_department}}
                                    </td>
                                    
                                    <td>
                                        {{ $result->bank_contactperson_nid}}
                                    </td>
                                    <td>
                                        {{ $result->bank_contactperson_branch}}
                                    </td>
                                    <td>
                                        {{ $result->bank_contactperson_location}}
                                    </td>
                                   
                                    
                                   
                                    <td>
                                        <a href="{{ route('bankcontactperson.edit', [$result->user_id] ) }}" class="btn btn-secondary">Edit</a>                          
                                        <form action=" {{ route('bankcontactperson.destroy', [$result->user_id]) }}" method="POST" style="display:inline-block">
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
                    <div class="d-flex justify-content-center">

                        <a href="{{ route('bank.create') }}" class="btn btn-primary">ADD Sub Bank User</a>
                      </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
