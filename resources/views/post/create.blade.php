@extends('main')
@section('title',' Create')
@section('stylesheet')
{!!Html::style('css/parsley.css')!!}
@endsection
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>Create Encrypt Mummble</h2>
    <hr>
    {!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'','files'=>true]) !!}
      {{Form::label('body','Text To Encrypt:')}}
      {{Form::textarea('body',null,['class'=>'form-control','required'=>''])}}
      {{Form::submit('Encrypt Text',['class'=>'btn btn-block btn-success btn-lg','style'=>'margin-top :20px'])}}
    {!! Form::close() !!}

  </div>

</div>

@endsection

@section('scripts')
{!!Html::script('script/parsley.min.js')!!}
@endsection
