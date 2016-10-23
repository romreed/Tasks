<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Mail;

class MailController extends Controller
{
    //
    public function simpleMail(){
        $data = [
            'name' => 'Roman',
        ];
        //________________type______view__
        $send=Mail::send(['html' => 'mail'], $data, function ($message){
            $message->to('romreed@ya.ru','RomReed')->subject('send mail from laravel');
            $message->from('elitlegend@gmail.com','elit');
        });

        if ($send){
            $ans ['mail']= 'mail was send';
        }
        else $ans ['mail'] =  'some trubles';

        return view('mail',$ans);
    }
}


