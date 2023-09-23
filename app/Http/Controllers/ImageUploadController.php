<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageUploadForm()
    {
        return view('Upload_Image.image_upload');
    }
    public function imageUpload(Request $request)
    {
        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        return back()->withSuccess('You have Sucessfully Uploaded the image!')->withImageName($imageName);
    }
}
