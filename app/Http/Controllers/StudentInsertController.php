<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentInsertController extends Controller
{
    public function insert_form()
    {
        return view('DBFacade_CRUD.insert_form');
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
        return view('DBFacade_CRUD.student_list', ['students' => $all_student_data]);
    }

    //edit the student details
    public function edit($id)
    {
        $student = DB::select("select *from student where id=?", [$id]);
        return view('DBFacade_CRUD.student_edit', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('student_name');
        // dd($name);
        DB::update("update student set username=? where id=?", [$name, $id]);
        return 'Record updated Successfully! <a href="/">Click here to go back</a>';
    }

    //delete the data using id
    public function delete($id)
    {
        DB::delete('delete from student where id = ?', [$id]);
        return 'Record deleted successfully! <a href="/">Click here to go back</a>';
    }
    //delete all the data in the table
    public function delete_all()
    {
        // DB::statement('truncate table student');
        DB::statement('delete from student');
        return 'All Data is deleted successfully! <a href="/">Click here to go back</a>';
    }


    // Insert id using DBFacade
    public function userForm()
    {
        return  view('Insert_Id.user_form');
    }

    public function createUserId(Request $request)
    {
        $insert_id = DB::table('insertid')->insertGetId(['name' => $request->input('name')]);
        return back()->withInsertId($insert_id);
    }
}
