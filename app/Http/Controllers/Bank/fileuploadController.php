<?php

namespace App\Http\Controllers\Bank;

use App\Fileupload;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
        return view('fileuploads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $destinationPath = public_path();
        $destination_folder = $client_id;
        $destination_file_name = $request->file_name;
     
        $doc_id=$request->do_cid;
        $data=([
            'client_id' => $client_id,
            'doc_id' => $request->doc_id,
            'file_name' => $request->file_name,
            'remote_ip_address' => $request->ip(),
            'source_path' => storage_path(),
            'destination_path' => $destinationPath,
            'destination_folder' => $destination_folder,
            'destination_file_name' => $destination_file_name,
            'server_id' => $_SERVER['HTTP_HOST'],
            'mime_type' => $request->file_name,
            'port_no' => $_SERVER['SERVER_PORT'],
            'remarks' => $request->file_name,
            'status' => $request->file_name,
            "created_at" => now(),  
            "updated_at" => now(),  
        ]);

      
  
        $this->validate($request, [
             'filenames' => 'required',
             'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);

    if($request->hasfile('filenames'))
    {
    foreach($request->file('filenames') as $file)
    {
        $fileOriginalName= $file->getClientOriginalName();
        // $name = time().'.'.$file->extension();
        $fileName = time().'.'.$fileOriginalName;
        // $file->move(public_path().'/files/', $fileName); 
        $file->move($destinationPath.$destination_folder, $fileName);  
        $data[] = $fileName;  
    }
    }

    $file=json_encode($data);

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
}
