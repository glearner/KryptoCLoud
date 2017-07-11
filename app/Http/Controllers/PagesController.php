<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Mail;
use App\Post;
use Session;

use Illuminate\Http\Request;




class PagesController extends Controller{

  public function getIndex(){
    return view('pages.welcome');
  }

  public function getAbout(){
    $f='Gaurav';
    $l='Verma';
    $full=$f.' '.$l;
      return view('pages.about')->withFull($full);

  }
  public function getContact(){
      return view('pages.contact');

  }
  public function postContact(Request $request){
    $this->validate($request,[
      'email'=>'required|email',
      'subject'=>'required|min:3',
      'message'=>'required|min:10'
    ]);
    $data=array(
      'email'=>$request->email,
      'subject'=>$request->subject,
      'bodyMessage'=>$request->message
    );
    Mail::send('emails.contact',$data,function($message) use ($data){
      $message->from($data['email']);
      $message->to('gkverma1094@gmail.com');
      $message->subject($data['subject']);


    });
    Session::flash('success','Your Email was sent !');

    return view('pages.welcome');
  }

}
