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
}
