@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard
                </div>
               
                
                <div class="row">
                <div class="col-md-12 t-md-2">


                @if(Session::get('user_privilidge')== 0)
                <div class="row  justify-content-md-center ">

                  <div class="card text-white bg-primary mb-3 " style="max-width: 18rem;">
                    <div class="card-header">Admin</div>
                    <div class="card-body">
                      
          
                      <a href="{{ route('Admin.create') }}" class="btn btn-dark">Add Admin</a>
                      <a href="{{ route('Admin.index') }}" class="btn btn-dark offset-md-2" style="margin-top: 2%;">View Admins</a>
                    </div>
                  </div>
                  

                </div>
                @endif


               

                <div class="row  justify-content-md-center ">

                  @if(Session::get('user_privilidge')<= 1)

                  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Bank</div>
                    <div class="card-body">
                    @if(Session::get('user_privilidge')== 0)
                      <a href="{{ route('bank.create') }}" class="btn btn-dark">Add Bank</a>
                    @endif
                      <a href="{{ route('bank.index') }}" class="btn btn-dark offset-md-2" style="margin-top: 2%;">View Banks</a>
                    </div>
                  </div>

                  @endif

                  @if(Session::get('user_privilidge')<= 2)
                  <div class="card text-white bg-secondary mb-3 offset-md-1" style="max-width: 18rem;">
                    <div class="card-header">Contact Person</div>
                    <div class="card-body">

                    @if(Session::get('user_privilidge')<= 1)
                      <a href="{{ route('bankcontactperson.create') }}" class="btn btn-dark "  >Add Contact Person</a>
                      @endif
                      <a href="{{ route('bankcontactperson.index') }}" class="btn btn-dark offset-md-2" style="margin-top: 2%;">View Contact Persons</a>
                    </div>
                  </div>

                  @endif

                  @if(Session::get('user_privilidge')<= 3)
                  <div class="card bg-light mb-3 offset-md-1" style="max-width: 18rem;">
                    <div class="card-header">Child</div>
                    <div class="card-body">
                  
                      @if(Session::get('user_privilidge')<= 2)
                      <a href="{{ route('bankcontactpersonchild.create') }}" class="btn btn-dark " >Add Child Person</a>
                      @endif

                      <a href="{{ route('bankcontactpersonchild.index') }}" class="btn btn-dark offset-md-2" style="margin-top: 2%;">View Child Persons</a>
                    </div>
                  </div>
                  @endif

                 

                </div>

                
               

                @if(Session::get('user_privilidge')<= 4)

                <div class="row  justify-content-md-center ">


                  <div class="card text-dark   bg-warning mb-3 " style="max-width: 18rem;">
                    <div class="card-header">Files</div>
                    <div class="card-body">
                      <a href="{{ route('fileupload.create') }}" class="btn btn-dark " >Upload Files</a>
                      <a href="{{ route('fileupload.index') }}" class="btn btn-dark offset-md-2" style="margin-top: 2%;">View Files</a>
                    </div>
                  </div>

                 


                </div>

                @endif


                {{-- @if(Session::get('user_privilidge')<= 3)

                <div class="row  justify-content-md-center ">



                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title">Warning card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card text-white bg-dark mb-3 offset-md-1" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title">Info card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>


                </div>

                @endif --}}
                 
              </div> 
              
              
              {{-- <div class="col-md-4 ">

                <div class="row  ">


                 
                  
                  <div class="card text-dark   bg-warning mb-3 " style="max-width: 18rem;">
                    <div class="card-header">Files</div>
                    <div class="card-body">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>

              </div> --}}

            </div>
                 
                
            </div>
        </div>
    </div>
</div>
@endsection
