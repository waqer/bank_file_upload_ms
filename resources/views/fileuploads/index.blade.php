@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Of uploaded File

                    <a href=" {{ route('fileupload.create') }}" class="float-right">Add File</a>
                </div>
               
                <div class="card-body ">
                    <table class="table table-hover table-striped 
                    table-condensed tasks-table" >
                        <thead >
                            <tr>

                                <th>ID</th>
                                <th>client_id</th>
                                <th>file_name</th>
                                <th>mime_type</th>
                                <th>remarks</th>
                                <th>status</th>
                                <th>Edited By</th>
                                <th>Uploaded BY</th>
                                
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $results as $result)
                                <tr>
                                    <td>
                                        {{ $result->upload_id_tracking_no }}
                                    </td>
                                    <td>
                                        {{ $result->client_id}}
                                    </td>
                                    <td>
                                        {{ $result->file_name}}
                                    </td>
                                    <td>
                                        {{ $result->mime_type}}
                                    </td>
                                    <td>
                                        {{ $result->remarks}}
                                    </td>
                                  
                                    
                                    <td>
                                        {{ $result->status}}
                                    </td>
                                    <td>
                                        {{ $result->edited_by}}
                                    </td>
                                    <td>
                                        {{ $result->uploaded_by}}
                                    </td>
                                    
                                   
                                    <td>
                                        <a href="{{ route('fileupload.edit', [$result->upload_id_tracking_no] ) }}" class="btn btn-secondary">Edit</a>                          
                                        <form action=" {{ route('fileupload.destroy', [$result->upload_id_tracking_no]) }}" method="POST" style="display:inline-block">
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


