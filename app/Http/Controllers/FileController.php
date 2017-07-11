<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use Zipper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;
use App\Post;


class FileController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $up=new Upload;
      $foot=$request->file('filez');

      $f=$foot->getClientOriginalExtension();

      $filename=time() .'.'.'kc';
      $time=time();
      if($foot){
        Storage::disk('local')->put($filename,File::get($foot));
      }
      $up->ename=$f;
      $up->sfile=$filename;
      $up->time=$time;
      $up->save();
      Session::flash('success','File Encrypted successfully');

        return redirect()->route('upload.show',$up->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post=Upload::find($id);
        return view('file.show')->withPost($post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $post=Upload::find($id);
      $p='/app'.$post->sfile;
      $path = storage_path($p);
      $size = Storage::url($post->sfile);
      echo($size);
    // return response()->download($path);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $p=Upload::find($id);
      $file= Storage::disk('local')->get($p->sfile);
      echo($file);
      return response()->download($file);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Upload::find($id);
        $path=Storage::get($post->sfile);
        echo($path);
        return response()->download($path);

    }
}
