<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UploadFileController extends Controller
{
    public function index(){
        return view('pages.uploadFile');
    }

    public function upload(Request $request){

        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png',
        ]);


        $file = $request->file('image');
//        dd($file);
        //show the file name
//        echo 'File Name : '.$file->getClientOriginalName();
//        echo '<br>';
        $file_data['name']=$file->getClientOriginalName();


        //show the file extensions
//        echo 'File extension : '.$file->getClientOriginalExtension();
//        echo '<br>';
        $file_data['extension']=$file->getClientOriginalExtension();

        //show the file path
//        echo 'File path : '.$file->getRealPath();
//        echo '<br>';

        $file_data['path']=$file->getRealPath();


        //show the file size
//        echo 'File size : '.$file->getSize();
//        echo '<br>';


        $file_data['size']=$file->getSize();

        //show the file mime type
//        echo 'File Name : '.$file->getMimeType();
//         echo '<br>';

        $file_data['mime']=$file->getMimeType();

        //move uploaded File

        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $file_data['status']='File Good Uploaded';
        return view('pages.uploadFile')->with($file_data);
    }
}
