<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index() {
        $files = Storage::disk('s3')->allFiles('avatars');

        // dd($files);

        return view('file', ['files' => $files]);
    }

    public function upload(Request $request) {
        $files = $request->uploadFiles;
        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $upload = Storage::disk('s3')->put("avatars/1/$fileName", file_get_contents($file), 'public');

        }
        return redirect()->route('file');
    }
}
