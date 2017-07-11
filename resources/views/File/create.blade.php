@extends('main')
@section('title',' |Upload')

@section('content')
<h2>Upload file for Encryption</h2>
<hr>
  {!! Form::open(['route' => 'upload.store','data-parsley-validate'=>'','files'=>true]) !!}
  {{Form::label('filez','Upload file: All extension')}}
  <hr>
  {{Form::file('filez')}}
    {{Form::submit('Encrypt File ',['class'=>'btn btn-block btn-success btn-lg','style'=>'margin-top :20px'])}}
  {!! Form::close() !!}

@endsection
