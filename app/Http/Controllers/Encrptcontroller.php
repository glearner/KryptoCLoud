<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use Zipper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;


class Encrptcontroller extends Controller
{
  public function __construct()
{
    $this->middleware('auth');
}
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
       $this->middleware('auth');
        return view('decrypt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->middleware('auth');
    $foot=$request->file('filez');
    $name=$foot->getClientOriginalName();
    $up = Upload::where('sfile', '=', $name)->first();

      $filename=time() .'.'.$up->ename;
      echo ($filename);
      Storage::disk('local')->put($filename,File::get($foot));
  Session::flash('success','File Decrypted successfully');
  return redirect()->route('upload.create',$up->id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

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
