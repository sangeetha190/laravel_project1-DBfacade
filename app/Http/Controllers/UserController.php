<?php

namespace App\Http\Controllers;

use App\Models\User_Data;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class UserController extends Controller
{
    public function create()
    {
        return view('Normal_CRUD.create_user_data');
    }
    public function store(Request $request)
    {
        // $name = $request->input('username');
        // $age = $request->input('age');
        // $phone = $request->input('phone');

        // $user = new User_Data();

        // $user->username = $name;
        // $user->age = $age;
        // $user->phone = $phone;
        // $user->save();
        // $data = $request->only(['username', 'age', 'phone']);

        // $data = User_Data
        $user = User_Data::create([
            // 'username' =>'$request->input('username')',
            'username' => $request->input('username'),
            'age' => $request->input('age'),
            'phone' => $request->input('phone'),
        ]);
        $user->save();


        // $user = User_Data::create($request->all());
        // $user->save();
        // dd($user, $data);
        return 'Record is created successfully' . $user->id;
    }

    // List all the data
    public function list()
    {
        $users = User_Data::all();
        return view('Normal_CRUD.list_user_data', ['users' => $users]);
    }

    // edit the data using there id
    public function edit($id)
    {
        $user = User_Data::find($id);
        return view('Normal_CRUD.edit_user_data', ['user' => $user]);
    }
    // update the data using there id
    public function update(Request $request, $id)
    {
        $user = User_Data::find($id);
        $user->username = $request->input('username');
        $user->age = $request->input('age');
        $user->phone = $request->input('phone');

        $user->save();
        return 'Record is Updated Successfully! <a href="' . url('/normal/list') . '">Click here to go Back</a>';
    }
    // delete the data using the id
    public function delete($id)
    {
        $user = User_Data::find($id);
        $user->delete();
        return 'Record is Deleted Successfully! <a href="' . url('/normal/list') . '">Click here to go Back</a>';
    }
}
