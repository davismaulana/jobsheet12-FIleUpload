<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadAssgController extends Controller
{
    public function fileUpload(){
        return view('file-upload-assg');
    }

    public function prosesFileUpload(Request $request){
        
        $request->validate([
            'berkas' => 'required|file|image|max:500'
        ]);
        $nameFile = $request->name;

        $path = $request->berkas->move('gambar',$nameFile);
        $path = str_replace('\\', '//', $path);

        $pathBaru = asset('gambar/'.$nameFile);
        echo "Gambar berhasil diupload ke <a href='$pathBaru'>$nameFile</a>";
        echo "<br>";
        echo "<img src= '$pathBaru' >";
    }
}
