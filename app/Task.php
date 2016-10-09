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
        return $dataDB;
    }
    public function insertTask($request)
    {
        $date=date('Y-m-d H:i:s');
//        dd($request['user_name']);
        DB::table('taskslist')->insert(
            ['userName' => $request['user_name'],
                'nickname' => $request['nickname'],
                'task' => $request['task'],
                'email' =>  $request['email'],
                'created_at'=>$date,
                'updated_at'=>$date,
            ]
        );
//DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));
        //DB::update('update users set votes = 100 where name = ?', array('John'));
        //DB::delete('delete from users');
        //       DB::table('taskslist')->('select * from tasksList where id = 1',array(1) );
    }
    public function getDataById($id)
    {

        $mass= DB::select('select * from tasksList where id =' . "$id", array(1));
        return $mass;

    }
    public function updateById($id){

//        dd($id);

        $date=date('Y-m-d H:i:s');
        $affected=DB::table('tasksList')
            ->where('id', $id['id'])
            ->update(array(
                'userName' => $id['user_name'],
                    'nickname'=>$id['nickname'],
                'task'=>$id['task'],
                'email'=>$id['email'],
                'updated_at'=>$date,

            ));
        return $affected;
    }
    public function destroyById($id){
//        dd($id);
        $destroy=DB::table('tasksList')
            ->where('id', $id)
            ->delete();
        return $destroy;
    }
}
