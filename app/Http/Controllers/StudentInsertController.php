<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentInsertController extends Controller
{
    public function insert_form()
    {
        return view('insert_form');
    }
    // insert the data
    public function insert(Request $req)
    {
        $name = $req->input('student_name');
        // dd($name);
        DB::insert("insert into student(username) values(?)", [$name]);
        return "Record is Created successfully! <a href='/'>Click here to go Back</a>";
    }
    //show all the list of data
    public function student_list()
    {
        $all_student_data = DB::select("select * from student");
        return view('student_list', ['students' => $all_student_data]);
    }
}
