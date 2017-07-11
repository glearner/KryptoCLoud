<?php

namespace App\Http\Controllers;
use app\Upload;

use Illuminate\Http\Request;

class Dfilecontroller extends Controller
{
    public function getFile($id)
    {

      $p=Upload::find($id);
      $file= Storage::disk('local')->get($p->sfile);
      return response()->download($file);
    }
}
