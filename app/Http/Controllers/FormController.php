<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function Formupload()
    {
        return view('/form');
    }
    

    public function FormFile(Request $request){
		$this->validate($request, [
			'images' => 'required',
            'name' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'nisn' => 'required'
			
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('images');

		$tujuan_upload = 'C:\LARAVEL\Prakerin Laravel\data_file';
        $file->move($tujuan_upload,$file->getClientOriginalName());
	}
}
