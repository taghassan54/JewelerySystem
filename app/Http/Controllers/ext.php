<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ext extends Controller
{
    public static function uploadImg($img, $pre)
    {


        $file = $img;
        //$fileName = time().'-'.$file->getClientOriginalName();

        //get filename with extension
        $filenamewithextension = $img->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $img->getClientOriginalExtension();

        //filename to store
        $fileName  = $filenametostore = $pre . '_' . time() . '.' . $extension;


        $file->move('uploads/' . $pre . '/', $fileName);

        return  '/uploads/' . $pre . '/' . $fileName;
    }
}
