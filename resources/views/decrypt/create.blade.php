@extends('main')
@section('title',' |Upload')

@section('content')
  <h2>Upload file for Decryption</h2>
  <hr>
  {!! Form::open(['route' => 'decrpt.store','data-parsley-validate'=>'','files'=>true]) !!}
  {{Form::label('filez','Upload file : Only .kc extension')}}
  <hr>
  {{Form::file('filez')}}

    {{Form::submit('Decrypt File ',['class'=>'btn btn-block btn-success btn-lg','style'=>'margin-top :20px'])}}
  {!! Form::close() !!}

@endsection
