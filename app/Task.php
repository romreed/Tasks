<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @return array
     */
    public function time(){
        $date=date('Y-m-d H:i:s');
        return $date;
    }

    public function getData()
    {
        $dataDB['tasks'] = DB::select('select * from tasksList ', array(1));
        return $dataDB;
    }
    public function insertTask($request)
    {
        $date=$this->time();
//        dd($request['user_name']);
        DB::table('taskslist')->insert(
            ['name' => $request['name'],
                'nickname' => $request['nickname'],
                'task' => $request['task'],
                'email' =>  $request['email'],
                'created_at'=>$date,
                'updated_at'=>$date,
            ]
        );
    }
    public function getDataById($id)
    {
        $mass= DB::select('select * from tasksList where id =' . "$id", array(1));
        return $mass;
    }
    public function updateById($id){
//        dd($id);
        $date=$this->time();
        $affected=DB::table('tasksList')
            ->where('id', $id['id'])
            ->update(array(
                'name' => $id['name'],
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
