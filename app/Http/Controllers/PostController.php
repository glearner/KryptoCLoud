<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Post;
use Session;



class PostController extends Controller
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
      return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'body'=>'required'
      ]);

      $post=new Post;
      $encrypted = Crypt::encryptString($request->body);
      $post->body=$encrypted;
      $post->save();

      Session::flash('success','Encryption done successfully');
      return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post=Post::find($id);


        return view('post.view')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post=Post::find($id);
      $decrypted = Crypt::decryptString($post->body);
      $post->body=$decrypted;
        Session::flash('success','Decryption done successfully');
        return view('post.view')->withPost($post);

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
        $post=Post::find($id);
        $this->validate($request,[
          'body'=>'required'
        ]);
        $encrypted = Crypt::encryptString($request->body);
        $post->body=$encrypted;
        $post->save();

        Session::flash('success','Encryption done successfully again');
        return redirect()->route('posts.view',$post->id);



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
