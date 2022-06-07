<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form',[
            "title" => "Form"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $pasfoto = $request->file('pasfoto');
        $fotocopy = $request->file('fotocopy');
        
        $nama_pas = time()."_".$pasfoto->getClientOriginalName();
        $nama_fot = time()."_".$fotocopy->getClientOriginalName();

        $tujuan_upload_pas = 'data_pasfoto';
        $tujuan_upload_fot = 'data_fotocopy';

        $pasfoto->move($tujuan_upload_pas, $nama_pas);
        $fotocopy->move($tujuan_upload_fot, $nama_fot);

        Form::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'pasfoto' => $nama_pas,
            'fotocopy' => $nama_fot
        ]);

        return redirect('/form');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Form::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Form::findOrFail($id);
        $data->update([
            'name' => $request->name,
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'email' => $request->email,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Form::where('id', $id)->delete();

        return redirect()->back();
    }
}
