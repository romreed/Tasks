<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @return array
     */


    public function getData()
    {
        $dataDB['tasks'] = DB::select('select * from tasksList ', array(1));
//        dd($dataDB);
        return $dataDB;
    }
    public function insertTask($request)
    {
//        dd($request['user_name']);
//        INSERT INTO `taskslist`(`userName`, `nickname`, `task`, `email`,`updated_at`)
// VALUES (,[value-2],[value-3],[value-4],[value-5],[value-6]

//        $nickname=$request->nickname;
//        $email=$request->email;
//        $task=$request->task;
//        $published_at=$request->published_at;

//        $sql=DB::insert('INSERT INTO taskslist `userName` VALUES  $request[\'userName\'])',array(1));
        DB::table('taskslist')->insert(
            ['userName' => $request['user_name'],
                'nickname' => $request['nickname'],
                'task' => $request['task'],
                'email' =>  $request['email'],

            ]
        );

    }

}
