@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Inforamtion
                    <a href=" {{ route('login') }}" class="float-right">Bank Page</a>
                </div>
                

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            user_id
                          </div>
                          <div class="col-sm">
                              
                            {{$stories["user_id"]}}
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                admin_name
                            </div>
                            <div class="col-sm">
                                {{$stories["admin_name"]}} 
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                                admin_nid
                            </div>
                            <div class="col-sm">
                                {{$stories["admin_nid"]}}
                                
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                                admin_phone_no
                            </div>
                            <div class="col-sm">
                                {{$stories["admin_phone_no"]}}
                               
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                                admin_email
                            </div>
                            <div class="col-sm">
                                {{$stories["admin_email"]}}
                               
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                                admin_designation
                            </div>
                            <div class="col-sm">
                                {{$stories["admin_designation"]}}
                                
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                                admin_status
                            </div>
                            <div class="col-sm">
                                {{$stories["admin_status"]}}
                                
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                                edited_by
                            </div>
                            <div class="col-sm">
                                {{$stories["edited_by"]}}
                                
                            </div>
                          </div>

                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
