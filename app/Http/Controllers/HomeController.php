<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Requests;
use App\Task;

//use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
        $this->validate($request,[
            'name' => 'required',
            'nickname' => 'required',
            'email' => 'required',
            'task' => 'required|max:255', //required|unique|max:255
        ]);

//        if ($validator->fails()) {
//            return redirect('showList')
//                ->withErrors($validator)->with($messages)
//                ->withInput();
//        }

//Вместо $_POST['type']используйте Input::get('type')
        //$validator = Validator::make(Input::all(), array(


        $sql=$task->insertTask($request->all());
        return redirect()->route('showList')->with('message','Data was store in DB');
    }

    public function show($id,Task $num)
    {
//        dd($id);
        $found=$num->findById($id);
        if (empty($found['find']->first())){
            abort(404);
        }
//        $num=$found['find']->first();
        $data['task']  = $num->getDataById($id);
        return view('pages.show')->with($data);
    }

    public function showList(Task $task)
    {
//        $data=$task->getData();
//        $pagin=DB::table('taskslist')->paginate(2);
        $pagin=DB::table('tasksList')->paginate(5);
//        dd($pagin);


        return view('pages.showList', ['pagin' => $pagin]);
    }

    public function edit($id,Task $number)
    {
        $value['data']=$number->getDataById($id);
//        dd($value['data']['0']);
        return view('pages.edit')->with($value)->with('message','Data was edit');
    }

    public function update(Request $id,Task $upd)
    {
//       dd($id);
//       dd(request->all());
        $upd->updateById($id->all());
        return redirect()->route('showList')->with('message','Data was update');
    }

    public function destroy($id,Task $dest)
    {
//        dd($id);
        $dest->destroyById($id);
        return redirect()->route('showList')->with('message','Data was destroy');
    }
}
