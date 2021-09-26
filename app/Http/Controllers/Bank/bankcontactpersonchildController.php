<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Applicationuser;
use Session;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class bankcontactpersonchildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        if(Session::get('user_privilidge')<1){
   
            $contact_persons=Applicationuser::where('is_child', 1)
              ->paginate(10);
        }
        
        else{
            $client_id=Session::get('client_id');
            $contact_persons=Applicationuser::where('client_id', $client_id)
            ->where('is_child', 1)
            ->paginate(10);
        }
        
        return view('bankcontactpersonchild.index', [
            'results' => $contact_persons
        ]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bankcontactpersonchild.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      //  dd($request->all());

        $session_user=Session::get('user_id');
        
        $session_client_id=Session::get('client_id');
        
        $data=([
            'password' => $request->password,
            'is_child' => 1,
            'is_active_status' => $request->is_active_status,
            'created_by' =>$session_user,
            'parent_id' =>$session_user,
            'edited_by' =>$session_user,
            'authorized_by' =>$request->authorized_by,

                //**Admin part***//

            "child_contactperson_name" => $request->child_contactperson_name,
            "client_id" => $session_client_id,
            "child_contactperson_phone" => $request->child_contactperson_phone,
            "child_contactperson_email" => $request->child_contactperson_email,
            "child_contactperson_designation" => $request->child_contactperson_designation,
            "child_contactperson_designation" => $request->child_contactperson_designation,
            "child_contactperson_branch" => $request->child_contactperson_branch,
            "child_contactperson_location" => $request->child_contactperson_location,
            "child_contactperson_nid" => $request->child_contactperson_nid,

            // "bank_contactperson_userid" => $request->bank_contactperson_userid, // later
            // "bank_contactperson_phone" => $request->bank_contactperson_phone,
            // "bank_contactperson_email" => $request->bank_contactperson_email,
            // "bank_contactperson_designation" => $request->bank_contactperson_designation, 
            // "bank_contactperson_department" => $request->bank_contactperson_department,
            // "bank_contactperson_nid" => $request->bank_contactperson_nid,
            // "bank_contactperson_branch" => $request->bank_contactperson_branch,
            // "bank_contactperson_location" => $request->bank_contactperson_location,

            'remember_token' => Str::random(10),
            "created_at" => now(),    
        ]);



        if(Session::get('user_privilidge')== 0){
            $data_addition=['client_id' =>$request->client_id,
            'parent_id' =>$request->parent_id
                ];
             $data=(array_merge($data, $data_addition));


        }

     
        $new_user_id=Applicationuser::create($data)->id;
        return redirect()->route('bankcontactpersonchild.index')->with('status', 'Sub Bank created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicationuser  $applicationuser
     * @return \Illuminate\Http\Response
     */
    public function edit( $applicationuser)
    {
        //
        $applicationuser=Applicationuser::find($applicationuser);
        return view('bankcontactpersonchild.edit', [
            'results' => $applicationuser
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  \App\Applicationuser  $applicationuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $applicationuserd)
    {
        //

        
 
        $session_user=Session::get('user_id');
        
        $session_client_id=Session::get('client_id');
        
        $data=([
            'password' => $request->password,
            'is_child' => 1,
            'is_active_status' => $request->is_active_status,
            'edited_by' =>$session_user,

                //**Admin part***//

            "child_contactperson_name" => $request->child_contactperson_name,
            // "client_id" => $request->client_id,
            "child_contactperson_phone" => $request->child_contactperson_phone,
            "child_contactperson_email" => $request->child_contactperson_email,
            "child_contactperson_designation" => $request->child_contactperson_designation,
            "child_contactperson_department" => $request->child_contactperson_department,
            "child_contactperson_branch" => $request->child_contactperson_branch,
            "child_contactperson_location" => $request->child_contactperson_location,
            "child_contactperson_nid" => $request->child_contactperson_nid,


            'remember_token' => Str::random(10),
            "created_at" => now(),    
        ]);



        if(Session::get('user_privilidge')== 0){
            $data_addition=['client_id' =>$request->client_id,
            'parent_id' =>$request->parent_id
                ];
             $data=(array_merge($data, $data_addition));

        }

        $new_user_id=Applicationuser::where('user_id',$applicationuserd)->update($data);

        return redirect()->route('bankcontactpersonchild.index')->with('status', 'Sub Bank edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
