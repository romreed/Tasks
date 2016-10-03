<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Task;


class HomeController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function indexNew(Task $dataDB)
    {
        $dataModel = $dataDB->getData();
        $data=[
            'title' => 'Гостевая книга ',
            'PageTitle' => '<span style="color: chartreuse">Гостевая книга на laravel<span>',
            'users' =>
                [
                    ['name' => 'вася'],
                    ['name' => 'петя'],
                    ['name' => 'витя'],
                    ['name' => 'игорь'],
                ]
        ];
        return view('pages.index',$data)->with($dataModel);
        //return view('pages.index')->with($data);
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
