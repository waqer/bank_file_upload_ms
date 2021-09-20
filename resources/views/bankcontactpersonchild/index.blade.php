@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Of Admins

                    <a href=" {{ route('Admin.create') }}" class="float-right">Add Admin</a>
                </div>
               
                <div class="card-body ">
                    <table class="table table-hover table-striped 
                    table-condensed tasks-table" >
                        <thead >
                            <tr>

                                <th>ID</th>
                                <th>Name</th>
                                <th>NID</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Status</th>
                                <th>Edited By</th>
                                <th>Created BY</th>
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
                                        {{ $result->admin_name}}
                                    </td>
                                    <td>
                                        {{ $result->admin_nid}}
                                    </td>
                                    <td>
                                        {{ $result->admin_phone_no}}
                                    </td>
                                    <td>
                                        {{ $result->admin_email}}
                                    </td>
                                    <td>
                                        {{ $result->admin_designation}}
                                    </td>
                                    
                                    <td>
                                        {{ $result->is_active_status}}
                                    </td>
                                    <td>
                                        {{ $result->edited_by}}
                                    </td>
                                    <td>
                                        {{ $result->created_by}}
                                    </td>
                                    
                                   
                                    <td>
                                        <a href="{{ route('Admin.edit', [$result->user_id] ) }}" class="btn btn-secondary">Edit</a>                          
                                        <form action=" {{ route('Admin.destroy', [$result->user_id]) }}" method="POST" style="display:inline-block">
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

                        <a href="{{ route('bank.create') }}" class="btn btn-primary">ADD Bank</a>
                      </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
