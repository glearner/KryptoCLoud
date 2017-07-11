@extends('main')
@section('title',' |Upload')

@section('content')

  {!! Form::open(['route' => 'upload.edit','data-parsley-validate'=>'','files'=>true]) !!}
  {{Form::label('filez','Upload file')}}
  {{Form::file('filez')}}
  
    {{Form::submit('Upload File ',['class'=>'btn btn-block btn-success btn-lg','style'=>'margin-top :20px'])}}
  {!! Form::close() !!}

@endsection
