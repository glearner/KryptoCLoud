
@extends('main')
@section('title','| HomePage')
@section('content')


      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
  <h3>Easy and Reliable</h3>

  <p>
  <font size="3">

We understand simplicity as a key aspect of security.
With KryptoCloud you don't have to deal with accounts, key management, cloud access grants or cipher configurations.
 Just choose a password and you're ready to go.
 </font>
</p>
<p>
    <font size="3">
You don't even need to specify what cloud you use.
KryptoCloud encrypts files and doesn't care where you store them.
 This makes it a lightweight application, which we believe is a huge benefit for reliability.
  Complexity would kill security.
</font>
</p>
<p>
    <font size="3">
KryptoCloud is a so-called transparent encryption utility.
 This means that you don't have to learn new workflows.
  Just work with your files as you're used to.
</font>
</p>


</div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6">

          <div class="jumbotron">
            <h2>Special Text Encryption</h2>
              <p><a href="{{url('posts/create')}}" class="btn btn-primary" role="button">Encrypt</a></p>
          </div>
                  </div>
                  <div class="col-md-6">

                    <div class="jumbotron">
                      <h2>Special File Encry  ption</h2>
                        <p><a href="{{url('upload/create')}}" class="btn btn-primary" role="button">Encrypt</a></p>
                    </div>
                            </div>
                </div>

   @endsection
