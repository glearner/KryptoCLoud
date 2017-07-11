@extends('main')
@section('title',' |Upload')

@section('content')
<h2>Please Download the Encrypted file</h2>
<hr>
    {!!Html::linkroute('upload.update','Download',[$post->id],['class'=>'btn btn-block btn-primary'])!!}


@endsection
