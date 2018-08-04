<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    protected $fillable = [
            "name",
            "age",
        ];
    public static function store($request)
    {
        $student = self::whereName($request['name'])->whereAge($request['age'])->get();
        if(sizeof($student) > 0){
            //You may throw an error here. 
            $student = $student->first();
        }else{
            $student = new Student();
        }
        $student->fill($request);
        $student->save();
    }
}
