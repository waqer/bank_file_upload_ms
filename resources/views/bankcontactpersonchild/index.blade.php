@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sub Banks

                    {{-- <a href=" {{ route('bankcontactpersonchild.create') }}" class="float-right">Add Child</a> --}}
                </div>
               
                <div class="card-body ">
                    <table class="table table-hover table-striped 
                    table-condensed tasks-table" >
                        <thead >
                            <tr>

                                <th>ID</th>
                                @if(Session::get('user_privilidge')== 0)
                                <th>Client ID</th>
                                @endif
                                <th>  name</th>
                                <th>  phone</th>
                                <th>  email</th>
                                <th>  designation</th>
                                <th>  department</th>
                                <th>  nid</th>
                                <th>  branch</th>
                                <th>  location</th>
                                <th>  edited_by</th>
                                <th>status</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $results as $result)
                                <tr>
                                    <td>
                                        {{ $result->user_id }}
                                    </td>
                                        @if(Session::get('user_privilidge')== 0)
                                        <td>
                                            {{ $result->client_id }}
                                        </td>
                                      @endif
                                    <td>
                                        {{ $result->child_contactperson_name}}
                                    </td>
                                    <td>
                                        {{ $result->child_contactperson_phone}}
                                    </td>
                                    <td>
                                        {{ $result->child_contactperson_email}}
                                    </td>
                                    <td>
                                        {{ $result->child_contactperson_designation}}
                                    </td>
                                    <td>
                                        {{ $result->child_contactperson_department}}
                                    </td>
                                    
                                    <td>
                                        {{ $result->child_contactperson_nid}}
                                    </td>
                                    <td>
                                        {{ $result->child_contactperson_branch}}
                                    </td>
                                    <td>
                                        {{ $result->child_contactperson_location}}
                                    </td>
                                  
                                    <td>
                                        {{ $result->edited_by}}
                                    </td>
                                    
                                    <td>
                                        {{ $result->is_active_status}}
                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('bankcontactpersonchild.edit', [$result->user_id] ) }}" class="btn btn-secondary">Edit</a>                          
                                        <form action=" {{ route('bankcontactpersonchild.destroy', [$result->user_id]) }}" method="POST" style="display:inline-block">
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
