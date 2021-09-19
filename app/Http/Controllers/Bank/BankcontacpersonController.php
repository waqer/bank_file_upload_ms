<?php

namespace App\Http\Controllers\Bank;
use App\Applicationuser;
use App\Bank;
use App\Bank_contact_person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BankcontacpersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        // create Bank account 
        return view('bankcontactperson.create');
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

        
       // dd($request->all());
        $session_user=Session::get('user_id');

        
        $data=([
            'password' => Hash::make($request->password),
            'is_bank' => 1,
            'is_active_status' => $request->is_active_status,
            'created_by' =>$session_user,
            'edited_by' =>$session_user,
            'authorized_by' =>$request->authorized_by,

                //**Admin part***//

            "bank_name" => $request->bank_name,
            "client_id" => $request->client_id,
            "bank_contactperson_name" => $request->bank_contactperson_name,
            "reg_no" => $request->reg_no,
            "bank_location" => $request->bank_location,
            "bank_website" => $request->bank_website,
            "bank_fax" => $request->bank_fax,
            "bank_phone" => $request->bank_phone,
            "bank_email" => $request->bank_email,

            "bank_contactperson_userid" => $request->bank_contactperson_userid, // later
            "bank_contactperson_phone" => $request->bank_contactperson_phone,
            "bank_contactperson_email" => $request->bank_contactperson_email,
            "bank_contactperson_designation" => $request->bank_contactperson_designation, 
            "bank_contactperson_department" => $request->bank_contactperson_department,
            "bank_contactperson_nid" => $request->bank_contactperson_nid,
            "bank_contactperson_branch" => $request->bank_contactperson_branch,
            "bank_contactperson_location" => $request->bank_contactperson_location,

            'remember_token' => Str::random(10),
            "created_at" => now(),    
        ]);

     
        $new_user_id=Applicationuser::create($data)->id;

        
    //    Administrator::create([
    //     "user_id" => $new_user_id, 
        
     
    //     "status" => $request->status,
    //     // 'created_by' =>$session_user,
    //     // 'edited_by' =>$session_user,
      
    //     ]);

       

        return redirect()->route('Admin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit( $contactperson)
    {
        //
       // dd($contactperson);

       // $session_user=Session::get('user_id');
       
        $user_details=Applicationuser::where('user_id',$contactperson)->first();
        
      

        return view('bankcontactperson.edit', [
            'results' => $user_details
        ]);

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank_contact_person $bank)
    {
        //

        dd($request->all());
        $session_user=Session::get('user_id');

        $data=$request->validate([
            'admin_name' => 'required',
            'admin_nid' => 'required',
            'admin_phone_no' => 'required',
            'admin_email' => 'required',
            'admin_designation' => 'required',
            'is_active_status' => 'required',
            'edited_by' =>$session_user, //pending
            'authorized_by' => 'required',
            'password' => 'required',
            
        ]);
        


  

       
        Applicationuser::where('user_id',$administrator)->update( $data );

        return redirect()->route('Admin.index')->with('status', 'Story Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank_contact_person $bank)
    {
        //
    }
}
