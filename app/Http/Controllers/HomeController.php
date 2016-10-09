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
        $data=[
            'title' => 'Задания на ларавел',
            'PageTitle' => '<span style="color: chartreuse">Задания на laravel<span>'
        ];
        return view('pages.create')->with($data);
    }


    public function store(Request $request,Task $task)
    {
//        dd($request->all());
        $sql=$task->insertTask($request->all());

        return redirect()->route('showList');

    }


    public function show($id,Task $num)
    {
//        dd($id);
        $data['task']  = $num->getDataById($id);
//        dd($data);
        return view('pages.show')->with($data);
    }

 public function showList(Task $task)
    {
       $data=$task->getData();
        return view('pages.showList')->with($data);
    }


    public function edit($id,Task $number)
    {
        $value['data']=$number->getDataById($id);
//        dd($value['data']['0']);
        return view('pages.edit')->with($value);

    }


    public function update(Request $id,Task $upd)
    {
//       dd($id->all());
       $upd->updateById($id->all());
        return redirect()->route('showList');
    }


    public function destroy($id,Task $dest)
    {
//        dd($id);
        $dest->destroyById($id);
        return redirect()->route('showList');
    }
}
