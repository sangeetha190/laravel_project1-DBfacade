<?php

namespace App\Http\Controllers;

use App\Models\User_Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function deleteFromPublic()
    {
        if (File::exists(public_path('uploads/apple.jpg'))) {
            File::delete(public_path('uploads/apple.jpg'));
            dd('File is deleted');
        } else {
            dd('File not Found');
        }
    }
    public function deleteFromStorage()
    {
        if (Storage::exists('uploads/apple.jpg')) {
            Storage::delete('uploads/apple.jpg');
            dd('File is deleted');
        } else {
            dd('File not Found');
        }
    }

    public function paginationList()
    {
        // $user_list = User_Data::all();
        $user_list = User_Data::paginate(5);
        return view('Pagination_List.pagination_list', ['users' => $user_list]);
    }
}
