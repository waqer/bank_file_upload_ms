<?php

namespace App\Http\Controllers\Admin;

use App\Administrator;
use App\Applicationuser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $admins=Applicationuser::where('is_admin', 1)->paginate(10);

        return view('administrator.index', [
            'results' => $admins
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
        return view('administrator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //  dd($request)->all();

        $session_user=Session::get('user_id');
        $data=([
            'password' => Hash::make($request->password),
            'is_admin' => 1,
            'status' => 1,
            'created_by' =>$session_user,
            'edited_by' =>$session_user,
            'authorized_by' =>$request->authorized_by,
            'remember_token' => Str::random(10),
            "created_at" => now(),    
        ]);
        $new_user_id=Applicationuser::create($data)->id;

        
       Administrator::create([
        "user_id" => $new_user_id, 
        "admin_name" => $request->admin_name,
        "admin_nid" => $request->admin_nid,
        "admin_phone_no" => $request->admin_phone_no,
        "admin_email" => $request->admin_email,
        "admin_designation" => $request->admin_designation,
        "admin_status" => $request->admin_status,
        'created_by' =>$session_user,
        'edited_by' =>$session_user,
      
        ]);

       

        return redirect()->route('Admin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show(Administrator $administrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $request)
    {
        //
        $session_user=Session::get('user_id');
        
        $user_details=Applicationuser::where('user_id',$session_user)->first();
        

        return view('administrator.edit', [
            'results' => $user_details
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $administrator)
    {
        // 'authorized_by' => 'required',
        // 'password' => 'required',

        $session_user=Session::get('user_id');

        $data = $request->validate([
            'admin_name' => 'required',
            'admin_nid' => 'required',
            'admin_phone_no' => 'required',
            'admin_email' => 'required',
            'admin_designation' => 'required',
            'admin_status' => 'required',
            'created_by' =>$session_user,
            'edited_by' =>$session_user,
        ]);

       
        $data_cred = $request->validate([
            'authorized_by' => 'required',
            'password' => 'required',
        ]);

        //dd($data);
        Administrator::where('user_id',$administrator)->update( $data );
        Applicationuser::where('user_id',$administrator)->update( $data_cred );

        return redirect()->route('Admin.index')->with('status', 'Story Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy( $administrator)
    {
        //
        Administrator::where('user_id',$administrator)->delete();
        Applicationuser::where('user_id',$administrator)->delete();
        return redirect()->route('Admin.index')->with('status', 'Story Deleted Successfully!');

    }
}
