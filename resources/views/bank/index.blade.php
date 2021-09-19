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
                                <th>bank_name</th>
                                <th>client_id</th>
                                <th>reg_no</th>
                                <th>bank_location</th>
                                <th>bank_website</th>
                                <th>bank_fax</th>
                                <th>bank_phone</th>
                                <th>bank_email</th>
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
