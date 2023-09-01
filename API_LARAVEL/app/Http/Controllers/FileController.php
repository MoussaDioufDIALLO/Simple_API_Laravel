<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload(Request $req)
    {
        if ($req->hasFile('file')) {
            $result = $req->file('file')->store('app');
            return ["result"=>$result];
        } else {
            return ["result"=>''];
        }
    }
    
}
