<?php

namespace App\Http\Controllers\Bank;
use App\Applicationuser;
use App\Bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BankinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      /*
      previous
        $client_id=Session::get('client_id');
        $contact_persons=Applicationuser::where('client_id', $client_id)
        ->where('is_parent', 1)
        ->paginate(10);
        */
        $client_id=Session::get('client_id');
        
        if(Session::get('user_privilidge')< 1){
   
            $banks=Applicationuser::where('is_bank', 1)
        ->paginate(10);
        }
        
        else{
            
            $banks=Applicationuser::where('client_id', $client_id)
            ->where('is_parent', 1)
            ->paginate(10);
        }


        return view('bank.index', [
            'results' => $banks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create Bank account 
        return view('bank.create');
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


        $session_user=Session::get('user_id');

        
        $data=([
            'password' => $request->password,
            'is_bank' => 1,
            'is_active_status' => $request->is_active_status,
            'created_by' =>$session_user,
            'edited_by' =>$session_user,
            'authorized_by' =>$request->authorized_by,

                //**Admin part***//

            "bank_name" => $request->bank_name,
            "client_id" => $request->client_id,
            // "bank_contactperson_name" => $request->bank_contactperson_name,
            "reg_no" => $request->reg_no,
            "bank_location" => $request->bank_location,
            "bank_website" => $request->bank_website,
            "bank_fax" => $request->bank_fax,
            "bank_phone" => $request->bank_phone,
            "bank_email" => $request->bank_email,

            'remember_token' => Str::random(10),
            "created_at" => now(),    
        ]);

        $new_user_id=Applicationuser::create($data)->id;
       // dd($new_user_id);

        
    //    Administrator::create([
    //     "user_id" => $new_user_id, 
        
     
    //     "status" => $request->status,
    //     // 'created_by' =>$session_user,
    //     // 'edited_by' =>$session_user,
      
    //     ]);

       

        return redirect()->route('bank.index');

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
    public function edit(Applicationuser $bank)
    {
        //

        //dd($bank);
       
        return view('bank.edit', [
            'results' => $bank
        ]);
 
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicationuser $bank)
    {
        //

        $session_user=Session::get('user_id');

        
        $data=([
            'password' => $request->password,
            'is_active_status' => $request->is_active_status,

            'edited_by' =>$session_user,


                //**Admin part***//

            "bank_name" => $request->bank_name,
            "client_id" => $request->client_id,
            // "bank_contactperson_name" => $request->bank_contactperson_name,
            "reg_no" => $request->reg_no,
            "bank_location" => $request->bank_location,
            "bank_website" => $request->bank_website,
            "bank_fax" => $request->bank_fax,
            "bank_phone" => $request->bank_phone,
            "bank_email" => $request->bank_email,

            'remember_token' => Str::random(10),
            "created_at" => now(),    
        ]);

        $bank->update($data);
       // dd($new_user_id);

        
    //    Administrator::create([
    //     "user_id" => $new_user_id, 
        
     
    //     "status" => $request->status,
    //     // 'created_by' =>$session_user,
    //     // 'edited_by' =>$session_user,
      
    //     ]);

       

        return redirect()->route('bank.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicationuser $bank)
    {
        //
        $bank->delete();
        return redirect()->route('bank.index')->with('status', 'Deleted Successfully!');
    }
}
