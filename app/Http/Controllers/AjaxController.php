<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxController extends Controller
{
    public function ajax(){
        return view('ajax');
    }

    public function ajaxAns (Request $data){
            $ans ['ans'] = "data from server";
            $ans ['req'] = $data['body'];
        return response()->json($ans);
    }
}
