<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function indexNew()
    {
        $data=[
            'title' => 'Гостевая книга ',
            'PageTitle' => '<i style="color: chartreuse">Гостевая книга на laravel<i>',
            'users' =>
            [
                ['name' => 'вася'],
                ['name' => 'петя'],
                ['name' => 'витя'],
                ['name' => 'игорь'],
            ]
        ];
        return view('pages.index',$data);
        //return view('pages.index')->with($data);
    }
    public function edit($id)
    {

       return "$id";
    }
}
