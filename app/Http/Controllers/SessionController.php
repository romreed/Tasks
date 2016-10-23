<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller
{
    public function get(Request $request){
        $data = $request->session()->all();
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }


    //Pushing To Array Session Values
    //$request->session()->push('user.teams', 'developers');
    //
    //Retrieving & Deleting An Item
    //$value = $request->session()->pull('key', 'default');
    //
    //Deleting Data
    //$request->session()->forget('key');
    //
    //If you would like to remove all data from the session, you may use the flush method:
    //$request->session()->flush();

    public function put(Request $request){
        $request->session()->put('Session', 'value');
        echo 'session valie insert';
        $this->get($request);
    }

    public function dell(Request $request){
        $request->session()->forget('Session');
        echo 'session value dell';
        $this->get($request);
    }


}
