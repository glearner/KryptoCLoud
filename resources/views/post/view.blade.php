@extends('main')
@section('title',' |View')
@section('content')


  <div class="row">
    <div class="col-md-8">
      <div class="jumbotron">
  <p>  <font size="3">{{substr($post->body,0,60)}}{{ strlen($post->body)>60?"...":""}}</font></p>

  </div>

  </div>

  <div class="col-md-4">
    <div class="well">

    <dl class="dl-horizontal">
      <dt>Created At:</dt>
      <dd>{{date('M j,Y h:ia',strtotime($post->created_at))}}</dd>

    </dl>
    <div class="dl-horizontal">
      <dt>Updated At:</dt>

      <dd>{{date('M j,Y h:ia',strtotime($post->updated_at))}}</dd>

    </div>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        {!!Html::linkroute('posts.edit','Decrypt',[$post->id],['class'=>'btn btn-block btn-primary'])!!}
          </div>
      <div class="col-sm-6">
          {!!Html::linkroute('posts.destroy','Delete',[$post->id],['class'=>'btn btn-block btn-danger'])!!}
      </div>

    </div>

    </div>

  </div>

  <div class="col-md-4">
    <h3>If you Decrypt it, please click Encrypt before you leave</h3>
    <div class="col-sm-6">
      {!!Html::linkroute('posts.update','Encrypt',[$post->id],['class'=>'btn btn-block btn-success'])!!}
        </div>
  </div>


</div>




@endsection
