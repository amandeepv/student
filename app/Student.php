<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
            "name",
            "age",
        ];
    public static function store($request, $student = null)
    {
        if($student === null)
        {
            $student = new Student();
        }
        $student->fill($request->toArray());
        $student->save();
    }
}
