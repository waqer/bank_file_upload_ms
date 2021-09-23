<?php

namespace App\Http\Controllers\Bank;

use App\Fileupload;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class fileuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client_id=Session::get('client_id');
        $user_id=Session::get('user_id');

        $files=Fileupload::where('client_id', $client_id)
        ->where('uploaded_by', $user_id)
        ->paginate(10);

        return view('fileuploads.index', [
            'results' => $files
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
        return view('fileuploads.create');
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

       // dd( storage_path());
        $request->ip();
        $_SERVER['SERVER_PORT'];
        $_SERVER['HTTP_HOST'];
        $client_id=Session::get('client_id');
        $user_id=Session::get('user_id');
        $destinationPath = public_path();
        $destination_folder = "\bankfiles\\".$client_id."\\";
        $destination_file_name = $this->clean_file_name($request->file_name);
        
       

     
        $data=([
            'client_id' => $client_id,
            'doc_id' => $request->doc_id,
            'file_name' => $request->file_name,
            'remote_ip_address' => $request->ip(),
            'source_path' => storage_path(),
            'destination_path' => $destinationPath,
            'destination_folder' => $destination_folder,
            'server_id' => $_SERVER['HTTP_HOST'],
            'mime_type' => $request->mime_type,
            'port_no' => $_SERVER['SERVER_PORT'],
            'remarks' => $request->remarks,
            'status' => $request->status,
            "created_at" => now(),  
            "updated_at" => now(), 
            "uploaded_by" => $user_id,
            
        ]);

      
  
        $this->validate($request, [
             'filenames' => 'required',
             'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);

        $count=0;
        $fileNamenew = array();
    if($request->hasfile('filenames'))
    {
    foreach($request->file('filenames') as $file)
    {

        $fileOriginalName= $file->getClientOriginalName();
        // $name = time().'.'.$file->extension();
        $fileName = time().'.'.$fileOriginalName;
         $fileName = $destination_file_name.'_'.time()."_".$count.".".$file->extension(); 
        // $file->move(public_path().'/files/', $fileName); 
      
      
        $file->move($destinationPath.$destination_folder, $fileName);  
        //$data[] = $fileName;
        $count++;

        //$fileNamenew=json_encode($fileName);
        
      array_push($fileNamenew,$fileName);
    }

    $fileNamenew=json_encode($fileNamenew);
    $data_addition=['destination_file_name' =>$fileNamenew ];

    $data=(array_merge($data, $data_addition));

    Fileupload::create($data);

    }



   // $file=json_encode($data);

    // Applicationuser::create($data)->id;

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function show(Fileupload $fileupload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function edit(Fileupload $fileupload)
    {
        //
        return view('fileuploads.edit', [
            'results' => $fileupload
        ]);
 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fileupload $fileupload)
    {
        //


        $session_user=Session::get('user_id');

        $destinationPath = public_path();
        $destination_folder = "\bankfiles\\".$client_id."\\";
        $destination_file_name = $this->clean_file_name($request->file_name);
        
       

     
        $data=([
            'client_id' => $client_id,
            'doc_id' => $request->doc_id,
            'file_name' => $request->file_name,
            'remote_ip_address' => $request->ip(),
            'source_path' => storage_path(),
            'destination_path' => $destinationPath,
            'destination_folder' => $destination_folder,
            'server_id' => $_SERVER['HTTP_HOST'],
            'mime_type' => $request->mime_type,
            'port_no' => $_SERVER['SERVER_PORT'],
            'remarks' => $request->remarks,
            'status' => $request->status,
            "created_at" => now(),  
            "updated_at" => now(), 
            "uploaded_by" => $user_id,
            
        ]);

      
  
     
        $count=0;
        $fileNamenew = array();

        $data=$request->validate([
            'file_name' => 'required',
            'doc_id' => 'required',
            'remarks' => 'required',
            'mime_type' => 'required',
            'status' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);

        $data_addition=['edited_by' =>$session_user, ];
        $data=(array_merge($data, $data_addition));
        
       // dd($data);
       
        // array_push($data,$datax);
        // dd($data);
        

        if($request->hasfile('filenames'))
    {
    foreach($request->file('filenames') as $file)
    {

        $fileOriginalName= $file->getClientOriginalName();
        // $name = time().'.'.$file->extension();
        $fileName = time().'.'.$fileOriginalName;
         $fileName = $destination_file_name.'_'.time()."_".$count.".".$file->extension(); 
        // $file->move(public_path().'/files/', $fileName); 
      
      
        $file->move($destinationPath.$destination_folder, $fileName);  
        //$data[] = $fileName;
        $count++;

        //$fileNamenew=json_encode($fileName);
        
      array_push($fileNamenew,$fileName);
    }

    $fileNamenew=json_encode($fileNamenew);
    $data_addition=['destination_file_name' =>$fileNamenew ];

    $data=(array_merge($data, $data_addition));

    Fileupload::create($data);

    }

  

       
        Applicationuser::update( $data );

        return redirect()->route('bank.index')->with('status', 'Story Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fileupload $fileupload)
    {
        //
    }


     function clean_file_name($string) {
        $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '_', $string); // Removes special chars.
     }


     function upload_file($string) {
        $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '_', $string); // Removes special chars.
     }
}
