<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use \App\Models\Image;

class imageController extends Controller
{
    public function getAllImages(){
        return Image::all();
    }

    public function uploadImage(Request $request)
    {
        $path = Storage::putFile('image', $request->image);
        DB::insert('insert into images (filename) values (?)', array($path));
        return response()->json(['path' => $path]);
    }

    public function getImage($path)
    {
        $image = Storage::get($path);
        return response($image, 200)->header('Content-Type', Storage::getMimeType($path));
    }
}
